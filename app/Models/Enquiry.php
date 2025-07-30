<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{

    //Belongs to Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    //Get Table data
    static function getTableData()
    {
        $buttons = [];
        $buttons = array(
            ['extend' => 'csv', 'exportOptions' => ['columns' => ':not(.notexport)']],
            ['extend' => 'excel', 'exportOptions' => ['columns' => ':not(.notexport)']],
            ['colvis']
        );
        return array(
            'title' => __('translation.EnquiryList'),
            'module' => __('translation.ManageUsers'),
            'active_page' => __('translation.EnquiryList'),
            'is_add' =>  false,
            'is_modal' => true,
            'is_modal_large' => false,
            'is_back_button' => false,
            'view_deleted_btn' => auth()->user()->can('users_and_roles.enquiries.restore') ? false : false,
            'back_route' => route('user-managements.enquiries.index'),
            'index_route' => route('user-managements.enquiries.index'),
            'create_route' => route('user-managements.enquiries.create'),
            'columns' => [
                '#',
                __('translation.Name'),
                __('translation.Email'),
                __('translation.Mobile'),
                __('translation.CompanyName'),
                __('translation.Message'),
                __('translation.Action'),
            ],
            'ajax_url' => route('user-managements.enquiries.get-ajax-data'),
            'buttons' => $buttons,
            'js_columns' => [
                ['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'searchable' => false, 'orderable' => false],
                ['data' => 'name', 'name' => 'name'],
                ['data' => 'email', 'name' => 'email'],
                ['data' => 'mobile', 'name' => 'mobile'],
                ['data' => 'company_name', 'name' => 'company_name', 'wrap' => true],
                ['data' => 'message', 'name' => 'message', 'wrap' => true],
                ['data' => 'action', 'name' => 'action', 'orderable' => false, 'searchable' => false],
            ],
        );
    }
}
