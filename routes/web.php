<?php

use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AttendanceLeaveController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\VacationController;

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

//  راوتات الدخول للنظام
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('LogOut');
Route::get('/', function () {
    return view('index');
})->middleware('auth')->name('index');
Route::post('/UserAuth', [UserController::class, 'UserAuth'])->name('UserAuth');

// راوتات الأدمن
Route::middleware(['auth', 'check.auth.value'])->group(function () {
    // راوتات إدارةالمستخدمين
    Route::get('/users/UsersList', [UserController::class, 'index'])->name('UsersList');
    Route::get('/users/create', [UserController::class, 'create'])->name('UserAdd');
    Route::post('/users/store', [UserController::class, 'store']);
    Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    Route::put('/users/{user}/update', [UserController::class, 'update']);
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');


    // راوتات طلباتي
    Route::get('/requests/RequestHome', [VacationController::class, 'index'])->name('RequestHome');
    Route::get('/vacations/create', [VacationController::class, 'create'])->name('VacationRequest');
    Route::post('/vacations/store', [VacationController::class, 'store']);
    Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    Route::put('/users/{user}/update', [UserController::class, 'update']);
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');

    //  راوتات إدارة الشركات
    Route::get('/company/ListCompanies', [CompanyController::class, 'index'])->name('ListCompanies');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('CompanyAdd');
    Route::post('/company/store', [CompanyController::class, 'store']);
    Route::get('/company/{company}/edit', [CompanyController::class, 'edit']);
    Route::put('/company/{company}/update', [CompanyController::class, 'update']);
    Route::delete('/company/delete/{company}', [CompanyController::class, 'destroy'])->name('company.destroy');


    Route::get('/vacation/index', [VacationController::class, 'index'])->name('Listpersonorder');
    Route::post('/vacation/store', [VacationController::class, 'store']);
    Route::get('/vacation/create', [VacationController::class, 'create'])->name('Vacation');




});


Route::middleware(['auth'])->group(function () {

    // راوتات إدارة المتدربين
    // Route::get('/employee/ListEmployees', [EmployeeController::class, 'index'])->name('ListEmployees');
    // Route::get('/employee/create', [EmployeeController::class, 'create'])->name('EmployeeAdd');
    // Route::post('/employee/store', [EmployeeController::class, 'store']);
    // Route::get('/employee/{employee}/edit/', [EmployeeController::class, 'edit']);
    // Route::get('/employee/{employee}/edit/{Session}', [EmployeeController::class, 'edit2']);
    // Route::put('/employee/{employee}/update', [EmployeeController::class, 'update']);
    // Route::put('/employee/{employee}/update/{Session}', [EmployeeController::class, 'update2']);
    // Route::delete('/employee/delete/{employee}', [EmployeeController::class, 'destroy'])->name('Employee.destroy');


    // راوتات إدارة المدربين 
 

    // راوتات إدارة الكورسات 
 
    // راوتات إدارة الدورات 
 
    //حساب التكاليف للدورات
 

    //حساب التسعيرة للدورات
 

    //طلبات الترشيح
   


});