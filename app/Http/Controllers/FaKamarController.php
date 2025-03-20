<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;

class FaKamarController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $fakamar = FasilitasKamar::with('kamar')->get();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.fa-kamar.index', compact('fakamar'));
    }

    public function create() {
        return view('admin.fa-kamar.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kamar_id'  => 'required|exists:kamars,id', 
            'nama_fasilitas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        FasilitasKamar::create($request->all());

        return redirect()->route('fakamar.index')->with('success', 'FasilitasKamar berhasil ditambahkan');
    }

    public function show($id)
    {
        $fakamar = FasilitasKamar::find($id);

        if(!$fakamar){
            return redirect()->route('fakamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fa-kamar.show', compact('fakamar'));
    }

    public function edit($id)
    {
        $fakamar = FasilitasKamar::find($id);

        if(!$fakamar){
            return redirect()->route('fakamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fa-kamar.edit', compact('fakamar'));
    }


    public function update(Request $request, FasilitasKamar $fakamar)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'nama_fasilitas' => 'required|string|max:255',
        ]);

        $fakamar->update($request->all());

        return redirect()->route('fakamar.index')
            ->with('success', 'Data aparat updated successfully.');
    }



    public function destroy($id){
        $fakamar = FasilitasKamar::find($id);

        if(!$fakamar){
            return redirect()->route('fakamar.index')->with('error', 'FasilitasKamar not found');
        }

        $fakamar->delete();
        return redirect()->route('fakamar.index')->with('success', 'Data deleted successfully');
    }
}
