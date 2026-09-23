<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return 'Halo Dunia Laravel';
});

Route::get('/profile', function () {
    return '<h1>Profile Mahasiswa</h1>
    <p>Selamat Datang!</p>';
});

Route::get('/home', function () {
    return view('home');
});
