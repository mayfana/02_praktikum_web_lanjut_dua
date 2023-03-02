<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index (){
        return "Selamat datang";
    }
    public function about (){
        return "Mayfana Laura Abdi 2141720169";
    }

    public function article($id){
        return "Halaman artikel dengan id $id";
    }

}
