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

Route::get('/', function () {
    return view('welcome');

});


// //big project, use controller
// Route::get('/user','UserController@index');

// //====namespace controller
// Route::group(['namespace'=>'NpT'], function(){
//     Route::get('test', 'TController@test');
// });
// //==========group to manage many routes  Route::get('/user/id','UserController@getId');
// Route::group(['prefix'=>'user'], function(){
//     Route::get('id','UserController@getId');
//     Route::get('name','UserController@getName');
// });

Route::get('/student','StudentController@index');
//跳转到控制器具体方法 显示路由必须有 先找到路由
Route::get('/student/display','StudentController@display');
//===========redirect 
Route::get('/student/red','StudentController@red');
//==========跳转到控制器具体方法
Route::get('/student/red2a','StudentController@redToAction');

//=============传递参数的路由
Route::get('/student/show/{id}','StudentController@show');
//============redirect with para to controller specified method
Route::get('/student/red2awp','StudentController@redToActionWithPar');


//show form view
Route::get('form', function(){
    return view('form');
});
//===========request

Route::get('request', 'RequestController@req');
Route::post('request/add', 'RequestController@add');
//===========response
Route::get('json', 'ResponseController@rj');

//============resoure route 
Route::resource('photo', 'PhotoController');

//===前后端bu分离
Route::get('/view', 'ViewController@show');
Route::get('/view/blade', 'ViewController@blade');
Route::get('/view/if', 'ViewController@ifTest');
Route::get('/view/loop', 'ViewController@loop');

Route::get('/view/template', 'ViewController@template');


//==========model insert
Route::get('/model/insert', 'AdminController@insert');
//==========model read
Route::get('/model/select', 'AdminController@select');
//=========model update
Route::get('/model/update', 'AdminController@update');
//model delete
Route::get('/model/delete', 'AdminController@delete');

//===============login
Route::get('/login', 'LoginController@login');
//Route::post('/login/check', function(){
  //  error_log("dsadas");
  //  return "works";
//});
Route::post('/login/check', 'LoginController@checkLogin');
Route::post('/logout', 'LoginController@logout');
//========================backend
Route::get('/backend/dashboard', function(){
    return view('dashboard.dashboard');
});

// Route::get('/backend/index', function(){
//     return view('backend.index');
// });
Route::get('/backend/index', 'BackendController@index');

Route::get('/backend/article/create', 'ArticleController@create');
Route::get('/backend/article/edit/{id}', 'ArticleController@update');
Route::get('/backend/article/list', 'ArticleController@getlist');
Route::get('/backend/article/show/{id}', 'ArticleController@show');


Route::get('/backend/maincontent', function(){
    return view('backend.maincontent');
});