<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;
use App\Models\Kamar;

class FaKamarController extends Controller 
{
    public function index()
    {
        $fakamar = FasilitasKamar::with('kamar')->get();

        return view('admin.fa-kamar.index', compact('fakamar'));
    }

    public function create()
{
    $kamar = Kamar::all();
    return view('admin.fa-kamar.tambah', compact('kamar'));
}


    public function store(Request $request)
    {
        $request->validate([
            'kamar_id'  => 'required|exists:kamars,id', 
            'nama_fasilitas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        FasilitasKamar::create([
            'kamar_id' => $request->kamar_id,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]); 

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
    $kamars = Kamar::all(); 

    if (!$fakamar) {
        return redirect()->route('fakamar.index')->with('error', 'Data tidak ditemukan');
    }

    return view('admin.fa-kamar.edit', compact('fakamar', 'kamars'));
}



public function update(Request $request, $id)
{
    $fakamar = FasilitasKamar::find($id);

    if (!$fakamar) {
        return back()->withErrors(['msg' => 'Data fasilitas tidak ditemukan.']);
    }

    $request->validate([
        'kamar_id' => 'required|exists:kamars,id',
        'nama_fasilitas' => 'required|string|max:255',
    ]);

    $fakamar->update([
        'kamar_id' => $request->kamar_id,
        'nama_fasilitas' => $request->nama_fasilitas,
    ]);

    return redirect()->route('fakamar.index')->with('success', 'Data fasilitas kamar berhasil diperbarui.');
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
