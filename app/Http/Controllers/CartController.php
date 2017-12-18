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


    	$c = DB::table('Cart')
    			->join('shoes' , 'Cart.ShoesId', '=', 'shoes.id')
    			->join('users' , 'Cart.UserId', '=', 'users.id')
    			->select( 'shoes.picture','shoes.name' , 'Cart.quantity' , 'shoes.price' ,'Cart.subTotal' ,'Cart.id' ,'shoes.id as sId','shoes.discount' )
    			->where('Cart.UserId' , '=' , Auth::user()->id)
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
