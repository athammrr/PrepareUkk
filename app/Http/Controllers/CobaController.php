<?php

namespace App\Http\Controllers;

use App\Models\CekIn;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index() {
        $data = 'tes';
        return view('coba', compact('data'));
    }


}
