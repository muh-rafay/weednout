<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){


        if(Auth::user()->hasrole('admin')){
            return view('admin.dashboard');
        }
        elseif(Auth::user()->hasrole('dispenser')){

            return view('dispenser.dashboard');
        }
        elseif(Auth::user()->hasrole('client')){
            
            return view('client.dashboard');
        }
    }
}
