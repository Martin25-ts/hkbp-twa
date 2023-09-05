<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemajaController extends Controller
{
    public function remajaDashboard(){
        return view('page-remaja.remaja-dashbaord');
    }
    public function remajaKegiatan(){
        return view('page-remaja.remaja-kegiatan');
    }
    public function remajaGalery(){
        return view('page-remaja.remaja-galery');
    }
    public function remajaPengurus(){
        return view('page-remaja.remaja-pengurus');
    }
    public function remajaTentang(){
        return view('page-remaja.remaja-tentang');
    }
}
