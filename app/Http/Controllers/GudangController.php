<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class GudangController extends Controller
{
    public function index(){
        $data_gudang = barang::all()->sortByDesc('id');
        $nomor = 0;

        return view('home', compact('data_gudang','nomor'));
    }
}
