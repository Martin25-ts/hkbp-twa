<?php

namespace App\Http\Controllers;

use App\Models\MsSunday;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{
    public function sundayUpdate(Request $request){

        $request->validate([
            'sundaythumbnail' => 'nullable|image|mimes:png',
            'sundayagenda' => 'nullable|mimetypes:application/pdf',
            'sundaywarta' => 'nullable|mimetypes:application/pdf',
            'sundaydate' => 'nullable|date',
            'sundaylive' => 'nullable|url',
            'sundaydescription' => 'nullable',
        ]);

        // Mendapatkan tanggal dari form
        $sundayDate = Carbon::createFromFormat('Y-m-d', $request->input('sundaydate'));

        // Membuat folder berdasarkan tanggal yyy-mm-dd di dalam 'public/asset/Live-Stream/'
        $folderPath = public_path('asset/Live-Stream/' . $sundayDate->format('Y-m-d'));
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Jika ada file gambar thumbnail diupload, maka lakukan pengolahan gambar
        if ($request->hasFile('sundaythumbnail')) {
            $thumbnailPath = $request->file('sundaythumbnail')->move($folderPath, 'thumbnail.png');
        }

        // Jika ada file agenda diupload, maka lakukan pengolahan file agenda
        if ($request->hasFile('sundayagenda')) {
            $agendaPath = $request->file('sundayagenda')->move($folderPath, 'agenda.pdf');
        }

        // Jika ada file warta diupload, maka lakukan pengolahan file warta
        if ($request->hasFile('sundaywarta')) {
            $wartaPath = $request->file('sundaywarta')->move($folderPath, 'warta.pdf');
        }

        // Mengambil user ID dari auth yang sedang login
        $userId = Auth::id();

        // Mendapatkan data Minggu berdasarkan Sunday ID terbesar
        $latestSunday = MsSunday::orderBy('sundayid', 'desc')->first();

        // Mengupdate data Minggu berdasarkan Sunday ID terbesar
        $latestSunday->update([
            'userid' => $userId,
            'sundaydate' => $request->input('sundaydate'),
            'sundaythumbnail' => isset($thumbnailPath) ? 'thumbnail.png' : $latestSunday->sundaythumbnail,
            'sundayagenda' => isset($agendaPath) ? 'agenda.pdf' : $latestSunday->sundayagenda,
            'sundaywarta' => isset($wartaPath) ? 'warta.pdf' : $latestSunday->sundaywarta,
            'sundaylive' => $request->input('sundaylive'),
            'sundaydescription' => $request->input('sundaydescription'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/dashboard')->with('success', 'Data Minggu berhasil diupdate!');
    }
}
