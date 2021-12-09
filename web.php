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

Route::get('/', function () {
    return '<h1> hello world </h1>'; //view('welcome');
});

Route::get('/about', function() {
    return '<h4> the about page </h4>';
});

Route:: get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {

        if (isset($item)) {
            return "you are vieuwing ther store for  {$category} for {$item}";
        }

        return 'you are viewing the store for ' . strip_tags($category);
    }

    return 'you are viewing all instruments.';

});

// Route:: get('/store', function () {
//     $category = request('category');


//     //strip_tags voorkomt foutmeldingen door niet geprogrammeerde request-namen
//     if (isset($category)) {
//         return 'you are viewing the store for ' . strip_tags($category);
//     }

//     return 'you are viewing all instruments.';

// });