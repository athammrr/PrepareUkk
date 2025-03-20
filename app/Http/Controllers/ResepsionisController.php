<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CekIn;

class ResepsionisController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $cekin = CekIn::all();

        // Kirim data ke Blade menggunakan compact()
        return view('resepsionis.resep', compact('cekin'));
    }

    public function show($id)
    {
        $cekin = CekIn::find($id);

        if(!$cekin){
            return redirect()->route('resepsionis.index')->with('error', 'Data doesnt exist');
        }
        return view('resepsionis.show', compact('cekin'));
    }

}
