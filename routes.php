<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* 个人中心 */
$app->get('/user' ,['as' => 'user', function() {
     return view('pages.user');
}]);

/* 个人信息 */
$app->get('/user/info' ,['as' => 'user.info', function() {
     return view('pages.uinfo');
}]);

/* 我的流量 */
$app->get('/user/flow' ,['as' => 'flow', function() {
     return view('pages.uflow');
}]);

/* 签到 */
$app->get('/user/sign' ,['as' => 'user.sign', function() {
     return view('pages.usign');
}]);

/* V币任务，赚取V币 */
$app->get('/coins/task' ,['as' => 'task.coins', function() {
     return view('pages.ctask');
}]);

/* 我的V币兑换记录 */
$app->get('/coins/record' ,['as' => 'task', function() {
     return view('pages.crecord');
}]);

/* V币排行榜 */
$app->get('/coins/list' ,['as' => 'task', function() {
     return view('pages.clist');
}]);

