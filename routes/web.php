<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $kategoriak = DB::select("SELECT kategoriak.nev,urlek.url
    FROM kategoriak
    INNER JOIN urlek
    ON (kategoriak.k_id=urlek.kapcsolat)
    WHERE urlek.tipus= 'kategoria'");
    
    
    return view('welcome',["kategoriak" => $kategoriak]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
