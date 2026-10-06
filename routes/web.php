<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



 Route::get('/', function () {
    return '<h1>Hello from Laravel</h1>';
 });

 Route::get('about', function () {
    return 'About Us!';
 });

 Route::get('details/students', function () {
    return '<h1>Student Details!</h1>';
 });

 Route::get('details/teachers', function () {
    return '<h1>Teacher Details!</h1>';
 });