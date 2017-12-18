<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shoes;

use App\Cart;

use Auth ;

class ShoesController extends Controller
{
    public function index()
    {
    	$s = Shoes::Paginate(8);

    	return view('shoes', compact('s')) ;
    }

    // buat display masing2 sepatu
    
    public function display($id)
    {

    	$shoe = Shoes::find($id) ;

    	return view ('displayShoes' , compact('shoe')) ;

    }

    public function addToCart(Request $r , $id , $price)
    {
        

        $newCart = new Cart ;

        $newCart->UserId = Auth::user()->id ;

        $newCart->ShoesId = $id ;

        $newCart->quantity = $r->qty ;

        $newCart->subTotal = $price * $r->qty ;

        $newCart->save();

        // $s = Shoes::find($id) ;

        // $s->stock -= $r->qty ;

        // $s->save();

        return redirect('/shoes');
    }
}
