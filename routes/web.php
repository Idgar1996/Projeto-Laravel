<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/about_us', function () {
    return view("about_us");
});
Route::get("/mensagem", function () {
    return view("mensagem");
});
Route::get("/servicos", function () {
    return view("servicos");
});
