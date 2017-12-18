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

        if(Auth::user()->name == 'admin')
        {
            return view('updateShoes' , compact('shoe'));
        }
        else
        {
            return view('displayShoes' , compact('shoe'));
        }


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
        $this->validate($r, [

        'name' => 'required|unique:shoes|min:3',

        'brand' => 'required' ,

        'description' => 'required' ,

        'price' => 'numeric|min:1000' ,

        'discount' => 'required|numeric|min:0|max:100' ,

        'stock' => 'required|numeric|min:0|max:100' 

        ]);

        $file = $r->file('picture') ;

        $filename = $file->getClientOriginalName();

        $r->file('picture')->move("upload/shoes", $filename);

        $newS = new Shoes ;

        $newS->name = $r->name ;

        $newS->picture = $filename ;

        $newS->brand = $r->brand ;

        $newS->price = $r->price ;

        $newS->discount = $r->discount ;

        $newS->stock = $r->stock ;

        $newS->description = $r->description ;

        $newS->save();

        return redirect('/');
    }


    public function update(Request $r , $id)
    {
        $this->validate($r, [

        'name' => 'required|unique:shoes|min:3',

        'brand' => 'required' ,

        'description' => 'required' ,

        'price' => 'numeric|min:1000' ,

        'discount' => 'required|numeric|min:0|max:100' ,

        'stock' => 'required|numeric|min:0|max:100' 

        ]);
        
        if($r->hasFile('picture'))
        {
            $file = $r->file('picture') ;

            $filename = $file->getClientOriginalName();

            $request->file('picture')->move("upload/shoes", $filename);

            $s->picture = $filename ;
        }

        $s = Shoes::find($id) ;

        $s->name = $r->name ;

        $s->brand = $r->brand ;

        $s->price = $r->price ;

        $s->discount = $r->discount ;

        $s->stock = $r->stock ;

        $s->description = $r->description ;

        $s->comments = $r->comments ;

        $s->save();

        return redirect('/');

    }

    public function delete($id)
    {
        $s = Shoes::find($id) ;

        $s->delete();

        return redirect('shoes');
    }

}
