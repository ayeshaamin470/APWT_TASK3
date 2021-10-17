<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class registrationController extends Controller
{
   public function Create(){
        return view('registration');
    }
    public function createSubmit(Request $request){
       // using requests validate method
        $validate = $request->validate([
                'fname'=>'required|min:5|max:10',
				'uname'=>'required|min:5|max:15',
                'email'=>'required',
				'pn'=>'required|max:11',
				'pass'=>'required|min:5|',
				'cpass'=>'required|min:5|',
				'dob'=>'required|max:13',
                
            ],
            [
			    'uname.required'=>'Please put your username',
                'fname.required'=>'Please put your name',
                'email.required'=>'required',
				'pn.required'=>'required',
				'dob.required'=>'required',
            ]
        );
        $newacc = new Registration();
        $newacc->fname = $request->fname;
        $newacc->lname = $request->lname;
        $newacc->username=$request->uname;
        $newacc->password= $request->pass;
        $newacc->email = $request->email;
        $newacc->pn= $request->pn;
        $newacc->dob = $request->dob;
        $newacc->save();

		return "data inserted";  
}
}
