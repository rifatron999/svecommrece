<?php
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

Route::get('/', 'pagesController@home')->name('pages.home');
Route::get('/products', 'pagesController@products')->name('pages.products');
Route::get('/single_product', 'pagesController@single_product')->name('pages.single_product');
Route::get('/checkout', 'pagesController@checkout')->name('pages.checkout');
Route::get('/single', 'pagesController@single')->name('pages.single');




Route::get('/react', function (){
    return view('react');
});

/* ====================================================== Backend   =================================================================== */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vendor','Vendor\vendorController@index');
/* ======== normalVendor   =================================================================== */
//dashboard
Route::get('/dashboard','Vendor\normalVendorController@index')->name('nvdashboard');
//dashboard #
//category management
Route::get('/category_management','Vendor\normalVendorController@categoryManagementView')->name('categoryManagementView');
Route::post('/category_management','Vendor\normalVendorController@categoryAdd')->name('categoryAdd');
Route::get('/category_management/sub/{pid}','Vendor\normalVendorController@subCategoryView')->name('subCategoryView');
Route::get('/category_management/remove/{id}','Vendor\normalVendorController@categoryRemove')->name('categoryRemove');
Route::post('/category_management/update','Vendor\normalVendorController@categoryUpdate')->name('categoryUpdate');
//category managment #
//brand management
Route::get('/brand_management','Vendor\normalVendorController@brandManagementView')->name('brandManagementView');
//brand management #
//product management
Route::get('/product_management','Vendor\normalVendorController@productManagementView')->name('productManagementView');
//product management #


/* ======== normalVendor #   =================================================================== */



/* ====================================================== Backend #  =================================================================== */


