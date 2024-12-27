<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function(){
//     echo "Hello World";
// });

// Route::post('/testPost',function(){
//     echo "Testing Of Post Method";
// });

// Route::any('/testPost', function(){
//     echo "Testing Of Post Method";
// });

// Route::get('/demoUrl',function(){
//     return view('welcome');
// });

// Route::get('/demo/{name}/{id?}', function($name, $id = null){
//     // return view('demo');
//     // echo $name ." ";
//     // echo $id;

//     $data = compact('name','id');
//     // print_r($data);
//     return view('demo')->with($data);
// });

// Route::post('user/{id}', function($id)){

// }

// Route::patch();

// Route::delete('user/{id}', function($id)){

// }


Route::get('/{name?}',function($name = null){
    $demo = "<h2> Dharti </h2>";
    $data = compact('name','demo');
   
    return view('home')->with($data);
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});