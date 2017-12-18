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

        return redirect('/shoes');
    }

    public function insert(Request $r)
    {
        $file = $r->file('picture') ;

        $filename = $file->getClientOriginalName();

        $request->file('picture')->move("upload/shoes", $filename);

        $newS = new Shoes ;

        $newS->name = $r->name ;

        $newS->picture = $filename ;

        $newS->brand = $r->brand ;

        $newS->price = $r->price ;

        $newS->discount = $r->discount ;

        $newS->stock = $r->stock ;

        $newS->description = $r->description ;

        $newS->comments = $r->comments ;

        $newS->save();

    }

    public function update(Request $r , $id)
    {
        $file = $r->file('picture') ;

        $filename = $file->getClientOriginalName();

        $request->file('picture')->move("upload/shoes", $filename);

        $s = Shoes::find($id) ;

        $s->name = $r->name ;

        $s->picture = $filename ;

        $s->brand = $r->brand ;

        $s->price = $r->price ;

        $s->discount = $r->discount ;

        $s->stock = $r->stock ;

        $s->description = $r->description ;

        $s->comments = $r->comments ;

        $s->save();

    }

    public function delete($id)
    {
        $s = Shoes::find($id) ;

        $s->delete();
    }

}
