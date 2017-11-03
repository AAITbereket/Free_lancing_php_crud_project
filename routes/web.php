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
//---------------------------------------------------------------------------
// Get Request for the Views

Route::get('/','clientController@viewAll');


Route::get('/Adrese', function () {
    return view('Adrese');
});


Route::get('/Client', 'clientController@viewAll');

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
//
//-------------------------------------------------------------------------------

/// Clients
Route::post('/Client', 'clientController@createNew');

Route::post('/EditClient', 'clientController@edit');
Route::get('/EditClient', 'clientController@viewAll');

Route::post('/deleteClient', 'clientController@delete');

//----------------------------------------------------------------------------------
Route::get('/Cerere Inchiriere', 'cerere_Inchiriere_Controller@viewAll');

Route::post('/new_cerere_inchiriere', 'cerere_Inchiriere_Controller@createNew');

Route::post('/delete_Cerere_', 'cerere_Inchiriere_Controller@delete');

Route::post('/Update_cerere', 'cerere_Inchiriere_Controller@edit');
//---------------------------------------------------------------------------------

Route::get('/Disopzitii_Incasare', 'Disopzitii_controller@viewAll');

Route::post('/new_Diposite', 'Disopzitii_controller@createNew');

Route::post('/delete_Deposite', 'Disopzitii_controller@delete');

Route::post('/Update_Deposite', 'Disopzitii_controller@edit');

//---------------------------------------------------------------------------------

Route::get('/Contract_Inchiriere', 'Contract_Inchierere_Controller@viewAll');

Route::post('/new_Contract_Inchiriere', 'Contract_Inchierere_Controller@createNew');

Route::post('/delete_Contract_Inchiriere', 'Contract_Inchierere_Controller@delete');

Route::post('/update_Contract_Inchiriere', 'Contract_Inchierere_Controller@edit');

//---------------------------------------------------------------------------------


//---------------------------------------------------------------------------------

Route::get('/Partner', 'Partner_Controller@viewAll');

Route::post('/new_Partner', 'Partner_Controller@createNew');

Route::post('/delete_Partner', 'Partner_Controller@delete');

Route::post('/update_Partner', 'Partner_Controller@edit');

//---------------------------------------------------------------------------------

Route::get('/contract_prestari_servicii', 'Controller_Contract_Prestari_Servicii@viewAll');

Route::post('/new_contract_prestari_servicii', 'Controller_Contract_Prestari_Servicii@createNew');

Route::post('/delete_contract_prestari_servicii', 'Controller_Contract_Prestari_Servicii@delete');

Route::post('/update_contract_prestari_servicii', 'Controller_Contract_Prestari_Servicii@edit');

//---------------------------------------------------------------------------------





