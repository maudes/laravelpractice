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
//前台
//Route::get('/', )
Route::get('/about', function(){
    return view('aboutus');
});
Route::get('/', function () {
  return view('welcome');
  //  return 'hello world!'; 
});
Route::get('article', 'ArticleController@index');
Route::get('article/{article}','ArticleController@show');
//Route::get('articles', 'ArticleController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//後台
//prefix 前綴，等於是把下方的路徑 聲明相同的前綴，不用再一個個寫
Route::prefix('admin')->middleware('auth')->group(function (){

    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/create', 'Admin\ArticleController@create');
    Route::post('article', 'Admin\ArticleController@store');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete'); //name 的用法就是當域名要換的時候，程式碼中 route 認的還是別名，不用所有有提及的地方都要調整
    //Route::edit('article/edit/{id}','Admin\ArticleController@edit')->name('admin.article.edit');

});
