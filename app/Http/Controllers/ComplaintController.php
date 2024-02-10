<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;

class ComplaintController extends Controller
{
    //

    public function track_complaint(){
        $pageTitle = "Track Complaint";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('complaint.track_complaint',compact('pageTitle','auth_user','assets'));
    }
    public function raise_complaint(){
        $pageTitle = "Raise Complaint";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('complaint.raise_complaint',compact('pageTitle','auth_user','assets'));
    }
}
