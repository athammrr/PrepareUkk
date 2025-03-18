<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $dataUser = User::all();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.dashboard', compact('dataUser'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role'  => 'required|in:admin,resepsionis,user',
        ]);

        // Simpan data ke database
        User::create($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'User berhasil ditambahkan');
    }
}

