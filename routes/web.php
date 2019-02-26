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

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');

// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects/create', 'ProjectsController@create');




// Route::get('/home',function () {
// $tasks=[
//     'North Campus'
//     'Centennial Campus',
//         ];
        
//         return view('welcome',['tasks'=>$tasks, 
        
//         'foo'=>'<script>alert("You are entering the home page!")</script>',
        
//         'name'=>'ASR' ]);

//     });

// Route::get('/contact', function () {
  
//     $name='Adharsh';
//     $numbers=[1,2,30];
    
//     return view('contact')->withName($name)->withNumbers($numbers);
   
//     //return view('contact')->with( ['name'=>'Adharsh', 'numbers'=>[1,2,3] ]);// This is another way to define too


// });

// Route::get('/about',function(){
//     return view('about');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
