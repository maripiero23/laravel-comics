<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    
    $arrayHeader = config('arrayHeader');
    $arrayFooter = config('arrayFooter');
    $iconsFooter = config('iconsFooter');
    $comics = config('comics');
    $brands = config('brands');


    return view('home', [
        "arrayHeader" => $arrayHeader,
        "arrayFooter" => $arrayFooter,
        "iconsFooter" => $iconsFooter,
        "comics" => $comics,
        "brands" => $brands,


    ]);
})->name("home");
