 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;





Route::get('/', function () {
    return view('welcome');
});

//Route::get('/deneme' , function(){return view('/ornek');});

Route::get("/phptürkiye/{isim}",[Ornek::class,'test']);

Route::get("/web",[Yonet::class,'site']);

Route::get("/form",[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);

Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);

Route::get("/sil",[Veritabaniislemleri::class,'sil']);

Route::get("/listele",[Veritabaniislemleri::class,'bilgiler']);

Route::get("/modelekle",[Modelislemleri::class,'ekle']);

Route::get("/modelguncelle",[Modelislemleri::class,'guncelle']);

Route::get("/modelsil",[Modelislemleri::class,'sil']);

Route::get("/iletisim",[Iletisim::class,'index']);
