<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_medicine;
use App\Models\User;

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
    public function check_medication(){
        return view('client.check_medication');
    }
    public function add_medication($id){
        $user_id = $id;
        return view('client.add_medication',compact('user_id'));
    }
    public function store_medication(Request $request){
        foreach ($request->addMoreInputFields as $key => $value)
        {
            $image = null;

            User_medicine::create([

                'user_id' => $request->user_id,
                'name' => $value['name']
            ]);
            User::where('id',$request->user_id)->update([
                'medication' => '1'
            ]);

            return redirect()->route('dashboard')->with('success',"Medication Added");
        }
    }
}
