<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang !";
    }

    public function about(){
        echo "Nama : Iqri Mannisa' Buchori <br/>";
        echo "NIM  : 2041720066 <br/> ";
        
    }

    public function articles($id){
        echo "Ini adalah halaman Artikel dengan ID : {$id} ";
    }

}
