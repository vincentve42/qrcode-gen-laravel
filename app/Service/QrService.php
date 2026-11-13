<?php 

namespace App\Service;

use App\Models\Qr;
use BaconQrCode\Writer;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Str;

class QrService{
    public function createQr($slug)
    {
        $qr = new Qr();

        $qr->setToken(Str::random(32));

        $qr->setUrl(Str::random(64));

        $qr->setRedirect($slug);

        $qr->setClick(0);

        $qr->save();
    
    }
    public function generateQr($slug)
    {
        $builder = new Builder(writer: new PngWriter(), size : 300, margin:10, data:$slug);
       
        $result = $builder->build();

        return $result->getString();
    }
}
?>