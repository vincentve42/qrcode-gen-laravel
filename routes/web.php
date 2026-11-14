<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/create-qr', [QrController::class, 'createQr']);

Route::get('/generate-qr', [QrController::class, 'generateQr'])->name('generateQr');

Route::get('/qr/{token}', [QrController::class, 'analyzeQr']);

Route::get('/url/{url}', [UrlController::class, 'redirectUrl']);

Route::get('/analyze/', [QrController::class, 'analyzeQrPortal']);
