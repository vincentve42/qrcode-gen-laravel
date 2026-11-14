<?php

namespace App\Service;

use App\Models\Qr;
use Illuminate\Support\Facades\Redirect;

class UrlService{
    public function redirectUrl($url)
    {
        $qr = Qr::where('url', $url)->first();

        if($qr == null)
            return view('404');
        
        $qr['click'] += 1;
        $qr->update();

        return redirect()->away($qr['redirect']);
    }
}

?>