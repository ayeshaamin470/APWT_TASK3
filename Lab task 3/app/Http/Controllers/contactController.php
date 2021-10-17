<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
   public function Create(){
        return view('contact');
    }
    public function createSubmit(Request $request){
       // using requests validate method
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'email'=>'required|min:5|max:10',
				'pn'=>'required|max:11'
                
            ],
            [
                'name.required'=>'Please put your name',
                'email.required'=>'required',
				'pn.required'=>'required',
            ]
        );
		return "ok";  
}
}

