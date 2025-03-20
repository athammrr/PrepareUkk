<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasHotel;

class FaHotelController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $hotel = FasilitasHotel::all();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.fa-hotel.index', compact('hotel'));
    }

    public function create() {
        return view('admin.fa-hotel.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'jmlh_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
        ]);

        // Simpan data ke database
        FasilitasHotel::create($request->all());

        return redirect()->route('fahotel.index')->with('success', 'Fasilitas Hotel berhasil ditambahkan');
    }

    public function show($id)
    {
        $hotel = FasilitasHotel::find($id);

        if(!$hotel){
            return redirect()->route('fahotel.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fa-hotel.show', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = FasilitasHotel::find($id);

        if(!$hotel){
            return redirect()->route('fahotel.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fa-hotel.edit', compact('hotel'));
    }


    public function update(Request $request, FasilitasHotel $hotel)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'jmlh_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
        ]);

        $hotel->update($request->all());

        return redirect()->route('fahotel.index')
            ->with('success', 'Data aparat updated successfully.');
    }



    public function destroy($id){
        $hotel = FasilitasHotel::find($id);

        if(!$hotel){
            return redirect()->route('fahotel.index')->with('error', 'FasilitasHotel not found');
        }

        $hotel->delete();
        return redirect()->route('fahotel.index')->with('success', 'Data deleted successfully');
    }
}
