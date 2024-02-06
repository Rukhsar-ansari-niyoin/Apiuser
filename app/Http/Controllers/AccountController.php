<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;

class AccountController extends Controller
{
    //

    public function index(){
        $pageTitle = "PAYMENT REQUEST";
         $auth_user = AuthHelper::authSession();
         $assets = ['data-table'];
         //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
         return view('accounts.payment-request',compact('pageTitle','auth_user','assets'));
         
    // return view('users.agent');
 }

 public function payment_report(){
    $pageTitle = "Credit / Debit List";
    $auth_user = AuthHelper::authSession();
    $assets = ['data-table'];
   // $headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
    return view('accounts.payment-report',compact('pageTitle','auth_user','assets'));
 }

 public function my_credit_book(){
    $pageTitle = "MY CREDIT BOOK";
    $auth_user = AuthHelper::authSession();
    $assets = ['data-table'];
    //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
    return view('accounts.my_credit_book',compact('pageTitle','auth_user','assets'));
 }

 public function company_bank_info(){
    $pageTitle = "COMPANY BANK INFORMATION";
    $auth_user = AuthHelper::authSession();
    $assets = ['data-table'];
    //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
    return view('accounts.company_bank_info',compact('pageTitle','auth_user','assets'));
 }
 
 public function disputes(){
   $pageTitle = "DISPUTES";
   $auth_user = AuthHelper::authSession();
   $assets = ['data-table'];
   //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
   return view('accounts.company_bank_info',compact('pageTitle','auth_user','assets'));
 }
 public function daybook(){
   $pageTitle = "Daybook";
   $auth_user = AuthHelper::authSession();
   $assets = ['data-table'];
   //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
   return view('accounts.company_bank_info',compact('pageTitle','auth_user','assets'));
 }
 public function passbook(){
   $pageTitle = "passbook";
   $auth_user = AuthHelper::authSession();
   $assets = ['data-table'];
   //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
   return view('accounts.passbook',compact('pageTitle','auth_user','assets'));
 }
 public function invoice(){
   $pageTitle = "invoice";
   $auth_user = AuthHelper::authSession();
   $assets = ['data-table'];
   //$headerAction = '<a href="'.route('agent.create').'" class="btn btn-sm btn-primary" role="button">Add Agent</a>';
   return view('accounts.company_bank_info',compact('pageTitle','auth_user','assets'));
 }
}
