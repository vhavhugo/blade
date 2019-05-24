<?php

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
    return view('news.index')->with([
        'nome' => 'Hugo <strong>Augusto</strong><script>alert("executou sem permissão")</script>',
        'description' => 'teste php',
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheça as novidades do php...'
            ],
            [
                'subject' => 'Novidades do C#',
                'content' => 'Conheça as novidades do C#...'
            ]
        ]
    ]);
});
