<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasHotel;
use App\Models\Image;

class FaHotelController extends Controller
{
    public function index()
    {
        $hotel = FasilitasHotel::all();

        return view('admin.fa-hotel.index', compact('hotel'));
    }

    public function create() {
        return view('admin.fa-hotel.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas'  => 'required|string|max:255', 
            'status' => 'required|string|max:255|in:available,not available',
            'keterangan' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = new Image();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('fasilitas_hotels'),$imageName);

        FasilitasHotel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'image' => $imageName,
        ]);

        return redirect()->route('fahotel.index')->with('success', 'Fasilitas Hotel berhasil ditambahkan')->with('image', $imageName);
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


    public function update(Request $request, $id)
    {
        $hotel = FasilitasHotel::where('id',$id)->first();

        if(!$hotel){
            return back()->withErrors(['msg' => 'Data tidak ditemukan']);
        }

        $request->validate([
            'nama_fasilitas'  => 'required|string|max:255', 
            'status' => 'required|string|max:255|in:available,not available',
            'keterangan' => 'required|string|max:255',
        ]);

        $hotel->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

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
