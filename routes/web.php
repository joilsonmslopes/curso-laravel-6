<?php

/** Trabalhando com views */
// Route::get('/loja', function() {
//     return view('site.empresa');
// });
// Outra forma de usar o view que só é recomendada para páginas estáticas, sem lógica de programação
Route::view('/loja', 'site.empresa');

/** Trabalhando com redirect */
/* Forma simplificada de usar o redirect */
Route::redirect('/loja1', '/loja2');

// Route::get('/loja1', function() {
//     return redirect('loja2');
// });

Route::get('/loja2', function() {
    return 'Loja 02';
});

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