<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return view ("home");
}) ->name("home");

Route::get("/about", function () {
    return view ("about");
}) ->name("about");

Route::get("/servicos", function () {
    return view ("servicos");
}) ->name("servicos");

Route::get("/contact", function () {
    return view("contact");
}) ->name("contact");

Route::get("/mensagem", function () {
    return view("mensagem");
}) ->name("mensagem");