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


###留言板功能
Route::get('/msg', 'Admin\MsgController@index');
Route::post('/msg/create', 'Admin\MsgController@create');
















// Route::get('/', function () {
//     return view('welcome');
// });


// // 需求1：通过get方式访问day1/t1交给闭包函数处理
// // 需求2：通过get方式访问day1/t2交给Admin平台Day1控制器的t2方法处理
// // 需求3：通过post方式访问day1/t3交给闭包函数处理
// // 需求4：通过post方式访问day1/t4交给Admin平台Day1控制器的t4方法处理
// // 
// // 语法：Route::HTTP请求方式（请求路径，匿名函数或控制器方法）
// // 访问：到public的网址 +  请求路径
// // 		情况1：有同学是解析域名到public    http://a.com/请求路径
// //      情况2：有同学没解析域名到public    http://localhost/public/请求路径

// Route::get('/day1/t1', function(){
// 	return 'this is day1 t1';
// });

// Route::get('/day1/t2', 'Admin\Day1Controller@t2'); //php artisan make:controler 平台名\控制器名Controller

// Route::post('/day1/t3', function() {
// 	return 'this is day1 t3';
// });

// Route::post('/day1/t4', 'Admin\Day1Controller@t4');


// ##需求：访问day1/t5交给闭包函数处理  但是要支持get和post请求
// Route::match(['get', 'post'],'/day1/t5', function() {
// 	return 'this is day1 t5';
// });

// ##需求：访问day1/t6交给闭包函数处理  但是要支持所有请求
// Route::any('/day1/t6', function(){
// 	return 'this is day1 t6';
// });


// ###语法：  Route::HTTP请求方式（请求路径/{参数名}，闭包函数或控制器方法最终都是方法处理）
// #一个参数：->where(参数名，正则)
// #多个参数：->where（[参数名1=>正则1,...., 参数名n=>正则n]）
// ###多学几招：
// #1.请求路径 / - 都行
// #2.请求路径中的参数个数  对应  处理方法中的形参个数


// //一个参数
// Route::get('/day1/t7/{name}', function($name) {
// 	echo '一个参数：' . $name;
// })->where('name', '\w+');  //[0-9A-Za-z_]

// //二个参数
// Route::get('/day1/t8/{name}/{age}', function($name, $age) {
// 	echo '二个参数：' . $name . '，' . $age;
// })->where(['name'=>'\w+', 'age'=> '[0-9]+']);

// //默认参数：特性就是可以不写参数也匹配
// Route::get('/day1/t9/{name?}', function($name = '你好') {
// 	echo '二个参数：' . $name;
// });


// // 问题：冗余
// // Route::get('/user/index', 'Admin\UserController@index');
// // Route::get('/user/create', 'Admin\UserController@create');
// // Route::get('/user/update', 'Admin\UserController@update');
// // Route::get('/user/delete', 'Admin\UserController@delete');
// // 
// // 
// // 优化：通过路由群组
// // Route::group(['prefix'=>'user', 'namespace'=> 'Admin'], function() {
// // 	Route::get('index', 'UserController@index');
// // 	Route::get('create', 'UserController@create');
// // 	Route::get('update', 'UserController@update');
// // 	Route::get('delete', 'UserController@delete');
// // })



// ###定义t12路由 加载t12视图
// Route::get('/day1/t12', 'Admin\Day1Controller@t12');
// Route::get('/day1/t13', 'Admin\Day1Controller@t13');
// Route::get('/day1/t14', 'Admin\Day1Controller@t14');