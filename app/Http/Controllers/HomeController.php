<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home(){
    return view('welcome');
    }
    public function about(){
    return'About Us';
    }
    public function contact(){
    return('Nama : Syahadah Khoirul Nisa <br> Nim : D212011033 <br> Kelas : KA7B <br> Email : syahadahkhoirulnisa@gmail.com');
    }
}
