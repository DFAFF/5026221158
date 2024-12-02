<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function indexcounter()
    {
        DB::table('pagecounter')->increment('Jumlah');
    	//$pegawai = DB::table('pegawai')->get();  // hasil 2d array tanpa filtering
        $pagecounter = DB::table('pagecounter')->get();
    	// mengirim data pegawai ke view index
    	return view('counter/counter',['pagecounter' => $pagecounter]);

    }

}
