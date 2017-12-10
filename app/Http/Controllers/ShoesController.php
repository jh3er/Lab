<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shoes;

class ShoesController extends Controller
{
    public function index()
    {
    	//$s = Shoes::all();

    	return view('shoes', compact('s')) ;
    }
}
