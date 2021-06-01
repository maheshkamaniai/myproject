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
$filename='';
    if($request->profile!=''){
    $filename = time() . '.' . $request->profile->extension();

    $request->profile->move(public_path('profile'),$filename);
    }
       $name=$request->name;
       $email =$request->email ;
       $password=bcrypt($request->password);
       $roal=$request->roal;

       $datetime=date('Y-m-d H:i:s');


      $userid=DB::table('users')->insert([
         'name'=>$name,
         'email'=>$email,
         'password'=>$password,
         'image'=> $filename,
         'roal'=> $roal,
         'isdelete'=>0,
         'created_by'=>Auth::user()->id,
         'created_at'=>$datetime,
         'updated_at'=>$datetime
      ]);   
      return $userid;
   }
   public function updateProject(Request $request)
   {

      // $filename = time() . '.' . $request->profile->extension();
      // $request->profile->move(public_path('profile'),$filename);

      $name=$request->name;
      $email =$request->email ;
      $password=$request->password;
      $roal=$request->roal;

      $datetime=date('Y-m-d H:i:s');
      $id=$request->id;
    
      if($request->profile!=""){
         $filename = time() . '.' . $request->profile->extension();
         $request->profile->move(public_path('profile'),$filename);
            $clientid=DB::table('users')->where('id',$id)->update([
                'image'=> $filename,
            ]);
      }

      if($request->password!=""){
           $clientid=DB::table('users')->where('id',$id)->update([
            'password'=>$password,
           ]);
     }

      $userid=DB::table('users')->where('id',$id)->update([
        'name'=>$name,
        'email'=>$email,
       
        
        'roal'=> $roal,
        'isdelete'=>0,
        'created_by'=>Auth::user()->id,
        'created_at'=>$datetime,
        'updated_at'=>$datetime
       
         // 'img'=> $filename,
      ]);
      return $userid;
   }
   
   public function getUsersData()
   {
     $UsersData=DB::table('users')->where('isdelete',0)->get();
     return $UsersData;
   }

   

}
