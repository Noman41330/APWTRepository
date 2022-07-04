<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\seller;
use LDAP\Result;

class sellerController extends Controller
{
    function submit(Request $request)
    {
        $rules = [
            "name"=>"required|max:20|min:5",
                "email"=>"required|email|unique:accounts,email",
                //"email"=>"required|email|email",
                'phoneNo' => 'required|min:11|numeric',
                
        ];
        
        $messages=[
            "required"=>"Please fillup this field",
            "name.max"=>"Name should not exceed 10 characters",
            
        ];

        $this->validate($request ,$rules,$messages);
        
        $user = new seller();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->phoneNo =$request->phoneNo;
        $user->address =$request->address;
        $user->save();

        
        return redirect('/sellerdetails');

    }

    public function sellersList(){
      $sellers = seller::all();
        
       return view('admin.sellerList')->with('sellers',$sellers);
     }

     public function delete($id){
        seller::find($id)->delete();

        
         return redirect('/sellerdetails');
    }

    public function sellerEdit($id){
        $edit = seller::find($id);
        return view('admin.editSeller',compact('edit'));
    }

    function updateSeller(Request $request,$id)
    
    {
        $rules = [
            "name"=>"required|max:20|min:5",
                "email"=>"required|email|unique:accounts,email",
                //"email"=>"required|email|email",
                'phoneNo' => 'required|min:11|numeric',
                
        ];
        
        $messages=[
            "required"=>"Please fillup this field",
            "name.max"=>"Name should not exceed 10 characters",
            
        ];

        $this->validate($request ,$rules,$messages);
        
        $user = seller::find($id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->phoneNo =$request->phoneNo;
        $user->address =$request->address;
        
        $user->save();

        
        return redirect('/sellerdetails');

    }

    public function status($id){
        $getstatus = seller::select('status')->where('id',$id)->first();
        //return $getstatus;
       if($getstatus ->status== 1)
       {
        $status = 0;
       }
       else
       {
        $status = 1;
       }

       seller::where('id',$id)->update(['status'=>$status]);
       return redirect('/sellerdetails');
    }

    public function sellerSearch(Request $request)
    {   
        $this->validate($request,[
            'sellerSearch'=>'required'
        ]);
        $sellerSearch_text1=$request->sellerSearch;
        $sellerSearch=seller::orderBy('id','desc')
        ->where('name','like','%'.$sellerSearch_text1.'%')->get();
        return view('admin.sellerSearch',compact('sellerSearch'));
    }

}
