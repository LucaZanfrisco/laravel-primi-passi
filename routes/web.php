<?php

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
    $title = 'Hello World';
    $subtitle = 'Welcome to a new World';

    $data = [
        'title' => 'Hello World',
        'subtitle' => $subtitle, 
        'home' => 'Home',
        'info' => 'Info',
        'about' => 'About'
    ];
    return view('home',$data);
});

Route::get('/info', function(){
    $data = [
        'title' => 'Laravel Info',
    ];
    return view('info', $data);
});


Route::get('/about', function() {
    
    $data = [
        'title' => 'Laravel About'
    ];
    return view('about',$data);
});
