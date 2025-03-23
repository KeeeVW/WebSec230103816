<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/multable', function () {
   return view('multable'); //multable.blade.php
});

Route::get('/even', function () {
   return view('even'); //even.blade.php
});

Route::get('/prime', function () {
   return view('prime'); //prime.blade.php
});
Route::get('/test', function () {
   return view('test'); //test.blade.php
});


Route::get('/transcript', function () {
    return view('transcript');
});

Route::get('/bill', function () {
   return view('bill'); // Updated from 'minitest' to 'bill'
});
Route::get('/calculator', function () {
   return view('calculator');
});

Route::get('/gpa-calculator', function () {
    $courses = [
        ['code' => 'Web and Security Technologies ', 'title' => '', 'credit' => 3],
        ['code' => 'Linux and Shell Programming ', 'title' => ' ', 'credit' => 3],
        ['code' => 'Network Operation and Managment', 'title' => ' ', 'credit' => 3],
        ['code' => 'Digital Forensics Fundamental ', 'title' => ' ', 'credit' => 3],

        

    ];
    
    return view('gpa-calculator', compact('courses'));
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ProductsController; // Import only once

// Define the route
Route::get('/products', [ProductsController::class, 'list'])->name('products.list');

Route::get('/products', [ProductsController::class, 'list'])->name('products.list');
