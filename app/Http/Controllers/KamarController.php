<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $kamar = Kamar::all();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.kamar.kamar', compact('kamar'));
    }

    public function create() {
        return view('admin.kamar.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'jmlh_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
        ]);

        // Simpan data ke database
        Kamar::create($request->all());

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan');
    }

    public function show($id)
    {
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.kamar.show', compact('kamar'));
    }

    public function edit($id)
    {
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.kamar.edit', compact('kamar'));
    }


    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'jmlh_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
        ]);

        $kamar->update($request->all());

        return redirect()->route('kamar.index')
            ->with('success', 'Data aparat updated successfully.');
    }



    public function destroy($id){
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Kamar not found');
        }

        $kamar->delete();
        return redirect()->route('kamar.index')->with('success', 'Data deleted successfully');
    }
}
