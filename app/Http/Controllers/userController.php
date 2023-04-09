<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

use App\userlogin;

class userController extends Controller
{
//showing the user login form
//........................................................................
    public function showuserlogin(){
        return view('user.userlogin');
    }


// showing the user registration form
//.........................................................................
    public function showuserregister(){
        return view('user.userregister');
    }


//Showing the User verification
//.........................................................................................
public function showuserverify(){
    return view('user.userveryfyotp');
}


// Submit the user Registration form
//..........................................................................................
public function submitUserRegister(Request $request){

    $request->validate([
         'name'=>'required',
         'email'=>'required',
         'password'=>'required|confirmed'
     ]);



     try {
         $data=[];

         $data=[
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>bcrypt($request->password)
         ];
         userlogin::insert($data);
         return redirect()->route('showuserlogin');

     }
     catch (Exception $Exception)
     {

         dd($Exception);
     }
      return redirect()->back();

 }





}
