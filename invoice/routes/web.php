<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\appoinmetcontroller;
use App\Http\Controllers\mainpagecontroller;
use App\Http\Controllers\employeedetailcontroller;
use App\Http\Controllers\stockscontroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\invoicecontroller;
use App\Http\Controllers\servicecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/mainbody/body');
});
Route::get('/main/Appointment',[appoinmetcontroller::class,'makeappoinment'])->name('main.Appointment');
Route::get('/mainbody/body',[mainpagecontroller::class,'bodycall'])->name('mainbody.body');
Route::POST('apoinmentdata',[appoinmetcontroller::class,'storeappoinment'])->name('appoinmentdata');
Route::get('/main/About',[mainpagecontroller::class,'callabout'])->name('main.About');


route::get('/main/service',[mainpagecontroller::class,'callservice'])->name('main.service');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//group middleware
route::middleware(['auth','role:admin'])->group(function(){
    Route::controller(AdminController::class)->group(function(){

        Route::get('/admin/dashboard', 'adminDashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
        Route::get('/admin/profile', 'adminprofile')->name('admin.profile');
        Route::post('/admin/profile/store', 'adminprofileStore')->name('admin.profile.store');
        Route::get('/admin/change/password','adminchangepassword')->name('admin.change.password');
        Route::post('/admin/update/password','adminupdatepassword')->name('admin.update.password');
        Route::get('admin/Stock/mainstock', 'mainstockcll')->name('admin.Stock.mainstock');
        Route::get('admin/Stock/stockin', 'stockincll')->name('admin.Stock.stockin');
        Route::get('admin/Stock/stockout',  'stockoutcll')->name('admin.Stock.stockout');
        Route::get('admin/bill/billdetail', 'billcll')->name('admin.bill.billdetail');
        Route::get('admin/bill/makebill',  'billcreate')->name('admin.bill.makebill');

    });
    Route::controller(employeedetailcontroller::class)->group(function(){

        Route::get('/admin/Employeedetail/employee','empdetail')->name('admin.Employeedetail.employee');
        Route::get('/admin/Employeedetail/empregister','registeremployee')->name('admin.Employeedetail.empregister');
        Route::POST('empregister','storeemployee')->name('empregister');
        Route::get('admin/Employeedetail/editemployee/{id}','editemployee')->name('admin.Employeedetail.editemployee');
        Route::get('admin/Employeedetail/deleteemployee/{id}','deleteemployee')->name('admin.Employeedetail.deleteemployee');
    
    
     });
});//end admin middleware

route::middleware(['auth','role:employee'])->group(function(){

Route::controller(employeeController::class)->group(function(){
    
    Route::get('/employee/dashboard','EmployeeDashboard')->name('employee.dashboard');
    Route::get('/employee/logout', 'employeelogout')->name('employee.logout');
    Route::get('/employee/dashboard', 'employeemain')->name('employee.dashboard');
    Route::get('/employee/stocks/mainstock', 'mainstockcll')->name('employee.stocks.mainstock');
});

Route::controller(appoinmetcontroller::class)->group(function(){
    Route::get('/employee/appoinments/appoinmentdetail','apoinmentdetail')->name('employee.appoinments.appoinmentdetail');
    Route::get('employee/appoinments/appoinmentedit/{id}','editappoinment')->name('employee.appoinments.appoinmentedit');
    Route::get('employee/appoinments/appoinmentdelete/{id}','deleteappoinment')->name('employee.appoinments.appoinmentdelete');
});


Route::controller(stockscontroller::class)->group(function(){
    Route::get('/employee/stocks/mainstock','stocksdetail')->name('employee.stocks.mainstock');
    Route::get('/employee/stocks/addmainstock','viewadd')->name('employee.stocks.addmainstock');
    Route::POST('addmainstocks','addmainstock')->name('addmainstocks');
    Route::get('employee/stocks/editfile/editmainproduct/{id}','editmainproducts')->name('employee.stocks.editfile.editmainproduct');
    Route::get('employee/stocks/mainstockdelete/{id}','deletemainstock')->name('employee.stocks.mainstockdelete');
    
});


Route::controller(invoicecontroller::class)->group(function(){
    route::get('employee/bills/addinvoice','invoicecreate')->name('employee.bills.addinvoice');
    Route::post('employee/invoices','create')->name('invoices.create');
});

Route::controller(servicecontroller::class)->group(function(){
    Route::get('employee/service/servicedetail','stocksdetail')->name('employee.service.servicedetail');
    Route::get('employee/service/addservice','viewadd')->name('employee.service.addservice');
    Route::POST('Addservice','addservice')->name('Addservice');
    Route::get('employee/service/editfile/editservice/{id}','editservicedetail')->name('employee.service.editfile.editservice');
    Route::get('employee/service/servicedelete/{id}','deleteservice')->name('employee.service.servicedelete');
});


});//end employee middleware


Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

Route::get('/main/Contact',[contactcontroller::class,'callcontact'])->name('main.Contact');
Route::POST('contactdata', [contactcontroller::class, 'processForm'])->name('Contactdata');

