<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{   
    private $isInsert = false;

    public function insertData()
    {

        $data = [
            ['id_barang'=>1,'nama_barang'=>'shampoo','jumlah_barang'=>75,'harga_barang'=>25000],
            ['id_barang'=>2,'nama_barang'=>'sabun','jumlah_barang'=>100,'harga_barang'=>15000],
            ['id_barang'=>3,'nama_barang'=>'sikat gigi','jumlah_barang'=>125,'harga_barang'=>20000],
            ['id_barang'=>4,'nama_barang'=>'sikat lantai','jumlah_barang'=>200,'harga_barang'=>40000]
        ];

        Barang::insert($data);
        $show = Barang::all();
        $this->isInsert = true;
        return view ('home',["shows"=>$show ,"isInsert" => $this->isInsert]);


    }

    public function showData()
    {
        $result = Barang::all();;
        if(count($result) > 0){
            $this->isInsert = true;
        }
        return view ('home',["shows"=>$result,"isInsert" => $this->isInsert]);

    }
    public function deleteData()
    {
         Barang::truncate();
        $this->isInsert = false;
        return view ('home',["isInsert" => $this->isInsert]);
    }
    public function sortNama(){
        $result = Barang::orderBy('nama_barang','ASC')->get();
           $this->isInsert = true;
        return view ('home',["shows"=>$result ,"isInsert" => $this->isInsert]);
    }
    public function sortJumlah(){
        $result = Barang::orderBy('jumlah_barang','ASC')->get();
           $this->isInsert = true;
        return view ('home',["shows"=>$result ,"isInsert" => $this->isInsert]);
    }
    public function searchName($barang)
    {
        $result = Barang::where('nama_barang','LIKE',"%{$barang}%")->get();
         $this->isInsert = true;
        return view ('home',["shows"=>$result ,"isInsert" => $this->isInsert]);
    }
    public function deleteItem($barang)
    {
        $result = Barang::where('nama_barang','LIKE',"%{$barang}%")->delete();
         $this->isInsert = true;
        $show = Barang::all();
        return view ('home',["shows"=>$show ,"isInsert" => $this->isInsert]);
    }
     public function detailItem($barang)
    {
        $result = Barang::where('nama_barang','LIKE',"%{$barang}%")->first();
        $nama_barang =  $result->nama_barang;
        $jumlah_barang =  $result->jumlah_barang;
        $harga =  $result->harga_barang;
        $filename=null;
        if ($nama_barang=='shampoo') {
            $filename='shampo.png';
        }else if ($nama_barang=='sikat gigi') {
             $filename='gigi.jpg';
        }else if ($nama_barang=='sikat lantai') {
             $filename='sikatlantai.jpg';
        }else{
            $filename='sabun.png';
        }
        return view ('detail_page',["nama_barang"=>$nama_barang ,"jumlah_barang"=>$jumlah_barang,"harga" => $harga,"filename"=>$filename]);

    }

}
