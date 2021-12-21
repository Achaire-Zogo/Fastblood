<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Session;

class SigninController extends Controller
{
    //
    public function login (Request $request) {
      

        request()->validate([
   'email'=>['required'],
   'password'=>['required']
        ]);
       $resultat=auth()->attempt([
   'email'=>request('email'),
   'password'=>request('password')
       ]);
       //dd(sha1("aaaa"));
       if($resultat){
           $user=User::where('email',request('email'))->first();
               Session::put('id',$user['id']);
   
            return view('welcome',[]);
           
       }
       else{
   return back()->withInput()->withErrors([ 'email'=>'email', 'password'=>'password']);}
   
   }
}
