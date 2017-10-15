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

//練習一: 顯示學生的資料與成績
Route::get('student/{student_no}',function ($student_no){
    return '學號：'.$student_no;
});

Route::get('student/{student_no}/score',function ($student_no){
    return '學號：'.$student_no.'的所有成績';
});