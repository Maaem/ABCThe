<?php

use Illuminate\Support\Facades\Route;

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

 Route::get('/patient/recherche', function () {
    return view('/patient/recherche');
 });

 Route::get('/headers/header1', function () {
   return view('/headers/header1');
});

Route::get('/headers/headersimple', function () {
   return view('/headers/headersimple');
});

Route::get('components/lesfooters/footer', function () {
   return view('components/lesfooters/footer');
});

Route::get('/sidebar', function () {
   return view('sidebar');
});

Route::get('/patient/essai', function () {
   return view('/patient/essai');
});

Route::get('/patient/exemple', function () {
   return view('/patient/exemple');
});

Route::get('/404', function () {
   return view('404');
});

Route::get('/praticien/offres', function () {
   return view('praticien/offres');
});

Route::get('/lesfooters/vert', function () {
   return view('lesfooters/vert');
});

Route::get('/pages/about', function () {
   return view('/pages/about');
});

Route::get('/pages/partenaires', function () {
   return view('/pages/partenaires');
});

Route::get('/pages/faq', function () {
   return view('/pages/faq');
});

Route::get('/pages/connexion', function () {
   return view('/pages/connexion');
});

Route::get('/pages/inscription', function () {
   return view('/pages/inscription');
});

Route::get('/pages/mdp', function () {
   return view('/pages/mdp');
});

Route::get('/pages/contact', function () {
   return view('/pages/contact');
});

Route::get('/pages/tableau', function () {
   return view('/pages/tableau');
});

Route::get('/components/headers/headergris', function () {
   return view('/components/headers/headergris');
});



 

// Route::get('/connection', function () {
//     return view('connection');
// });

// Route::get('/', [AbcController::class, 'index']);

