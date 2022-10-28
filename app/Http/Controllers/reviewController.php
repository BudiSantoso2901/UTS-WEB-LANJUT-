<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function review($id_barang){
        $data = DB ::table('barang')
        ->join('review', 'review.id_barang', '=', 'barang.id_barang')
        ->where('barang.id_barang', $id_barang)
        ->get();


        return view('review', ["barang" => $data]);
    }
}
