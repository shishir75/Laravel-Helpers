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

Route::get('/', function () {
    return view('welcome');
});


// path helpers
Route::get('helpers', function (){

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