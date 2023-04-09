<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Twilio\Rest\Client;
use APP\PHPunit\Exception;

use App\adminlogin;

class adminController extends Controller
{
//Showing the Admin Dashboard form
//..........................................................................................
public function showadmindashboardform(){
    return view('admin.dashboard');
}
//Showing the Admin Dashboard form
//...........................................................................................
public function showadmindashboard(){

    if(auth()->check()){

        return view('admin.dashboard');
    }
    return redirect()->route('showadminlogin');


}


//    Showing the Admin Login form
// ...........................................................................................
    public function showadminlogin(){
    return view('admin.adminlogin');
   }

//    Showing the Admin Registration form
// ...........................................................................................

   public function showadminregister(){
    return view('admin.adminregister');
   }

//Showing the Admin verification
//.........................................................................................
public function showadminverify(){
    return view('admin.adminveryfyotp');
}



// Submit the Admin Registration form
//..........................................................................................
public function submitAdminRegister(Request $request){

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
         adminlogin::insert($data);
         return redirect()->route('showadminlogin');

     }
     catch (Exception $Exception)
     {

         dd($Exception);
     }
      return redirect()->back();

 }

 // Completting  the Admin login process form
//..........................................................................................
public function submitadminlogin(Request $request)
{

    $user=adminlogin::where('email',$request->email)->first();
    if($user){
     $otp = rand(10,1000000);
     if(Hash::check($request->password,$user->password));
     {
        adminlogin::where('id',$user->id)->update(['otp'=>$otp]);
         auth()->login($user);
         $user_id=$user->id;
         $mess='your otp is:'.$otp;
         // $this->sendmessage($mess,'+9779779808669259');
         return view('admin.adminveryfyotp',compact('user_id'));
     }
     return redirect()->back();

    }
    return redirect()->back();

 }

 public function adminotpverify(Request $request,$id){
     if(!$id){
         return redirect()->back();

     }
     $user=adminlogin::where('id',$id)->first();

     if($user){
         if($user->otp == $request->otp){
            //fetch details
            $destination = \App\adminlogin::where('id', $id) ->first();
            if($destination){
            $viewtour=\App\adminlogin::find($id);
            return view('admin.dashboard', compact('destination','viewtour'));

            }

             return redirect()->route('showadmindashboardform');
         }

     }
     return redirect()->back();

 }

 public function adminlogoutform(){
    if(auth()->check()){
        auth()->logout();
        session()->flush();

    }
    return redirect()->route('showadminlogin');


}



function welcome(){
    return view('welcome');
}




}
