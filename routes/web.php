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


//Main Front
Route::get('/', 'ProdukController@getindex', function () {
    return view('main.homepage');
});
Route::get('/vps', 'ProdukController@getIndexVps', function () {
    return view('main.vps');
});
// Route::get('/hosting', function () {
//     return view('main.hosting');
// });
Route::get('/collocation', 'ProdukController@getCollocation', function () {
    return view('main.collocation');
});

//User Area
Route::get('/userlogin', function () {
    return view('user.userlogin');
})->name('user.signin');
Route::post('/userlogin',[
    'uses' => 'UserController@postUser',
    'as' => 'user.signin'
]);
Route::get('/daftarmember', function () {
    Route::resource('daftarmember', 'UserController');
    return view('user.daftarmember');
});
Route::post('/daftarmember','UserController@store');

//member area


Route::group(['middleware' => 'auth'], function()
{
    Route::group(['prefix' => 'memberarea'], function(){
        Route::get('/member',[
            'uses' => 'ProdukController@getCartMember', 
            'as' => 'member.cart'], 
            function () {
            return view('user.member');
        });
        Route::get('/tagihan',[
            'uses' => 'OrderController@getCartTagihan', 
            'as' => 'member.tagihan'], 
            function () {
            return view('user.tagihan');
        });
        Route::post('/konfirmasi', [
            'uses' => 'OrderCOntroller@storeKonfirmasi',
            'as' => 'order.konfirm'
        ]);
    });
    //user
    Route::get('/logout',[
        'uses' => 'UserController@logout',
        'as' => 'user.logout'
    ]);
    //Cart
    Route::post('/add-to-store/{idkat}/{id}', [
        'uses' => 'CartController@store',
        'as' => 'cart.addToStore'
    ]);
    Route::get('/delete-cart', [
        'uses' => 'CartController@destroy',
        'as' => 'cart.deleteCart'
    ]);
    Route::get('/delete-item/{id}', [
        'uses' => 'CartController@destroyItem',
        'as' => 'cart.destroyItem'
    ]);
    //Order
    Route::get('/order-vps/{idkat}/{id}',[
        'uses' => 'ProdukController@getOrderVPS', 
        'as' => 'produk.addToOrder'], 
        function () {
        return view('partials.ordervps');
    });
    Route::get('/order-collocation/{idkat}/{id}',[
        'uses' => 'ProdukController@getOrderColl', 
        'as' => 'produk.collToOrder'], 
        function () {
        return view('partials.ordercollocation');
    });
    Route::get('/checkout',['uses' => 'ProdukController@getCartToCheckout'], function () {
        return view('partials.checkout');
    });
    Route::post('/checkout',['uses' => 'OrderController@postCheckout', 'as' => 'order.postCheckout']);
    Route::get('/afterorder',['as' => 'afterorder'], function () {
        return view('partials.terimakasih');
    });

});

//Admin Group
Route::group(['prefix' => 'admin'], function () {
    Route::resource('list-admin', 'AdminController',[
        'except' => ['show', 'create']
    ]);
    Route::resource('list-vps', 'AdminVpsController');
    Route::resource('list-collocation', 'AdminCollocationController');
    Route::resource('list-billing', 'AdminBillingController');
});
//Billing Group
Route::group(['prefix' => 'billing'], function () {
    Route::resource('dashboard-billing', 'BillingController');
});
//Billing Group
Route::group(['prefix' => 'teknisi'], function () {
    Route::resource('dashboard-teknisi', 'TeknisiController');
});
Route::group(['prefix' => 'pt'], function () {
    Route::resource('dashboard-pt', 'PtController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
