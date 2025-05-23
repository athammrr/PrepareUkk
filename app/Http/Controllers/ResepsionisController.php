<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CekIn;
use App\Models\Kamar;

class ResepsionisController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $cekin = CekIn::with('kamar')->get();

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

    public function edit($id){
        $cekin = CekIn::find($id);
         if(!$cekin){
            return back()->withErrors(['msg' => 'Data tidak ditemukan']);
         }
         return view('resepsionis.approve', compact('cekin'));
    }

    public function update(Request $request, $id){
        $cekin = CekIn::where('id', $id)->first();

        if(!$cekin){
            return back()->withErrors(['msg' => 'Data tidak ditemukan']);
        }
        
        $request->validate([
            'status' => 'required|string|in:pending,approved',
        ]);

        $cekin->update([
            'status' => $request->status,
        ]);

        return redirect()->route('resepsionis.index')->with('success', 'Data updated successfully');
    }
}
