<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenController extends Controller
{
    //Method view index bolpen
    public function indexbolpen(){
        //Ambil data dari tabel bolpen di DB
        $bolpen = DB::table('bolpen')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('bolpen/indexbolpen',['bolpen' => $bolpen]); ;
    }
    //Method cari bolpen
    public function caribolpen(Request $request)
	{
	    // menangkap data pencarian
		$cari = $request->cari;
    	// mengambil data dari table bolpen sesuai pencarian data
		$bolpen = DB::table('bolpen')
		->where('merkbolpen','like',"%".$cari."%")
		->paginate();
    	// mengirim data bolpen ke view index
		return view('bolpen/indexbolpen',['bolpen' => $bolpen]);

	}

    //Method view tambah bolpen
    public function tambahbolpen(){
        return view('bolpen/tambahbolpen') ;
    }
    //Method untuk insert data ke table Bolpen
    public function storebolpen(Request $request)
    {
	    // insert data ke table bolpen
	    DB::table('bolpen')->insert([
	    	'merkbolpen' => $request->merkbolpen,
		    'stockbolpen' => $request->stockbolpen,
		    'tersedia' => $request->tersedia
	    ]);
	    // alihkan halaman ke halaman bolpen
	    return redirect('/pegawaiDB/bolpen');

    }

    //Method view edit bolpen
    public function editbolpen($kode){
             // mengambil data pegawai berdasarkan id yang dipilih
            $bolpen = DB::table('bolpen')->where('kodebolpen',$kode)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('bolpen/editbolpen',['bolpen' => $bolpen]);
    }
    //Method update data bolpen
    public function updatebolpen(Request $request)
    {
        // update data bolpen
        DB::table('bolpen')->where('kodebolpen',$request->kode)->update([
            'merkbolpen' => $request->merkbolpen,
		    'stockbolpen' => $request->stockbolpen,
		    'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawaiDB/bolpen');
    }

    //Method hapus bolpen
    public function hapusbolpen($kode)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('bolpen')->where('kodebolpen',$kode)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawaiDB/bolpen');
    }


}
