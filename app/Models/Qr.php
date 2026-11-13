<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    protected $fillable = ['token', 'url', 'redirect', 'click'];

    public function getToken()
    {
        return $this['token'];
    }
    public function getUrl()
    {
        return $this['url'];
    }
    public function getRedirect()
    {
        return $this['redirect'];
    }
     public function getClick()
    {
        return $this['click'];
    }
    public function setToken($token)
    {
        $this['token'] = $token;
    }

    public function setUrl($url)
    {
        $this['url'] = $url;
    }
    public function setClick($click)
    {
        $this['click'] = $click;
    }
    public function setRedirect($redirect)
    {
        $this['redirect'] = $redirect;
    }
}
