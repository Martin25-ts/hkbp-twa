<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\MsSunday;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sundaystore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'sundaythumbnail' => 'required|mimes:png',
                'sundayagenda' => 'required|mimes:pdf',
                'sundaywarta' => 'required|mimes:pdf',
                'sundaydate' => 'required|date',
                'sundaylive' => 'required|url',
                'sundaydescription' => 'required',
            ],
            [
                'sundaythumbnail.required' => 'Thumbnail tidak boleh kosong.',
                'sundaythumbnail.mimes' => 'Thumbnail harus berupa file dengan tipe PNG.',
                'sundayagenda.required' => 'Agenda tidak boleh kosong.',
                'sundayagenda.mimes' => 'Agenda harus berupa file dengan tipe PDF.',
                'sundaywarta.required' => 'Warta tidak boleh kosong.',
                'sundaywarta.mimes' => 'Warta harus berupa file dengan tipe PDF.',
                'sundaydate.required' => 'Tanggal tidak boleh kosong.',
                'sundaydate.date' => 'Tanggal harus dalam format tanggal yang benar.',
                'sundaylive.required' => 'Tautan Live Streaming tidak boleh kosong.',
                'sundaylive.url' => 'Tautan Live Streaming harus berupa URL yang valid.',
                'sundaydescription.required' => 'Deskripsi tidak boleh kosong.',
            ]
        );

        if ($validator->fails()) {

            return redirect()->route('dashboard')->withErrors($validator)->withInput();
        }


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
            'sundaythumbnail' => 'thumbnail.png',
            'sundayagenda' => 'agenda.pdf',
            'sundaywarta' => 'warta.pdf',
            'sundaylive' => $request->input('sundaylive'),
            'sundaydescription' => $request->input('sundaydescription'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        session()->flash('success', 'Data Minggu berhasil ditambahkan!');
        return redirect()->route('dashboard');
    }


    public function beritaPost(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'beritaimage' => 'required|mimes:png',
                'beritatitle' => 'required',
                'beritadescription' => 'required',
                'beritatime' => 'required|date',

            ],
            [
                'beritaimage.required' => 'Thumbnail tidak boleh kosong.',
                'beritaimage.mimes' => 'Thumbnail harus berupa file dengan tipe PNG.',
                'beritatitle.required' => 'Judul tidak boleh kosong.',
                'beritadescription.required' => 'Deskripsi tidak boleh kosong.',
                'beritatime.required' => 'Tanggal tidak boleh kosong.',
                'beritatime.date' => 'Tanggal harus dalam format tanggal yang benar.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('dashboard')->withErrors($validator)->withInput();
        }

        $thumbnailFile = $request->file('beritaimage');
        $thumbnailName = Str::random(40) . '.' . $thumbnailFile->getClientOriginalExtension();
        // Membuat path ke direktori dengan tanggal sebagai bagian dari path
        $folderPath = public_path('asset/Dashboard/berita/');
        $thumbnailPath = $thumbnailFile->move($folderPath, $thumbnailName);

        $userId = Auth::id();

        Berita::create([
            'userid' => $userId,
            'beritaimage' => $thumbnailName,
            'beritatitle' => $request->input('beritatitle'),
            'beritadeskripsi' => $request->input('beritadescription'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'beritatime' => $request->input('beritatime'),
        ]);

        session()->flash('success', 'Berita Berhasil Ditambahkan');
        return redirect()->route('dashboard');

    }
}
