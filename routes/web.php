<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// use App\Http\Controllers\ProductsController; has been called at the begining, index function is inside the ProductsController
Route::get('products',[ProductsController::class, "index"]);


//passing single variable to controller passing variable using With() method in the controller in the a1 Function
Route::get('a1',[ProductsController::class, "a1"]);
//passing single variable to controller passing variable using compact() method in the controller in the a2 function
Route::get('a2',[ProductsController::class, "a2"]);
//passing multiple single variable to controller passing variable using compact() method in the controller in the a3 function
Route::get('a3',[ProductsController::class, "a3"]);

Route::get('show/{id}',[ProductsController::class, "show"]);

Route::get('a4/{name}',[ProductsController::class, "a4"]); // you use ->where to prevent user for typing not valid datatypes example ->where('name', [a-Z]+)

route::get('a5', [ProductsController::class,"a5"])->name("mya5Route"); // use name to name the route


 route::get('/',[CarsController::class,"index"]);
 route::get('/cars',[CarsController::class,"cars"]);
 route::get('/cars',[CarsController::class,"cars"]);

 route::get('/post',[PostController::class,"index"]);