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
    return view('welcome');
});

Route::get('/Adrese', function () {
    return view('Adrese');
});

Route::get('/Cerere Inchiriere', function () {
    return view('Cerere_Inchiriere');
});

Route::get('/Client', function () {
    return view('Client');
});

Route::get('/Contract_Inchiriere', function () {
    return view('Contract_Inchiriere');
});

Route::get('/contract_prestari_servicii', function () {
    return view('contract_prestari_servicii');
});

Route::get('/Disopzitii_Incasare', function () {
    return view('Disopzitii_Incasare');
});

Route::get('/Partner', function () {
    return view('Partner');
});

Route::get('/PV_constatare_serviciilor_prestate', function () {
    return view('PV_constatare_serviciilor_prestate');
});