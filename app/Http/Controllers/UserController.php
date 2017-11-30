<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

	// register function 

    public function register(Request $r)
    {


    	$user = new User;

    	$user->name = $r->name ;

    	$user->email = $r->email ;

    	$user->password = $r->password ;

    	$user->dob = $r->dob ;

    	$user->address = $r->address ;

    	$user->gender = $r->gender ;

    	//dd buat debug data udh dapet belom dari frontend
    	dd($user) ;

    	$user->save() ;

    	return redirect('/');

    }
}
