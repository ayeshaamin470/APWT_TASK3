<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class loginController extends Controller
{

    
public function home(Request $request){
        $name = $request->session()->get('user');
        $session = Registration::where('username',$name)
                            ->first();
        return view('home')->with('session',$session);
    }
    public function admin(){
        return view('adminlogin');
     }
	public function Create(){
        return view('login');
    }
    public function createSubmit(Request $request){
       // using requests validate method
$validate = $request->validate([
                'id'=>'required|min:5|max:10',
                'pass'=>'required|min:5|max:10'
                
            ],
            [
                'id.required'=>'Please put your id',
                'pass.min'=>'password must be greater than 4 charcters',
            ]
        );
$uname = $request->id;
$password = $request->pass;
$user = Registration::where('username',$uname)->first();
if($user){
   if($user->password == $password){
      $request->session()->put('user',$uname);
            return redirect()->route('home');
   }
}
else{
      return "ok";

}

}
}
