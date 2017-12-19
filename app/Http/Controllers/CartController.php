<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cart;

use Auth;

use App\Shoes;


use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {


    	$c = DB::table('cart')
    			->join('shoes' , 'cart.ShoesId', '=', 'shoes.id')
    			->join('users' , 'cart.UserId', '=', 'users.id')
    			->select( 'shoes.picture','shoes.name' , 'cart.quantity' , 'shoes.price' ,'cart.subTotal' ,'cart.id' ,'shoes.id as sId','shoes.discount' )
    			->where('cart.UserId' , '=' , Auth::user()->id)
    			->get();

    	
    	
    	return view ('cart' , compact('c'));
    }

    public function delete($id)
    {

    	$c = Cart::find($id) ;

    	$c->delete();

    	return redirect('/viewcart') ;

    }
    
}
