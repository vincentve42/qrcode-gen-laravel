<?php

namespace App\Http\Controllers;

use App\Models\Qr;
use App\Service\QrService;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function createQr(Request $request, QrService $qrService)
    {
        $request->validate(['slug' => 'required'], ['slug.required' => 'Text atau url tidak boleh kosong']);
        return $qrService->createQr($request->slug);
    }
    public function generateQr(Request $request, QrService $qrService)
    {
        
        return response($qrService->generateQr($request['slug']))
            ->header('Content-Type', 'image/png');
    }

    public function analyzeQr($token, QrService $qrService)
    {
        $qr = Qr::where('token', $token)->first();
        
        if($qr == null)
        {
            session(['notfound' => "Token tidak valid"]);
            return redirect()->route('home');
        }
        else
        {
            session()->forget(['notfound']);

            return view('analytic', compact('qr'));
        }
        
    }
}
