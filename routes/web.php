<?php

use App\Http\Controllers\QrController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/create-qr', [QrController::class, 'createQr']);

Route::get('/generate-qr/{slug}', [QrController::class, 'generateQr']);

Route::get('/qr/{token}', [QrController::class, 'analyzeQr']);
