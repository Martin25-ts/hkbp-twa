<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerejaPageController extends Controller
{
    public function gerejaPage(){
        return view('page.gereja');
    }
}
