<?php


Route::group(['namespace' => 'GennadiyBilyk\productso\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'PrsoCategoryController@show');
});