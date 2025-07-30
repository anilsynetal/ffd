<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\MainMenu;
use App\Models\Setting;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\GoogleCloudStorage\GoogleCloudStorageAdapter;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        // Register GCS driver manually
        Storage::extend('gcs', function ($app, $config) {
            $storageClient = new StorageClient([
                'projectId' => $config['project_id'],
                'keyFilePath' => $config['key_file'],
            ]);

            $bucket = $storageClient->bucket($config['bucket']);
            $adapter = new GoogleCloudStorageAdapter($bucket);

            return new FilesystemAdapter(new Filesystem($adapter), $adapter, $config);
        });

        view()->composer('*', function ($view) {
            $settings = (object)[];
            $menus = (object)[];
            $contact = (object)[];

            try {
                // Check if the database connection is available
                DB::connection()->getPdo();

                if (Auth::check()) {
                    $contact = Contact::first();
                    $contact->app_name = Setting::where('key', 'app_name')->first()->value;
                    $contact->app_logo = Setting::where('key', 'app_logo')->first()->value;
                    $settings = Setting::get()->toArray();
                    $menus = MainMenu::with(['sub_menus' => function ($q) {
                        $q->whereNotIn('language_key', ['RoleMaster', 'ClientRegistration'])->orderBy('order', 'ASC');
                    }])->whereNotIn('language_key', [])->where('status', 1)->orderBy('order')->get()->toArray();
                }
            } catch (\Exception $e) {
                // Log error but continue execution to avoid app crash
                Log::error('Database connection failed in AppServiceProvider: ' . $e->getMessage());
            }

            $view->with([
                'settings' => $settings,
                'menus' => $menus,
                'contact' => $contact
            ]);

            app()->instance('settings', $settings);
            app()->instance('menus', $menus);
            app()->instance('contact', $contact);
        });
    }
}
