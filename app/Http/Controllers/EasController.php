<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    //Method view index bolpen
    public function indexeas(){
        //Ambil data dari tabel bolpen di DB
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
    	return view('eas/indexeas',['nilaikuliah' => $nilaikuliah ]); ;
    }

     //Method view tambah bolpen
     public function tambaheas(){
        return view('eas/tambaheas') ;
    }
    //Method untuk insert data ke table Bolpen
    public function storeeas(Request $request)
    {
	    // insert data ke table bolpen
	    DB::table('nilaikuliah')->insert([
	    	'NRP' => $request->NRP,
		    'NilaiAngka' => $request->NilaiAngka,
		    'SKS' => $request->SKS
	    ]);
	    // alihkan halaman ke halaman bolpen
	    return redirect('/eas');

    }


}
