<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login.login');
    }
    public function verify(Request $request)
    {
        $user = DB::table('login')
            ->where('userName', $request->userName)
            ->where('password', $request->password)
            ->first();
            
    	if(!$user)
    	{
    		$request->session()->flash('message', 'Invalid username or password');
            return redirect('/login');
    	}
    	else
    	{
            $request->session()->put('user', $user);
            if( $user -> type == "user")
            {
            	return redirect('/UserHome');
            }
            if( $user -> type == "admin")
            {
            	return redirect('/AdminHome');
            }
            
    			
    	}
    }
}
