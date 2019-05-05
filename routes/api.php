<?php

use Illuminate\Http\Request;

Route::get("equation", "EquationController@index");
Route::post("average", "AverageController@index");