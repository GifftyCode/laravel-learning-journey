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

 // Group routes

 Route::prefix('register')->group(function () {
    Route::get('students', function () {
        return 'Student Register';
    })->name('student-register');
    Route::get('teachers', function() {
        return 'Teachers Register';
    })->name('teacher-register');
 });

 // Route parameters:
 Route::get('student/{id}', function ($id) {
    return 'Student id Number: '. $id;
 });

  Route::get('student/{id}/{reg}', function ($id, $reg) {
    return 'Student id Number: ' . $id  . ' Registration Number: '  . $reg;
 });