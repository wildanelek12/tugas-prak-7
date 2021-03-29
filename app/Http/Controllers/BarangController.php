<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BarangController extends Controller
{	
	private $isInsert = false;

    public function insert()
    {
    	$result = DB::insert("insert into barangs (id_barang,nama_barang,jumlah_barang,harga_barang) values (1,'shampoo',75,25000),(2,'sabun',100,15000),(3,'sikat gigi',125,20000),(4,'sikat lantai',200,40000)");
    	$show = DB::select("select * from barangs");
    	$this->isInsert = true;
    	return view ('home',["shows"=>$show ,"isInsert" => $this->isInsert]);


    }

    public function show()
    {
    	$result = DB::select("select * from barangs");
    	if(count($result) > 0){
    		$this->isInsert = true;

    	}
    	return view ('home',["shows"=>$result,"isInsert" => $this->isInsert]);

    }
    public function delete()
    {
    	$result = DB::delete("delete from barangs");
    	$this->isInsert = false;
      	return view ('home',["isInsert" => $this->isInsert]);
    }
    public function sortNama()
    {
    	
    }

}
