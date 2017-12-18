<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Brand ;

use Auth ;

class BrandController extends Controller
{
    
	public function index()
	{
		$b = Brand::all();

		return view('brandList' , compact('b')) ;
	}

    public function insert (Request $r) 
    {
    	$this->validate($r, [

        'name' => 'required|unique:brands',

    	]);

    	$b = new Brand ;

    	$b->name = $r->name ;

    	$b->save();

        return redirect('/');

    }

    public function display($id)
    {

    	$b = Brand::find($id) ;

        return view('updateBrand' , compact('b')) ;

    }

    public function update(Request $r , $id)
    {

        $this->validate($r, [

        'name' => 'required|unique:brands',

        ]);

        $b = Brand::find($id) ;

        $b->name = $r->name ;

        $b->save();

        return redirect('/viewbrand');
    }

    public function delete($id)
    {


    	$b = Brand::find($id) ;

    	$b->delete();

    }
}
