<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($tranId)
    {

    	$d = DB::table('detail')
    			->join('shoes' , 'shoes.id' , '=' , 'detail.ShoesID')
    			->select('shoes.name' , 'detail.Qty' , 'shoes.price','shoes.discount')
    			->where('detail.TranId' , '=' , $tranId ) 
    			->get();

    	return view('transactionDetail' , compact('d')) ;
    }
}
