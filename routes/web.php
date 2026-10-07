<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/track_budget', function () {
    return view('public.track_budget');
});
Route::get('/form_budget', function () {
    return view('public.form_budget');
});
Route::get('/invoices', function () {
    return view('invoices.index');
});