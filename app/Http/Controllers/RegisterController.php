<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;


class RegisterController extends Controller
{
    

    public function showRegister(){

        return view('register');

    }

    public function doRegister(Request $request){
    	$user = new User;
    	$user->email = $request->input('email');
    	$user->name = $request->input('username');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();

    	$theEmail = $request->input('email');
    	return view('thanks')->with('theEmail', $theEmail);
    }

}
