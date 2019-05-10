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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home-page', 'HomeController@index')->name('home');


// path helpers
Route::get('path', function (){

    $path = app_path(); // E:\xampp\htdocs\laravel_helpers\app

    $path = app_path('Http/Controllers/Controller.php'); // E:\xampp\htdocs\laravel_helpers\app\Http/Controllers/Controller.php

    $path = base_path(); // E:\xampp\htdocs\laravel_helpers

    $path = base_path('vendor/bin'); // E:\xampp\htdocs\laravel_helpers\vendor/bin

    $path = config_path(); // E:\xampp\htdocs\laravel_helpers\config

    $path = config_path('app.php'); // E:\xampp\htdocs\laravel_helpers\config\app.php

    $path = database_path(); // E:\xampp\htdocs\laravel_helpers\database

    $path = database_path('factories/UserFactory.php'); // E:\xampp\htdocs\laravel_helpers\database\factories/UserFactory.php

    //$path = mix('css/app.css');

    $path = public_path(); // E:\xampp\htdocs\laravel_helpers\public

    $path = public_path('css/app.css'); // E:\xampp\htdocs\laravel_helpers\public\css/app.css

    $path = resource_path(); // E:\xampp\htdocs\laravel_helpers\resources

    $path = resource_path('sass/app.scss'); // E:\xampp\htdocs\laravel_helpers\resources\sass/app.scss

    $path = storage_path(); // E:\xampp\htdocs\laravel_helpers\storage

    $path = storage_path('app/file.txt'); // E:\xampp\htdocs\laravel_helpers\storage\app/file.txt

    echo $path;

});


// Strings
Route::get('strings', function (){

    //echo __('Welcome to our application'). "<br>";

    //echo __('messages.welcome');

    $class = class_basename('Foo\Bar\Baz'); // Baz
    //echo $class;

    //echo e("<html>foo</html>"); // // &lt;html&gt;foo&lt;/html&gt;

    $string = 'The event will take place between :start and :end';

    //echo $replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);

    // The event will take place between 8:30 and 9:00

    //echo $converted = Str::camel('foo_bar mmt');

    // fooBarMmt

    //return (string) Str::orderedUuid();

    //echo $random = Str::random(40); // 7XYqbFbEZPvcrzS2sZWkrgBnajSMCfCgeOsTDJhm randomly

    return (string) Str::uuid(); // 0cfbd19e-b2df-40ea-9726-2f753370b404 randomly

});

Route::get('urls', function (){

    $url = action('HomeController@index'); // http://localhost:8000/home-page

    $url = asset('img/photo.jpg'); // http://localhost:8000/img/photo.jpg

    $url = secure_asset('img/photo.jpg'); // https://localhost:8000/img/photo.jpg

    $url = url()->current();

    $url = url()->full();

    $url = url()->previous();


    echo $url;




});

