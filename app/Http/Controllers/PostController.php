<?php

namespace App\Http\Controllers;

use App\Models\MsSunday;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sundaystore(Request $request){
        $request->validate(
            [
                'sundaythumbnail' => 'nullable|mimes:png',
                'sundayagenda' => 'nullable|mimes:pdf',
                'sundaywarta' => 'nullable|mimes:pdf',
                'sundaydate' => 'nullable|date',
                'sundaylive' => 'nullable|url',
                'sundaydescription' => 'nullable',
            ],
            [
                'required_without_all' => 'Minimal satu dari :attribute harus diisi.',
            ]
        );
        // Mendapatkan tanggal dari form
        $sundayDate = Carbon::createFromFormat('Y-m-d', $request->input('sundaydate'));

        // Membuat folder berdasarkan tanggal yyy-mm-dd di dalam 'public/Live-Stream/'
        $folderPath = public_path('asset/Live-Stream/' . $sundayDate->format('Y-m-d'));
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Menyimpan gambar thumbnail dengan nama 'thumbnail.png' dalam folder berdasarkan tanggal
        $thumbnailPath = $request->file('sundaythumbnail')->move($folderPath, 'thumbnail.png');

        // Menyimpan file agenda dengan nama 'agenda.pdf' dalam folder berdasarkan tanggal
        $agendaPath = $request->file('sundayagenda')->move($folderPath, 'agenda.pdf');

        // Menyimpan file warta dengan nama 'warta.pdf' dalam folder berdasarkan tanggal
        $wartaPath = $request->file('sundaywarta')->move($folderPath, 'warta.pdf');

        // Mengambil user ID dari auth yang sedang login
        $userId = Auth::id();

        // Membuat data Sunday dalam database
        MsSunday::create([
            'userid' => $userId,
            'sundaydate' => $request->input('sundaydate'),
            'sundaythumbnail' =>'thumbnail.png',
            'sundayagenda' => 'agenda.pdf',
            'sundaywarta' => 'warta.pdf',
            'sundaylive' => $request->input('sundaylive'),
            'sundaydescription' => $request->input('sundaydescription'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/dashboard')->with('success', 'Data Minggu berhasil ditambahkan!');
    }
}
