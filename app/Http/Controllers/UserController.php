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
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|confirmed',
            'profilePicture' => 'required' ,
            'gender' => 'required' ,
            'address' => 'required|min:10'
        ]) ;

    	$u = User::find($id) ;

    	$u->name = $r->name ;

    	$u->email = $r->email ;

    	$u->profile_picture = $r->profilePicture ;

    	$u->gender = $r->gender ;

    	$u->dob = $r->dob ;

    	$u->address = $r->address ;

    	$u->save();

        return redirect('/');
    }

    public function index()
    {

        $u = User::all();

        return view('userList', compact('u'));

    }

    public function delete($id)
    {
        $u = User::find($id) ;

        $u->delete() ;

        return redirect('/viewuser');
    }

    public function insert(Request $r)
    {

       $this->validate($r, [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|confirmed',
            'profilePicture' => 'required' ,
            'gender' => 'required' ,
            'address' => 'required|min:10'
        ]);

        $file = $r->file('profilePicture') ;

        $filename = $file->getClientOriginalName();

        $r->file('profilePicture')->move("upload/profile", $filename);

        $u = new User ;

        $u->name = $r->name ;

        $u->email = $r->email ;

        $u->password = bcrypt($r->password) ;

        $u->profile_picture = $filename ;

        $u->dob = $r->dob ;

        $u->address = $r->address ;

        $u->save();

        return redirect('/');
    }


    public function display($id)
    {
        $u = User::find($id) ;

        return view('updateUser' , compact('u')) ;
    }

}
