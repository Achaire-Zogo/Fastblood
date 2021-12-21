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
               Session::put('iduser',$user['id']);
               $role=(Role::where('id',$user->role_id))->first();
               Session::put('role',$role['id']);
               if (Session::get('role')==4) {
                return view('director/index');
               }
               if (Session::get('role')==3) {
                return view('responsable/index');
               }
               if (Session::get('role')==2) {
                return view('gestionnaire/index');
               }
               if (Session::get('role')==1) {
                return view('user/index');
               }
       }
       else{
   return back()->withInput()->withErrors([ 'email'=>'email', 'password'=>'password']);}
   
   }
}
