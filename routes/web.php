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
        'name' => 'Blog do Treinaweb',
        'slug' => 'Laravel Blade',
        'description' => 'Novidades de tecnologia',
        'paginate' => true,
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheca as novidades do php...',
                'author' => 'Hugo do Valle',
                'date' => '24 de abril de 1981',
                'category' => 'php'
            ],
            [
                'subject' => 'Novidades do C# 8',
                'content' => 'Conheca as novidades do C#...',
                'author' => 'Hugo do Valle',
                'date' => '24 de abril de 1981',
                'category' => 'c#'
            ],
            [
                'subject' => 'Novidades do Java',
                'content' => 'Conheca as novidades do java...',
                'author' => 'Hugo do Valle',
                'date' => '24 de abril de 1981',
                'category' => 'java'
            ],
            [
                'subject' => 'Novidades do Javascript',
                'content' => 'Conheca as novidades do javascript...',
                'author' => 'Hugo do Valle',
                'date' => '24 de abril de 1981',
                'category' => 'javascript'
            ],
        ]
    ]);
});

//Route::get('/post', function(){
//    return view('main.single');
//});