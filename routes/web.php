<?php

/* Passando parâmetro opcional */
Route::get('/produtos/{idProduct?}/servico', function($idProduct = '') {
    return "Produto(s): {$idProduct}";
});

/* Passando rotas com parâmetro */
Route::get('/categoria/{flag}/posts', function($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function($flag) {
    return "Produtos da categoria: {$flag}";
});

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

Route::get('/produto', function() {
    return view('products');
});

Route::get('/', function () {
    return view('welcome');
});