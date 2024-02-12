<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.user-dashboard', compact('assets'));
    }

    public function dashboard(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.admin-dashboard', compact('assets'));
    }
    public function services(){
        $pageTitle = "View All Services";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('admin.services',compact('pageTitle','auth_user','assets'));
    }

    public function add_Commission(){
        $pageTitle = "add_Commission";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('admin.add_Commission',compact('pageTitle','auth_user','assets'));
    }
    public function Commission(){
        $pageTitle = "View All Commission";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('admin.Commission',compact('pageTitle','auth_user','assets'));
    }
   
    public function signin(Request $request)
    {
        return view('auth.login');
    }
    public function signup(Request $request)
    {
        return view('auth.register');
    }
    public function confirmmail(Request $request)
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request)
    {
        return view('auth.lockscreen');
    }
    
     public function company_bank_info(){
         $pageTitle = "View All Banks";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
       
        return view('admin.company_bank_info',compact('pageTitle','auth_user','assets'));
   }

   public function add_new_bank(){
    $pageTitle = "add_new_bank";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
     
        return view('admin.add_new_bank',compact('pageTitle','auth_user','assets'));
   }
   public function admin_wallet(){
       $pageTitle = "admin_wallet";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
     
        return view('admin.admin_wallet',compact('pageTitle','auth_user','assets'));
   }
}
