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

 Route::fallback(function() {
    return '<h1>Lost in jungle... Please return back home!</h1>';
 });

 // Returning view routes
 Route::get('about-us', function () {
    return view('aboutUs');
 });

 Route::view('contact-us', 'contactUs');

 // How to pass data from  routes to views
 Route::get('team', function() {
   $name = 'testers';
   $email = 'tester@gmail.com';
   // using the 'with' keyword
   // return view('team')->with('teamName', $name)->with('teamEmail', $email);

   // using the compact function
   // return view('team', compact('name', 'email')); // using the exact variable name.

   // using array method
   return view('team', ['teamName' => $name, 'teamEmail' => $email]);
 });
 Route::view('services', 'services', ['development' => 'Web and Mobile', 'designs' => 'graphics and product']);


 
