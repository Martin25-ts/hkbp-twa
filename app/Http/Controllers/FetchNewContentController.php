<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class FetchNewContentController extends Controller
{
    public function fetchNewContent(Request $request)
    {
        $lastUpdatedTime = $request->input('last_updated_time');
        $newContents = Berita::where('beritatime', '>', $lastUpdatedTime)->orderBy('beritatime')->get();

        return response()->json($newContents);
    }
}
