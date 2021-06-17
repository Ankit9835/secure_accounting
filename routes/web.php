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


/////////////////////////////////////////////// Start of Customer Panel //////////////////////////////////////////////////

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
    

    //Buyers Module
    Route::get('/add/buyer','Admin\BuyerController@create')->name('customer.buyer');
    Route::post('/store/buyer','Admin\BuyerController@store')->name('buyer.store');
    Route::get('/list/buyer','Admin\BuyerController@index')->name('buyer.index');
    Route::get('/buyer/edit/{id}','Admin\BuyerController@edit')->name('buyer.edit');
    Route::post('/buyer/update/{id}','Admin\BuyerController@update')->name('buyer.update');
    Route::get('/buyer/delete/{id}','Admin\BuyerController@remove')->name('buyer.delete');

    //Seller Module
    Route::get('/add/seller','Customer\SellerController@create')->name('sellers.add');
    Route::get('/list/seller','Customer\SellerController@index')->name('sellers.list');
    Route::post('/store/seller','Customer\SellerController@store')->name('seller.store');
    Route::get('/seller/edit/{id}','Customer\SellerController@edit')->name('seller.edit');
     Route::post('/seller/update/{id}','Customer\SellerController@update')->name('seller.update');
    Route::get('/seller/delete/{id}','Customer\SellerController@remove')->name('seller.delete');


    //Expense Module
    Route::get('/list/expense','Customer\ExpenseController@index')->name('expense.list');
    Route::get('/add/expense','Customer\ExpenseController@create')->name('customer.expense');
    Route::post('/store/expense','Customer\ExpenseController@store')->name('expense.store');
    Route::get('/expense/edit/{id}','Customer\ExpenseController@edit')->name('expense.edit');
    Route::post('/expense/update/{id}','Customer\ExpenseController@update')->name('expense.update');
    Route::get('/expense/delete/{id}','Customer\ExpenseController@remove')->name('expense.remove');

    // Products Module
    Route::get('/products/lists','Customer\ProductController@index')->name('products.list');
    Route::get('/products/create','Customer\ProductController@create')->name('products.add');
    Route::post('/products/store','Customer\ProductController@store')->name('store.product');
    Route::get('/product/edit/{id}','Customer\ProductController@edit')->name('product.edit');
    Route::post('/product/update/{id}','Customer\ProductController@update')->name('product.update');
    Route::get('/product/delete/{id}','Customer\ProductController@destroy')->name('product.delete');

    // Brands Module
    Route::get('/brand/lists','Customer\BrandController@index')->name('brands.list');
    Route::get('/brand/create','Customer\BrandController@create')->name('brands.add');
    Route::post('/brand/store','Customer\BrandController@store')->name('brands.store');
    Route::get('/editbrand/{id}','Customer\BrandController@edit')->name('vieweditbrand');
    Route::post('/brand/update/{id}','Customer\BrandController@update')->name('brands.update');
    Route::get('/deletebrand/{id}','Customer\BrandController@destroy')->name('deletebrand');

    // Company Module
    Route::get('/my/company-details','Customer\CompanyController@index')->name('my.company');
    Route::post('/update/company/profile','Customer\CompanyController@updateCompany')->name('update.company.profile');

    // Orders Module
    Route::get('/create/order','Customer\OrderController@index')->name('create.order');
});


/////////////////////////////////////////////// End of Customer Panel //////////////////////////////////////////////////



/////////////////////////////////////////////// Start of Admin Panel ///////////////////////////////////////////////

 Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
   
   Route::get('/home','AdminController@admin_home');

    // Users Module
    Route::get('/users','Admin\UserController@index');
    Route::get('/deleteusers/{id}','AdminpanelController@deleteUser');

   //Role Module
    Route::get('/role','AdminController@role');
    Route::post('/role','AdminController@storerole');
    Route::get('/editrole/{id}','AdminController@editrole');
    Route::post('/editrole/{id}','AdminController@editRolestore');
    Route::get('/deleterole/{id}','AdminController@deleteRole');

    // Banner Module
     Route::get('/banner','AdminController@banner');
     Route::post('/banner','AdminController@storebanner');
     Route::get('/editbanner/{id}','AdminController@editbanner');
     Route::post('/editbanner/{id}','AdminController@editBannerstore');
     Route::get('/deletebanner/{id}','AdminController@deleteBanner');

     // Contacts Module
     Route::get('/contacts','Admin\ContactController@index');
     Route::get('/deletecontacts/{id}','Admin\ContactController@destroy');

      //Subscrption Module
     Route::get('/subscriptions','Admin\SubscriptionController@index');
     Route::get('/deletesubscriptions/{id}','Admin\SubscriptionController@destroy');

      // General setting Module
     Route::get('/gsetting','Admin\GeneralSettingController@index');
     Route::post('/gsetting','AdminpanelController@gsettingstore')->name('gsetting');

  
   
});


 /////////////////////////////////////////////// End of Admin Panel //////////////////////////////////////////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
