<?php

use App\Livewire\ListarEstudantes;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');



require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){
    Route::get('/estudantes', ListarEstudantes::class)->name('estudantes.listar');

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
});