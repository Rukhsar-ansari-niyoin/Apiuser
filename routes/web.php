<?php

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ComplaintController;

use Illuminate\Support\Facades\Artisan;
// Packages
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});





//UI Pages Routs
Route::get('/', [HomeController::class, 'uisheet'])->name('uisheet');

Route::group(['middleware' => 'auth'], function () {
    // Permission Module
    Route::get('/role-permission',[RolePermission::class, 'index'])->name('role.permission.list');
    Route::resource('permission',PermissionController::class);
    Route::resource('role', RoleController::class);

    // Dashboard Routes
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/Commission', [HomeController::class, 'Commission'])->name('Commission');
    Route::get('/add_Commission', [HomeController::class, 'add_Commission'])->name('add_Commission');
    Route::get('/company_bank_info', [HomeController::class, 'company_bank_info'])->name('company_bank_info');
    Route::get('/add_new_bank', [HomeController::class, 'add_new_bank'])->name('add_new_bank');
    Route::get('/admin_wallet', [HomeController::class, 'admin_wallet'])->name('admin_wallet');
    // Users Module
    Route::resource('users', UserController::class);
    // agent module
    Route::group(['prefix' => 'agents'], function() {
        Route::get('agents', [AgentController::class, 'index'])->name('agents');
        Route::get('agents/create', [AgentController::class, 'create'])->name('agent.create');
        
    });
    ////////API/////////////
    Route::group(['prefix' => 'api'], function() {
        Route::get('OperatorList', [ApiController::class, 'OperatorList'])->name('OperatorList');
        Route::get('ip-callback-settings', [ApiController::class, 'Ipcallback'])->name('ip-callback-settings');
        
    });
    //////complaint///////
    Route::group(['prefix' => 'complaint'], function() {
        Route::get('track_complaint', [ComplaintController::class, 'track_complaint'])->name('track_complaint');
       Route::get('raise_complaint', [ComplaintController::class, 'raise_complaint'])->name('raise_complaint');
        
    });
    //////accounts //////////////
    //Widget Routs
Route::group(['prefix' => 'accounts'], function() {
    Route::get('payment', [AccountController::class, 'index'])->name('payment.request');
    Route::get('payment_report', [AccountController::class, 'payment_report'])->name('payment.report');
    Route::get('my_credit_book', [AccountController::class, 'my_credit_book'])->name('payment.credit_book');
    Route::get('company_bank_info', [AccountController::class, 'company_bank_info'])->name('payment.company_bank_info');
    Route::get('disputes', [AccountController::class, 'disputes'])->name('disputes');
    Route::get('daybook', [AccountController::class, 'daybook'])->name('payment.daybook');
    Route::get('passbook', [AccountController::class, 'passbook'])->name('payment.passbook');
    Route::get('invoice', [AccountController::class, 'invoice'])->name('payment.invoice');
    Route::get('upgrade_package', [AccountController::class, 'upgrade_package'])->name('upgrade_package');

    Route::get('low_balance', [AccountController::class, 'low_balance'])->name('payment.low_balance');
    

});
   

   
});

//App Details Page => 'Dashboard'], function() {
Route::group(['prefix' => 'menu-style'], function() {
    //MenuStyle Page Routs
    Route::get('horizontal', [HomeController::class, 'horizontal'])->name('menu-style.horizontal');
    Route::get('dual-horizontal', [HomeController::class, 'dualhorizontal'])->name('menu-style.dualhorizontal');
    Route::get('dual-compact', [HomeController::class, 'dualcompact'])->name('menu-style.dualcompact');
    Route::get('boxed', [HomeController::class, 'boxed'])->name('menu-style.boxed');
    Route::get('boxed-fancy', [HomeController::class, 'boxedfancy'])->name('menu-style.boxedfancy');
});

//App Details Page => 'special-pages'], function() {
Route::group(['prefix' => 'special-pages'], function() {
    //Example Page Routs
    Route::get('billing', [HomeController::class, 'billing'])->name('special-pages.billing');
    Route::get('calender', [HomeController::class, 'calender'])->name('special-pages.calender');
    Route::get('kanban', [HomeController::class, 'kanban'])->name('special-pages.kanban');
    Route::get('pricing', [HomeController::class, 'pricing'])->name('special-pages.pricing');
    Route::get('rtl-support', [HomeController::class, 'rtlsupport'])->name('special-pages.rtlsupport');
    Route::get('timeline', [HomeController::class, 'timeline'])->name('special-pages.timeline');
});

//Widget Routs
Route::group(['prefix' => 'widget'], function() {
    Route::get('widget-basic', [HomeController::class, 'widgetbasic'])->name('widget.widgetbasic');
    Route::get('widget-chart', [HomeController::class, 'widgetchart'])->name('widget.widgetchart');
    Route::get('widget-card', [HomeController::class, 'widgetcard'])->name('widget.widgetcard');
});

//Maps Routs
Route::group(['prefix' => 'maps'], function() {
    Route::get('google', [HomeController::class, 'google'])->name('maps.google');
    Route::get('vector', [HomeController::class, 'vector'])->name('maps.vector');
});

//Auth pages Routs
Route::group(['prefix' => 'auth'], function() {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('auth.confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('auth.lockscreen');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('auth.userprivacysetting');
});

//Error Page Route
Route::group(['prefix' => 'errors'], function() {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
});


//Forms Pages Routs
Route::group(['prefix' => 'forms'], function() {
    Route::get('element', [HomeController::class, 'element'])->name('forms.element');
    Route::get('wizard', [HomeController::class, 'wizard'])->name('forms.wizard');
    Route::get('validation', [HomeController::class, 'validation'])->name('forms.validation');
});


//Table Page Routs
Route::group(['prefix' => 'table'], function() {
    Route::get('bootstraptable', [HomeController::class, 'bootstraptable'])->name('table.bootstraptable');
    Route::get('datatable', [HomeController::class, 'datatable'])->name('table.datatable');
});

//Icons Page Routs
Route::group(['prefix' => 'icons'], function() {
    Route::get('solid', [HomeController::class, 'solid'])->name('icons.solid');
    Route::get('outline', [HomeController::class, 'outline'])->name('icons.outline');
    Route::get('dualtone', [HomeController::class, 'dualtone'])->name('icons.dualtone');
    Route::get('colored', [HomeController::class, 'colored'])->name('icons.colored');
});
//Extra Page Routs
Route::get('privacy-policy', [HomeController::class, 'privacypolicy'])->name('pages.privacy-policy');
Route::get('terms-of-use', [HomeController::class, 'termsofuse'])->name('pages.term-of-use');
