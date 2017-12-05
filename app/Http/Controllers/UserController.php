<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

	public function index()
    {
    	return view('profile');
    }

    public function update(Request $r , $id)
    {

    	$u = User::find($id) ;

    	$u->name = $r->name ;

    	$u->email = $r->email ;

    	$u->profile_picture = $r->profilePicture ;

    	$u->gender = $r->gender ;

    	$u->dob = $r->dob ;

    	$u->address = $r->address ;

    	$u->save();
    }
}
