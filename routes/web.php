<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', 'BookController');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});