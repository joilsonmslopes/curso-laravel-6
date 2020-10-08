<?php

/* A rota match, você pode setar qual ou quais os verbos http a serem usados dentro de um array */
Route::match(['get', 'post'], '/match', function() {
    return 'Match';
});

/* A rota any, é aceito qualquer tipo de método, seja, get, post, put, patch, delete ... */
Route::any('/any', function () {
    return 'Any';
});

Route::get('/empresa', function() {
    return view('site.empresa');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/', function () {
    return view('welcome');
});