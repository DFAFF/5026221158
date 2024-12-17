<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AaController extends Controller
{
    public function indexaa(){

        // Fetch the 'pesan' column from the 'chat' table
        $data = DB::table('chat')->select('pesan')->get();

        // Initialize an empty array to store the split words
        $pesan = [];

        // Loop through each message and split it by spaces
        foreach ($data as $item) {
            $words = explode(' ', $item->pesan); // Split the string by spaces
            $pesan = array_merge($pesan, $words); // Merge words into the pesan array
        }

        // Pass the split words to the view
        return view('aa/chat', ['pesan' => $pesan]);
    }
}
