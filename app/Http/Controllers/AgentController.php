<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;

class AgentController extends Controller
{
    //
public function index(){
       $pageTitle = "Agent list";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
        return view('users.agent',compact('pageTitle','auth_user','assets', 'headerAction'));
        
   // return view('users.agent');
}
public function create()
    {
        $roles = Role::where('status',1)->get()->pluck('title', 'id');

        return view('users.form', compact('roles'));
    }
}
