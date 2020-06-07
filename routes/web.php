<?php

use Illuminate\Support\Facades\Route;

//config(['database.connections.mysql.database' => 'btt']);
Auth::routes();

Route::post('/upload', 'UploadController@uploadSubmit')->name('admin.upload.images');
Route::get('/', 'FrontendController@landing')->name('/')->middleware(['language']);

Route::middleware(['language'])->group(function () {
    Route::get('/discounts', ['as' => 'discounts', 'uses' => 'FrontendController@discounts']);
    Route::get('/price', ['as' => 'price', 'uses' => 'FrontendController@byPrice'])->name('price');
    Route::get('/whatsapp-message', ['as' => 'price', 'uses' => 'FrontendController@whatsapp'])->name('whatsapp');
    Route::get('/sms', ['as' => 'price', 'uses' => 'FrontendController@sms'])->name('sms');
    Route::get('/phone-call', ['as' => 'price', 'uses' => 'FrontendController@phoneCall'])->name('phone_call');
    Route::get('/all-products', ['uses' => 'FrontendController@allProducts'])->name('all_products');
    Route::get('{category}/{portfolio}', 'FrontendController@displayItem')->middleware(['language']);;
    Route::get('{category}', 'FrontendController@index')->name('front.index');
    Route::get('apply-coupon', 'FrontendController@applyCoupon');
    Route::post('send-to-email', 'FrontendController@sendToEmail')->name('send-email');

    Route::get('category/tag/{tag}', 'FrontendController@categories')->name('tag_category');
    Route::get('information/pages/contact', function() {
        return view('front.categories.contact');
    });

    Route::get('information/pages/tehnologii-de-producere', ['as' => 'tehnologii', function() {
        return view('front.categories.tehnologii');
    }]);

    Route::get('information/pages/parametri-tehnici', ['as' => 'parametri',  function() {
        return view('front.categories.parametri');
    }]);

    Route::get('/confirmation', function(Request $request) {
        $order = \App\Order::orderBy('id','desc')->first();
        $portfolio = $order->portfolio;
        return view('front.thank_you', compact('portfolio'));
    });

    Route::get('{category}/{portfolio}/create', 'FrontendController@displayItem')->name('comenzi.create');
    Route::get('{category}/{portfolio}/payment', 'FrontendController@index');
    Route::post('{category}/{portfolio}/payment', 'Front\OrdersController@store')->name('comenzi.store');

    Route::get('comenzi/livrare', 'Front\OrdersController@update')->name('comenzi.livrare');
    Route::post('checkout/{portfolio}', 'FrontendController@checkout')->name('checkout');
    Route::get('checkout', 'FrontendController@checkout');

});





Route::group(['prefix' => 'admin/dashboard'], function () {

    Route::resource('portfolios', 'PortfolioController', ['names' => [
        'index' => 'admin.portfolios.index',
        'store' => 'admin.portfolios.store',
        'create' => 'admin.portfolios.create',
        'destroy' => 'admin.portfolios.destroy',
        'edit' => 'admin.portfolios.edit',
        'update' => 'admin.portfolios.update',
    ]])->middleware(['admin']);

    Route::resource('orders', 'Admin\OrdersController', ['names' => [
        'index' => 'admin.orders.index',
        'store' => 'admin.orders.store',
        'show' => 'admin.orders.show',
        'edit' => 'admin.orders.edit',
        'update' => 'admin.orders.update',
    ]])->middleware(['admin']);
    Route::get('order-view/{order}', 'Admin\OrdersController@orderView')->name('order.view')->middleware(['admin']);
    Route::get('delete-single', 'Admin\OrdersController@deleteSingle')->name('orders.delete')->middleware(['admin']);
    Route::get('download-order', 'Admin\OrdersController@downloadOrder')->name('order.download')->middleware(['admin']);
    Route::get('modify-prices', 'PortfolioController@modifyPrices')->middleware(['admin']);

    Route::resource('categories', 'Admin\CategoriesController', ['names' => [
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'store' => 'admin.categories.store',
        'destroy' => 'admin.categories.destroy',
    ]])->middleware(['admin']);
    Route::get('sub-category/{category}', 'Admin\CategoriesController@subCategory')->name('admin.sub-category');

    Route::resource('tags', 'Admin\TagsController', ['names' => [
        'index' => 'admin.tags.index',
        'create' => 'admin.tags.create',
        'update' => 'admin.tags.update',
        'store' => 'admin.tags.store',
        'destroy' => 'admin.tags.destroy',
    ]])->middleware(['admin']);

    Route::resource('photos', 'Admin\PhotosController', ['names' => [
        'index' => 'admin.photos.index',
        'create' => 'admin.photos.create',
        'update' => 'admin.photos.update',
        'store' => 'admin.photos.store',
        'destroy' => 'admin.photos.destroy',
    ]])->middleware(['admin']);
    Route::get('set-main', 'Admin\PhotosController@set_photo')->name('set_main');

    Route::resource('sizes', 'Admin\SizesController', ['names' => [
        'index' => 'admin.sizes.index',
        'create' => 'admin.sizes.create',
        'update' => 'admin.sizes.update',
        'store' => 'admin.sizes.store',
        'destroy' => 'admin.sizes.destroy',
    ]])->middleware(['admin']);

    Route::resource('comenzi', 'EmployeeController')->only([
        'index', 'update', 'edit'
    ])->middleware(['admin']);

    Route::get('order-done', 'EmployeeController@orderDone')->name('order.done')->middleware(['admin']);
    Route::get('order-confirm', 'EmployeeController@orderConfirm')->name('order.confirm')->middleware(['admin']);
    Route::get('stats', 'Admin\StatsController@index')->name('stats')->middleware(['admin']);
    Route::post('stats', 'Admin\StatsController@stats')->name('stats')->middleware(['admin']);
    Route::post('orders/destroy', 'Admin\OrdersController@destroy')->name('admin.orders.destroy')->middleware(['admin']);
    Route::post('orders/profit', 'Admin\OrdersController@setProfit')->name('admin.orders.profit')->middleware(['admin']);
    Route::get('portfolios/creat', 'PortfolioController@create')->middleware(['admin']);
    Route::get('/home', 'HomeController@index')->name('home');
});
