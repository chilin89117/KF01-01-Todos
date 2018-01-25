<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos', 'TodoController')->except(['create', 'show']);
