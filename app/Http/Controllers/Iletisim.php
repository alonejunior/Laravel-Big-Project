<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Iletisim extends Controller
{
    public function index(){
      return view("iletisim");
    }
}
