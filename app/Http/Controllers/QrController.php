<?php

namespace App\Http\Controllers;

use App\Service\QrService;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function createQr(Request $request, QrService $qrService)
    {
        $request->validate(['slug' => 'required'], ['slug.required' => 'Text atau url tidak boleh kosong']);
        $qrService->createQr($request->slug);
    }
    public function generateQr($slug, QrService $qrService)
    {
        return $qrService->generateQr($slug);
    }
}
