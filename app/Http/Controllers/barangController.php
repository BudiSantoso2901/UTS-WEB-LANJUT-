<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function home(){
        $allBarang = barang::all();
        $data['allBarang'] = barang::all();
        return view('home', $data);
    }
}
