<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class InputController extends Controller
{
	    
   public function inputData(Request $request)
    {
    	$result = Barang::select('id_barang')->orderBy('id_barang','desc')->first();
    	$data =  ['nama_barang'=>$request->namaBarang,'jumlah_barang'=>$request->jumlahBarang,'harga_barang'=>$request->hargaBarang];
    	Barang::insert($data);
    	$show = Barang::all();
	        return view ('home',["shows"=>$show]);

    }
}
