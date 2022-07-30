<?php

namespace App\Http\Controllers;
use App\Models\Account;
use LDAP\Result;
use Illuminate\Http\Request;
session_start();

class LoginController extends Controller
{
    function loginsubmit(Request $request)
    {
        $rules = [
                "email"=>"required",
                "password"=>"required",
        ];
        
        $messages=[
                'email.exists'=>'No account is found using this mail',
                'password.exists'=>'Password incorrect'
        ];

        $this->validate($request ,$rules,$messages);

           $email=$request->email;
           $password=$request->password;
           $result=Account::where('email',$email)->where('password',$password)->first();
           $id=$result->id;
           $request->session()->put('id',$id);

           if($request->remember){
            setcookie('email',$result->email, time()+20);
            setcookie('password',$result->password, time()+20);
           }
           
           
           

          if($result){
            if($result->type=='admin'){
               // return view('admin.dashboard');
                return redirect('/details');
            }
            else{
                return view('registration');
            }
          }
          else{
            return redirect('/login');
          }
    }
    function logout(){
        session()->forget('id');
       
        return redirect()->route('login');
    }

    public function list(){
        $accuonts = Account::all();
        
         return view('admin.dashboard')->with('accuonts',$accuonts);
    }
    

}
