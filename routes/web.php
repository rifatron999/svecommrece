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

/* ======================================== Website  ================================================ */
Route::get('/','website\websiteController@index')->name('website.home');
Route::get('/about_us','website\websiteController@about')->name('website.about');
Route::get('/products','website\websiteController@products')->name('website.products');
Route::get('/offers','website\websiteController@offers')->name('website.offers');
Route::get('/contact_us','website\websiteController@contact_us')->name('website.contact');
/* ====================================== Website end  ============================================== */
/* ====================================================== Frontend  ============================================================== */
Route::get('/ecommerce', 'Userend\pagesController@home')->name('pages.home');
Route::get('/products', 'Userend\pagesController@products')->name('pages.products');
Route::get('/single_product/{id}', 'Userend\pagesController@single_product')->name('pages.single_product');
Route::get('/single', 'Userend\pagesController@single')->name('pages.single');
Route::get('/subCatgProductSearch/{id}', 'Userend\pagesController@subCatgProductSearch')->name('pages.subCatgProductSearch');
Route::get('/offerSearchByTitle/{title}', 'Userend\pagesController@offerSearchByTitle')->name('pages.offerSearchByTitle');
Route::get('/allOfferSearch', 'Userend\pagesController@allOfferSearch')->name('pages.allOfferSearch');



//  cart
Route::get('/cart', 'Userend\CartController@index')->name('cart.index');
Route::get('/cart/add/{id}', 'Userend\CartController@addItem')->name('cart.add');
Route::get('/cart/delete/{rowId}', 'Userend\CartController@deleteItem')->name('cart.delete');
Route::post('/cart/update', 'Userend\CartController@updateItem')->name('cart.update');
Route::get('/cart_destroy',function (){Cart::destroy();});


Route::get('/react', function (){
    return view('react');
});

/* ====================================================== Frontend end   ============================================================== */
/* ====================================================== customer auth   ============================================================== */
Route::get('/customer/login', 'CustomerAuth\LoginController@showLoginForm')->name('customer.login');
Route::post('/customer/login', 'CustomerAuth\LoginController@login');
Route::get('/customer/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('customer.register');
Route::post('/customer/register', 'CustomerAuth\RegisterController@register');



Route::group(['middleware'=>['customerCheck']], function(){
Route::get('/customer/home', 'Userend\customerController@index')/*->name('home')*/;

Route::post('/customer/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
Route::get('/customer/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
Route::post('/customer/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('customer.password.update');
Route::get('/customer/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm')->name('customer.password.reset');

//xahid
    Route::get('/checkout', 'Userend\pagesController@checkout')->name('pages.checkout');
    Route::post('/place_order', 'Userend\orderController@place_order')->name('place_order');
    Route::get('/temp_orders', 'Userend\orderController@temp_orders')->name('temp_orders');
//xahid


});
/* ====================================================== customer auth end   ============================================================== */
/* ====================================================== Backend   =================================================================== */
Auth::routes();

Route::group(['middleware'=>['normalVendorCheck']], function(){
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
Route::post('/brand_management','Vendor\normalVendorController@brandAdd')->name('brandAdd');
Route::get('/brand_management/edit/{id}','Vendor\normalVendorController@brandManagementEdit')->name('brandManagementEdit');
Route::post('/brand_management/update','Vendor\normalVendorController@brandUpdate')->name('brandUpdate');
Route::get('/brand_management/remove/{id}','Vendor\normalVendorController@brandRemove')->name('brandRemove');
//brand management #
//product management
Route::get('/product_management','Vendor\normalVendorController@productManagementView')->name('productManagementView');
Route::post('/product_management','Vendor\normalVendorController@productAdd')->name('productAdd');
Route::get('/product_management/edit/{id}','Vendor\normalVendorController@productManagementEdit')->name('productManagementEdit');
Route::post('/product_management/update','Vendor\normalVendorController@productUpdate')->name('productUpdate');
Route::get('/product_management/remove/{id}','Vendor\normalVendorController@productRemove')->name('brandRemove');
//product management #
//offer management
Route::get('/offer_management','Vendor\normalVendorController@offerManagementView')->name('offerManagementView');
Route::post('/offer_management','Vendor\normalVendorController@offerAdd')->name('offerAdd');
Route::get('/offer_management/edit/{id}','Vendor\normalVendorController@offerManagementEdit')->name('offerManagementEdit');
Route::post('/offer_management/update','Vendor\normalVendorController@offerUpdate')->name('offerUpdate');
Route::get('/offer_management/remove/{id}','Vendor\normalVendorController@offerRemove')->name('offerRemove');
//offer management #
//inventory management
Route::get('/inventory_management','Vendor\normalVendorController@inventoryManagementView')->name('inventoryManagementView');
//inventory management #
//order management
Route::get('/pending_orders','Vendor\normalVendorController@PendingOrderView')->name('PendingOrderView');
Route::get('/orders','Vendor\normalVendorController@OrderView')->name('OrderView');

//order management #


/* ======== normalVendor #   =================================================================== */


});
/* ====================================================== Backend #  =================================================================== */
