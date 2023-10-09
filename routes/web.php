<?php

use App\Models\brand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\salaryController;
use App\Http\Controllers\backendController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\expencessController;
use App\Http\Controllers\SslCommerzPaymentController;



Route::get('/', function () {
    return view('layout.layout');
});
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  backend starts

Route::get('/dashboard', [App\Http\Controllers\backendController::class, 'index']);
//  category start

 Route::get('/category', [App\Http\Controllers\categoryController::class, 'index']);
 Route::get('/createcategory', [App\Http\Controllers\categoryController::class, 'create']);
 Route::post('/categorystore', [App\Http\Controllers\categoryController::class, 'store']);
 Route::get('/edit{id}', [App\Http\Controllers\categoryController::class, 'edit']);
 Route::put('/update{id}', [App\Http\Controllers\categoryController::class, 'update']);
 Route::delete('/delete{id}', [App\Http\Controllers\categoryController::class, 'delete']);
//   brand part

  Route::get('/brands', [App\Http\Controllers\brandController::class, 'index']);
  Route::get('/createbrand', [App\Http\Controllers\brandController::class, 'create']);
  Route::post('/brandstore', [App\Http\Controllers\brandController::class, 'store']);
  Route::get('/brandedit{id}', [App\Http\Controllers\brandController::class, 'edit']);
  Route::put('/brandupdate{id}', [App\Http\Controllers\brandController::class, 'update']);
  Route::delete('/branddelete{id}', [App\Http\Controllers\brandController::class, 'delete']);

    // add product start
  Route::get('/product', [App\Http\Controllers\productController::class, 'index']);
  Route::get('/createproduct', [App\Http\Controllers\productController::class, 'create']);
  Route::post('/productstore', [App\Http\Controllers\productController::class, 'store']);
   Route::get('/productedit{id}', [App\Http\Controllers\productController::class, 'edit']);
   Route::put('/productupdate{id}', [App\Http\Controllers\productController::class, 'update']);
   Route::delete('/productdelete{id}', [App\Http\Controllers\productController::class, 'delete']);

//   user count
 Route::get('/user', [App\Http\Controllers\userController::class, 'index']);
 Route::get('/count', [App\Http\Controllers\userController::class, 'count']);

//   add customer
 Route::get('/customer', [customerController::class, 'index']);
 Route::get('/createcustomer', [App\Http\Controllers\customerController::class, 'create']);
 Route::post('/customerstore', [App\Http\Controllers\customerController::class, 'store']);
  Route::get('/customeredit{id}', [App\Http\Controllers\customerController::class, 'edit']);
  Route::put('/customerupdate{id}', [App\Http\Controllers\customerController::class, 'update']);
  Route::delete('/customerdelete{id}', [App\Http\Controllers\customerController::class, 'delete']);
//  add employee
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/createemployee', [EmployeeController::class, 'create']);
Route::post('/employeestore', [App\Http\Controllers\EmployeeController::class, 'store']);
 Route::get('/employeeedit{id}', [App\Http\Controllers\EmployeeController::class, 'edit']);
 Route::put('/employeeupdate{id}', [App\Http\Controllers\EmployeeController::class, 'update']);
 Route::delete('/employeedelete{id}', [App\Http\Controllers\EmployeeController::class, 'delete']);
//  add expencess
Route::get('/expencess', [expencessController::class, 'today']);
Route::get('/today', [expencessController::class, 'today']);
Route::get('/createexpences', [expencessController::class, 'create']);
Route::post('/expencessstore', [App\Http\Controllers\expencessController::class, 'store']);
 Route::get('/expencessedit{id}', [App\Http\Controllers\expencessController::class, 'edit']);
 Route::put('/expencessupdate{id}', [App\Http\Controllers\expencessController::class, 'update']);
 Route::delete('/expencessdelete{id}', [App\Http\Controllers\expencessController::class, 'delete']);

 Route::get('/thismonth', [App\Http\Controllers\expencessController::class, 'thismonth']);
 Route::get('/thisyear', [App\Http\Controllers\expencessController::class, 'thisyear']);

//  add pos
 Route::get('/pos', [PosController::class, 'index']);
    // Route::post('/employeestore', [App\Http\Controllers\PosController::class, 'store']);
//   Route::get('/employeeedit{id}', [App\Http\Controllers\PosController::class, 'edit']);
//   Route::put('/employeeupdate{id}', [App\Http\Controllers\PosController::class, 'update']);
//   Route::delete('/employeedelete{id}', [App\Http\Controllers\PosController::class, 'delete']);

//  cart start
 Route::get('/cart{id}', [App\Http\Controllers\CartController::class, 'store']);
 Route::get('/minus{id}', [App\Http\Controllers\CartController::class, 'minus']);

//  salary
Route::get('/salary', [salaryController::class, 'index']);
Route::get('/createsalary', [salaryController::class, 'create']);

// attendence
Route::get('/attendence', [salaryController::class, 'attendence']);
Route::get('/attendencep', [salaryController::class, 'studentattendence']);
Route::get('/addstudent', [salaryController::class, 'addstudent']);
Route::post('/stores', [salaryController::class, 'store']);
Route::post('/takeAttendence', [salaryController::class, 'takeAttendence']);
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
