<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;


class ApiController extends Controller
{
    //
    public function OperatorList(){
        $pageTitle = "Operator List";
   $auth_user = AuthHelper::authSession();
   $assets = ['data-table'];
  
   return view('api.OperatorList',compact('pageTitle','auth_user','assets'));
    }
}
