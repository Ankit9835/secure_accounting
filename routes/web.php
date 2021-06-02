<?php

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
Route::get('/','FrontEndController@index');
Route::post('/contact','FrontEndController@storeContact')->name('contact.store');
Route::post('/subscription','FrontEndController@storeSubscription');
Route::get('/pricing-list','FrontEndController@pricing');
Route::get('/signup','FrontEndController@userRegistration');


Route::prefix('customer')->middleware('auth', 'customer')->group(function () {
    Route::get('/home','AdminController@dashboard');
    Route::get('/chpwd','AdminController@chpwd');
    Route::get('/sellers','AdminController@sellers');
    // Category Module
    Route::get('/category','AdminController@category')->name('customer.category');
    Route::post('/category','AdminController@storecategory')->name('store.category');
    Route::get('/editcategory/{id}','AdminController@editCategory');
    Route::post('/editcategory/{id}','AdminController@editCategorystore');
    Route::get('/deletecategory/{id}','AdminController@deleteCategory');
    //Role Module
    Route::get('/role','AdminController@role');
    Route::post('/role','AdminController@storerole');
    Route::get('/editrole/{id}','AdminController@editrole');
    Route::post('/editrole/{id}','AdminController@editRolestore');
    Route::get('/deleterole/{id}','AdminController@deleteRole');

    //Buyers Module
    Route::get('/add/buyer','Admin\BuyerController@create')->name('customer.buyer');
    Route::post('/store/buyer','Admin\BuyerController@store')->name('buyer.store');
    Route::get('/list/buyer','Admin\BuyerController@index')->name('buyer.index');
    Route::get('/buyer/edit/{id}','Admin\BuyerController@edit')->name('buyer.edit');
    Route::post('/buyer/update/{id}','Admin\BuyerController@update')->name('buyer.update');
    Route::get('/buyer/delete/{id}','Admin\BuyerController@remove')->name('buyer.delete');

    //Seller Module
    Route::get('/add/seller','Customer\SellerController@index')->name('customer.seller');

    //Expense Module
    Route::get('/list/expense','Customer\ExpenseController@index')->name('expense.list');
    Route::get('/add/expense','Customer\ExpenseController@create')->name('customer.expense');
    Route::post('/store/expense','Customer\ExpenseController@store')->name('expense.store');
    Route::get('/expense/edit/{id}','Customer\ExpenseController@edit')->name('expense.edit');
    Route::post('/expense/update/{id}','Customer\ExpenseController@update')->name('expense.update');
    Route::get('/expense/delete/{id}','Customer\ExpenseController@remove')->name('expense.remove');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
