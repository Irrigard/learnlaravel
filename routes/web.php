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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return '!!!';
});*/

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return $id . $name;
//})->where(['id' => '[0-9]+', 'name' => '[a-z]{3,}']);
//
//Route::get('/users/{order}', function ($order) {
//    return $order;
//})->where(['order' => 'name|surname|age']);
//
//Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
//    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
//    return $week[date('w', mktime(0, 0, 0, $month, $day, $year))];
//})->where(['year' => '\d{4}', 'month' => '\d{2}', 'day' => '\d{2}']);

Route::get('post/{id}/', 'PostController@showOne');
Route::get('posts/', 'PostController@showAll');
Route::get('product/{catId}/', 'ProductController@showCategory');
Route::get('product/{catId}/{prodId}/', 'ProductController@showProduct');
Route::get('categories/', 'ProductController@showCategoryList');
Route::get('test/show/', 'TestController@show');
Route::get('test/method/', 'TestController@method');
Route::get('test/sessions/', 'TestController@sessions');
Route::get( 'test/form/', 'TestController@form');
Route::match(['get', 'post'],'test/result/{id1?}/{id2?}', 'TestController@result')->name('form.result');
Route::get('test/lout/', 'TestController@getContent');
Route::get('user/{id}/{field}', 'EmployeeController@showField')->where(['id' => '[1-5]', 'field' => 'name|surname|salary']);
Route::get('user/{id}', 'EmployeeController@showOne')->where(['id' => '[1-5]']);
