<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Belongs To User Created By
    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    //Belongs To User Updated By
    public function updated_by_user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    //Form Fields
    static function fields($id = null)
    {
        $form_fields = [
            [
                'name' => 'address',
                'label' => __('translation.Address'),
                'type' => 'text',
                'id' => 'address',
                'class' => '',
                'required' => true,
                'placeholder' => __('translation.EnterAddress'),
                'col_size' => 'col-md-12'
            ],
            [
                'name' => 'phone',
                'label' => __('translation.Phone'),
                'type' => 'text',
                'id' => 'phone',
                'class' => '',
                'required' => true,
                'placeholder' => __('translation.EnterPhone'),
                'col_size' => 'col-md-6',
                'oninput' => 'oninput=this.value=this.value.replace(/[^0-9]/g,\'\').substring(0,10);',
            ],
            [
                'name' => 'email',
                'label' => __('translation.Email'),
                'type' => 'text',
                'id' => 'email',
                'class' => '',
                'required' => true,
                'placeholder' => __('translation.EnterEmail'),
                'col_size' => 'col-md-6'
            ],
            [
                'name' => 'map',
                'label' => __('translation.Map'),
                'type' => 'textarea',
                'id' => 'map',
                'class' => '',
                'required' => true,
                'placeholder' => __('translation.EnterMap'),
                'col_size' => 'col-md-12',
                'rows' => 8
            ],
            [
                'name' => 'facebook',
                'label' => __('translation.Facebook'),
                'type' => 'text',
                'id' => 'facebook',
                'class' => '',
                'required' => false,
                'placeholder' => __('translation.EnterFacebook'),
                'col_size' => 'col-md-6'
            ],
            [
                'name' => 'twitter',
                'label' => __('translation.Twitter'),
                'type' => 'text',
                'id' => 'twitter',
                'class' => '',
                'required' => false,
                'placeholder' => __('translation.EnterTwitter'),
                'col_size' => 'col-md-6'
            ],
            [
                'name' => 'instagram',
                'label' => __('translation.Instagram'),
                'type' => 'text',
                'id' => 'instagram',
                'class' => '',
                'required' => false,
                'placeholder' => __('translation.EnterInstagram'),
                'col_size' => 'col-md-6'
            ],
            [
                'name' => 'linkedin',
                'label' => __('translation.Linkedin'),
                'type' => 'text',
                'id' => 'linkedin',
                'class' => '',
                'required' => false,
                'placeholder' => __('translation.EnterLinkedin'),
                'col_size' => 'col-md-6'
            ]
        ];

        return $form_fields;
    }

    //Get Table data
    static function getTableData($contact_count)
    {
        $buttons = [];
        $buttons = array(
            ['extend' => 'csv', 'exportOptions' => ['columns' => ':not(.notexport)']],
            ['extend' => 'excel', 'exportOptions' => ['columns' => ':not(.notexport)']],
            ['colvis']
        );
        return array(
            'title' => __('translation.ContactUs'),
            'module' => __('translation.AccountSettings'),
            'active_page' => __('translation.ContactUs'),
            'is_add' => auth()->user()->can('settings.contacts.add') && $contact_count == 0 ? true : false,
            'is_modal' => true,
            'is_modal_large' => false,
            'is_back_button' => false,
            'view_deleted_btn' => auth()->user()->can('settings.contacts.restore') ? false : false,
            'back_route' => route('settings.contacts.index'),
            'index_route' => route('settings.contacts.index'),
            'create_route' => route('settings.contacts.create'),
            'columns' => [
                '#',
                __('translation.Address'),
                __('translation.Phone'),
                __('translation.Email'),
                __('translation.Map'),
                __('translation.Facebook'),
                __('translation.Twitter'),
                __('translation.Instagram'),
                __('translation.Linkedin'),
                __('translation.CreatedBy'),
                __('translation.Status'),
                __('translation.Action'),
            ],
            'ajax_url' => route('settings.contacts.get-ajax-data'),
            'buttons' => $buttons,
            'js_columns' => [
                ['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'searchable' => false, 'orderable' => false],
                ['data' => 'address', 'name' => 'address', 'wrap' => true],
                ['data' => 'phone', 'name' => 'phone'],
                ['data' => 'email', 'name' => 'email'],
                ['data' => 'map', 'name' => 'map', 'searchable' => false, 'orderable' => false],
                ['data' => 'facebook', 'name' => 'facebook', 'searchable' => false, 'orderable' => false],
                ['data' => 'twitter', 'name' => 'twitter', 'searchable' => false, 'orderable' => false],
                ['data' => 'instagram', 'name' => 'instagram', 'searchable' => false, 'orderable' => false],
                ['data' => 'linkedin', 'name' => 'linkedin', 'searchable' => false, 'orderable' => false],
                ['data' => 'created_by', 'name' => 'created_by_user.name'],
                ['data' => 'status', 'name' => 'status', 'searchable' => false, 'orderable' => false],
                ['data' => 'action', 'name' => 'action', 'orderable' => false, 'searchable' => false],
            ],
        );
    }
}
