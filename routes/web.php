<?php

use Illuminate\Support\Facades\Route;


/*МАРШРУТ НА ГЛАВНУЮ */
Route::get('/', function () {
    return view('index');
});
/*МАРШРУТ НА МЕРЧ */
Route::get('/merch', 'HomeController@merch')->name('merch');
/*МАРШРУТ НА АЛЬБОМЫ */
Route::get('/albom', 'HomeController@albom')->name('albom');


/*МАРШРУТ НА админку */
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    //тут еще должен быть маршрут к новостям
    Route::group(['prefix' => 'user_managment', 'namespace'=>'UserManagment'], function(){
        Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
    });   

});
/*МАРШРУТ на проверку авторизации */
Auth::routes();

/*МАРШРУТ на ЛК */
Route::get('/home', 'HomeController@index')->name('home');
