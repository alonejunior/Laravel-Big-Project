<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uyelıkislemleri extends Controller
{
    public function uyekayit(Request $uyebilgileri)
    {
        $uyebilgileri->validate([
          "adsoyad"=>"|min:3|max:10",
          "telefon"=>"required|min:10|max:12",
          "mail"=>"required|email"
        ]);
echo "form bilgileriniz filtreden basarıyla gecti";
    }
}
