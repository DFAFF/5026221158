<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtsController extends Controller
{
    public function home1(){
        return view('pwebpages.home1') ;
    }

    public function hello(){
        return view('pwebpages.hello') ;
    }

    public function style(){
        return view('pwebpages.style') ;
    }

    public function style2(){
        return view('pwebpages.style2') ;
    }

    public function responsive(){
        return view('pwebpages.responsive') ;
    }

    public function form(){
        return view('pwebpages.form') ;
    }

    public function linktree(){
        return view('pwebpages.linktree') ;
    }

    public function testimoni(){
        return view('pwebpages.testimoni') ;
    }

}
