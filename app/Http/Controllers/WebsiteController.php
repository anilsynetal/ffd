<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Benefit;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Client;
use App\Models\Enquiry;
use App\Models\Feature;
use App\Models\NewsLetter;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Utils\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {
        $slider = Slider::where('status', 1)->first();
        $about = About::where('status', 1)->first();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        $services = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $testimonials = Testimonial::where('status', 1)->orderBy('id', 'desc')->get();
        $clients = Client::where('status', 1)->orderBy('id', 'desc')->get();
        $benefits = Benefit::where('status', 1)->orderBy('id', 'desc')->get();
        $case_studies = CaseStudy::where('status', 1)->orderBy('id', 'desc')->get();
        $core_features = Feature::where('status', 1)->where('is_core_feature', 1)->orderBy('id', 'desc')->get();
        $key_features = Feature::where('status', 1)->where('is_core_feature', 0)->orderBy('id', 'desc')->get();
        return view('website.home', compact('slider', 'blogs', 'services', 'benefits', 'core_features', 'key_features', 'about', 'case_studies', 'testimonials', 'clients'));
    }

    //Blog Details
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) {
            return redirect()->route('home')->with('error', 'Blog not found');
        }
        return view('website.include.blog-details-modal', compact('blog'))->render();
    }

    //Store Enquiry
    public function enquiry_store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'mobile' => 'required|regex:/^[0-9]{10}$/|max:20',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        try {
            $enquiry = new Enquiry();
            $enquiry->name = $request->name;
            $enquiry->email = $request->email;
            $enquiry->mobile = preg_replace('/[^0-9]/', '', $request->mobile);
            $enquiry->company_name = $request->company_name;
            $enquiry->message = $request->message;
            $enquiry->ip_address = $request->ip();
            $enquiry->save();
            // Send email notification to admin
            $admin_email = Setting::where('key', 'mail_from_address')->value('value');
            $data = [
                'type' => 'enquiry',
                'name' => $enquiry->name,
                'email' => $enquiry->email,
                'mobile' => $enquiry->mobile,
                'subject' => $request->subject ?? __('translation.NewEnquiry'),
                'company_name' => $enquiry->company_name,
                'message' => $enquiry->message,
                'ip_address' => $enquiry->ip_address,
            ];
            if ($admin_email) {
                Mail::to($admin_email)->send(new \App\Mail\EnquiryNotification($data));
            }
            // Send email notification to user
            if ($enquiry->email) {
                $data['type'] = 'acknowledgment';
                $data['subject'] =  __('translation.EnquiryAcknowledgmentSubject');
                Mail::to($enquiry->email)->send(new \App\Mail\EnquiryAcknowledgment($data));
            }

            return response()->json([
                'status' => true,
                'type' => 'contact',
                'message' => __('translation.EnquirySubmittedSuccessfully')
            ], 200);
        } catch (\Exception $e) {
            Util::generateErrorLog($e);
            return response()->json([
                'status' => false,
                'type' => 'contact',
                'message' => __('translation.SomethingWentWrong'),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //Store Newsletter Subscription
    public function subscribe_newsletter(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email|max:100|unique:news_letters,email',
            ],
            [
                'email.unique' => __('translation.EmailAlreadySubscribed'),
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        try {
            $store = new NewsLetter();
            $store->email = $request->email;
            $store->save();
            return response()->json([
                'status' => true,
                'type' => 'subscription',
                'message' => __('translation.NewsletterSubscribedSuccessfully')
            ], 200);
        } catch (\Exception $e) {
            Util::generateErrorLog($e);
            return response()->json([
                'status' => false,
                'type' => 'subscription',
                'message' => __('translation.SomethingWentWrong'),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //Privacy Policy
    public function privacy_policy()
    {
        return view('website.privacy-policy');
    }
}
