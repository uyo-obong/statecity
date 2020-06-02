<?php

Route::group(['namespace' => 'Uyoobonga\StateCity\Http\Controllers'], function () {
    Route::get('/state', [ 'as' => 'pkg.state', 'uses' => 'StateCityController@state' ]);
    Route::get('/city/{code}', [ 'as' => 'pkg.city', 'uses' => 'StateCityController@city' ]);
});

