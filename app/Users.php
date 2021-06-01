<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class Users extends Model
{
   public function insert(Request $request)
   {

    $filename = time() . '.' . $request->profile->extension();

    $request->profile->move(public_path('profile'),$filename);
     
       $name=$request->name;
       $email =$request->email ;
       $password=$request->password;
       $roal=$request->roal;

      $projectid=DB::table('tbl_teammember')->insert([
         'name'=>$name,
         'email'=>$email,
         'password'=>$password,
         'image'=> $filename,
         'roal'=> $roal,
         'created_by'=>Auth::user()->id,
      ]);   
      
   }
   public function updateProject(Request $request)
   {

      // $filename = time() . '.' . $request->profile->extension();
      // $request->profile->move(public_path('profile'),$filename);

      $name=$request->name;
      $dob=$request->dob;
      $gender=$request->gender;
      $phone=$request->phone;
      $email=$request->email;
      $Roal=$request->Roal;
      $id=$request->id;
    
      

      if($request->profile!=""){
         $filename = time() . '.' . $request->profile->extension();
         $request->profile->move(public_path('profile'),$filename);
            $clientid=DB::table('tbl_teammember')->where('id',$id)->update([
               'img'=> $filename,
            ]);
      }
      $clientid=DB::table('tbl_teammember')->where('id',$id)->update([
         'name'=>$name,
         'dob'=>$dob,
         'gender'=>$gender,
         'phone'=>$phone,
         'email'=>$email,
         'Roal'=>$Roal,
         // 'img'=> $filename,
         'created_by'=>Auth::user()->id,
      ]);
   }
    public function getTeamMembeData()
    {
      $TeamMembe=DB::table('tbl_teammember')->where('isdelete',0)->get();
      return $TeamMembe;
    }

   

}
