<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
  public function liste()
  {
    $bilgi=Bilgiler::find(5);

    echo $bilgi->metin;
  }
  public function ekle()
  {
    Bilgiler::create(
      [
        "metin"=>"Model dosyasondan eklendi.",
        //modelde sonunda virgul olmak zorunda
      ]
    );
  }

  public function guncelle()
  {
    Bilgiler::whereId(6)->update(
      [
        "metin"=>"Model guncellendi gardaş.",
        //modelde sonunda virgul olmak zorunda
      ]
    );
  }

  public function sil(){
    Bilgiler::whereId(6)->delete();

}
}
