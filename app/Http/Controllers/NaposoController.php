<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class NaposoController extends Controller
{
    public function naposoDashboard()
    {
        return view('page-naposo.naposo-dashboard');
    }

    public function naposoGalery()
    {
        return view('page-naposo.naposo-galery');
    }
    public function naposoKegiatan()
    {
        return view('page-naposo.naposo-Kegiatan');
    }

    // halaman pengurus naposo
    public function naposoPengurus()
    {
        $pengurus = $this->getPengurusNaposo('PS010','PS013');
        return view('page-naposo.naposo-pengurus',compact('pengurus'));
    }

    public function getPengurusNaposo($startPositionId, $endPositionId)
    {
        $jemaats = Jemaat::where('positionid', '>=', $startPositionId)
            ->where('positionid', '<=', $endPositionId)
            ->get();

        return $jemaats;
    }

    // halaman tentang naposo
    public function naposoTentang()
    {
        return view('page-naposo.naposo-tentang');
    }
}
