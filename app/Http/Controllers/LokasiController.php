<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function create(){
        //display pada user create page
        return view('lokasi.create');
    }
}
