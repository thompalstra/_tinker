<?php
use Hub\Base\Route;
Route::get("", "HomeController@index");
Route::get("info/services/{service}", "Info\ServicesController@service");
