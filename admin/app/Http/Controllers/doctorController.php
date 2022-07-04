<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Doctor;
use LDAP\Result;

class doctorController extends Controller
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
        
        $user = new Doctor();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->phoneNo =$request->phoneNo;
        $user->address =$request->address;
        $user->speciality =$request->speciality;
        $user->save();

        
        return redirect('/drdetails');

    }

    public function doctorsList(){
        $doctors = Doctor::all();
        
         return view('admin.doctorList')->with('doctors',$doctors);
    }

    public function drDelete($id){
        seller::find($id)->drDelete();

        
         return redirect('/drdetails');
    }


    public function drEdit($id){
        $edit = Doctor::find($id);
        return view('admin.editDr',compact('edit'));
    }

    function updateDr(Request $request,$id)
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
        
        $user = Doctor::find($id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->phoneNo =$request->phoneNo;
        $user->address =$request->address;
        $user->speciality =$request->speciality;
        $user->save();

        
        return redirect('/drdetails');

    }

    public function accessibilty($id){
        $getstatus = Doctor::select('accessibilty')->where('id',$id)->first();
        //return $getstatus;
       if($getstatus ->accessibilty== 1)
       {
        $accessibilty = 0;
       }
       else
       {
        $accessibilty = 1;
       }

       Doctor::where('id',$id)->update(['accessibilty'=>$accessibilty]);
       return redirect('/drdetails');
    }

    public function drSearch(Request $request)
    {   
        $this->validate($request,[
            'drSearch'=>'required'
        ]);
        $drSearch_text1=$request->drSearch;
        $drSearch=Doctor::orderBy('id','desc')
        ->where('name','like','%'.$drSearch_text1.'%')->get();
        return view('admin.drSearch',compact('drSearch'));
    }






//     public function dredit(Request $request)
//     {
//         $doctors = Doctor::where('id', request->id )->get();
//         return view('admin.editDr')->with('doctors', $doctors);
//     }
}
