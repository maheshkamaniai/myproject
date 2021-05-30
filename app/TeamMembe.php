<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class TeamMembe extends Model
{
   public function insert(Request $request)
   {

    $filename = time() . '.' . $request->pimage->extension();

    $request->pimage->move(public_path('pimage'),$filename);
     
       $name=$request->name;
       $dob=$request->dob;
       $gender=$request->gender;
       $phone=$request->phone;
       $email=$request->email;
       $Roal=$request->Roal;

      $projectid=DB::table('tbl_teammember')->insert([
         'name'=>$name,
         'dob'=>$dob,
         'gender'=>$gender,
         'phone'=>$phone,
         'email'=>$email,
         'img'=> $filename,
         'Roal'=> $Roal,
         'created_by'=>Auth::user()->id,
      ]);   
      
   }
   public function updateProject(Request $request)
   {

      // $filename = time() . '.' . $request->pimage->extension();
      // $request->pimage->move(public_path('pimage'),$filename);

      $name=$request->name;
      $dob=$request->dob;
      $gender=$request->gender;
      $phone=$request->phone;
      $email=$request->email;
      $Roal=$request->Roal;
      $id=$request->id;
    
      

      if($request->pimage!=""){
         $filename = time() . '.' . $request->pimage->extension();
         $request->pimage->move(public_path('pimage'),$filename);
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
   //  public function getModuleData()
   //  {
   //    $moduledata=DB::table('tbl_module')->where('isdelete',0)->get();
   //    return $moduledata;
   //  }

   //  public function inserttask(Request $request)
   // {
   //    // exit;
   //    $task=$request->task;
   //    $taskid=DB::table('tbl_tasklist')->insertGetId([
   //       'task'=>$task,
   //       'module'=>Auth::user()->id,
   //    ]);   
   //    // echo $taskid;exit;
   //     return $taskid;
   // }
   // public function gettaskData()
   // {
   //   $taskData=DB::table('tbl_tasklist')->get();
   
   //   return $taskData;
   // }
   

}
