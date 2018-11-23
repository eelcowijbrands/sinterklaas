<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishController extends Controller
{
    Route::get('/wishes', 'WishController@index');
    Route::post('/wish', 'WishController@store');
    Route::delete('/wish/{wish}', 'WishController@destroy');
}
?>