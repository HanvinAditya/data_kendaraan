<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('isi_form', [ProfileController::class, 'isi_form']);

Route::post('upload_pertama', [ProfileController::class, 'upload_pertama']);

Route::get('form_2', [ProfileController::class, 'isi_form_dua']);

Route::post('upload_kedua', [ProfileController::class, 'upload_kedua']);

Route::get('report_identitas', [ProfileController::class, 'report_identitas']);