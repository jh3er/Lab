<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Transaction ;

use Auth ;

use Illuminate\Support\Facades\DB;

use App\DetailTransaction ;

use App\Cart ;

use App\Shoes ;

class TransactionController extends Controller
{
    // show all transaction

    public function index()
    {

        if(Auth::user()->name == 'admin')
        {

            $t = Transaction::all() ;

            return view ('transaction' , compact('t')) ;

        }

        else
        {
            $t = DB::table('transactions')
                    ->where('UserId' , '=' , Auth::user()->id)
                    ->get();

            return view ('transaction' , compact('t')) ;       
        }    

    }

	public function insert(Request $r)
	{

		$t = new Transaction ;

		$t->UserId = Auth::user()->id ;

		$t->email = Auth::user()->email ;

		$t->status = 'success' ;

		$t->save();

		$tId = Transaction::all()->last()->id ;

		
		// masukin ke detail transaction

		$d = DB::table('Cart')
    			->join('shoes' , 'Cart.ShoesId', '=', 'shoes.id')
    			->join('users' , 'Cart.UserId', '=', 'users.id')
    			->select('shoes.id' , 'Cart.quantity')
    			->where('Cart.UserId' , '=' , Auth::user()->id)
    			->get();


    	foreach ($d as $detail) 
    	{
    		$newD = new DetailTransaction ;

    		$newD->TranId = $tId ;

    		$newD->ShoesId = $detail->id; // ini shoesId

    		$newD->Qty = $detail->quantity;

    		$newD->save();

    	}

    	foreach ($d as $detail)
    	{

    		$shoe = Shoes::find($detail->id) ;

    		$shoe->stock = $shoe->stock - $detail->quantity ;

    		$shoe->save();

    	}

    	Cart::where('UserId', 'like', Auth::user()->id)->delete();

    	return redirect('/');
	}

    public function delete($id)
    {

        $t = Transaction::find($id) ;

        $t->delete();

    }

}
