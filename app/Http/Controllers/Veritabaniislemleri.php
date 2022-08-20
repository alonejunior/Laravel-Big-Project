<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
//ekleyerek laravelle kurulu gelen db kutuphanesını ekleyebılırız

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table('bilgiler')->insert([
        //aşagıya alana eklenılmek ıstenılen yer yazılır ardından web php ye gerekli istem yani root eklenir
          "metin"=>"nereye dönersen dön popon arkandadır."

        ]);
        /*insert into tabloadı values (istenilen deger vb) yazılarak sql cumlesı olusturuyoduk */
    }


    public function guncelle()
    {
      DB::table("bilgiler")->where("id",4)->update([
        "metin"=>"bu metin alanınız güncellenmiştir."
      ]);
    }

    public function sil(){
      DB::table("bilgiler")->where("id",4)->delete();
    }

    public function bilgiler()
    {
      /*$veriler=DB::table("bilgiler")->get();

      foreach ($veriler as $key => $bilgi) {
        echo $bilgi->id. "".$bilgi->metin;
        echo "<br>";
      }*/
        $veri=DB::table("bilgiler")->where("id",5)->first();
        echo $veri->metin;

    }

}
