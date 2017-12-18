<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{

	public function profile()
    {
    	return view('profile');
    }

    public function update(Request $r , $id)
    {

        $this->validate($r, [

        'name' => 'required|min:3',

        'email' => 'required|unique' ,

        'gender' => 'required' ,

        'address' => 'required|min:10' 

        ]);

    	$u = User::find($id) ;

    	$u->name = $r->name ;

    	$u->email = $r->email ;

    	$u->profile_picture = $r->profilePicture ;

    	$u->gender = $r->gender ;

    	$u->dob = $r->dob ;

    	$u->address = $r->address ;

    	$u->save();
    }

    public function index()
    {

        $u = User::all();

        return view('', compact('s'));

    }

    public function delete($id)
    {
        $u = User::find($id) ;

        $u->delete() ;
    }
}
