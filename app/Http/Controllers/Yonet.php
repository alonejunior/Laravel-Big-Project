<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
      $data["yazi1"]="PHP Türkiye";
      $data["yazi2"]="Web sitemize Hoşgeldiniz.";
      $data["yazi3"]="Hizmetlerimiz";
      $data["yazi4"]="Web tasarım ve yazılım hizmetlerimiz";
      $data["yazi5"]="Bize Ulaşın";
      return view('web',$data);
    }
}
