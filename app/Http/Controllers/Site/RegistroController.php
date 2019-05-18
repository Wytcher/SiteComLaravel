<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RegistroController extends Controller
{
    public function index(){
    	return view('auth.register');
    }

    public function index2(){
    	return view('welcome');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('index');
    }
}
