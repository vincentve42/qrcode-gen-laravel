<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\UrlService;
class UrlController extends Controller
{
    public function redirectUrl($url, UrlService $urlService)
    {
        return $urlService->redirectUrl($url);
    }
}
