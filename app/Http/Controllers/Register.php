<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    public function insert(Request $request){
       $Name=$request->name;
       $Mobile=$request->mobile;
       $Date=$request->dob;
       $Email=$request->email;
       $Username=$request->username;
       $Password=$request->password;
       $Gender=$request->gender;
       $Level=$request->level;

       $otp=rand(1000,4000);
       

      $data=array('Name'=>$Name,'DOB'=>$Date,'Level'=>$Level,'MobileNO'=>$Mobile,'Email'=>$Email,'Gender'=>$Gender,'Passward'=>$Password,'UserName'=>$Username,'Verified'=>0,'OTP'=>$otp);

      $m=DB::table('registration')->insert($data);

      echo "<script> alert('Inserted'); </script>";

      return view('welcome');


    


    }	


}
