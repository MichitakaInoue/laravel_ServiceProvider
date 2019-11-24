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

//ルーティング直書きでddできる
// app()->bind('Hello', function(){
//   return 'Hi';
// });
// dd(app()->make('Hello'));

//サービスの登録を見ること
dd(app());

//chacheを見る
chache()->get('abc');


Route::get('/', function () {
    return view('welcome');
});
