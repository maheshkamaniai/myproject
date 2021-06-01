<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class Taskboard extends Model
{
   
    public function getTaskboardData()
    {
      $Taskboard=DB::table('tbl_project')->where('task_stetas',1)->get();
    
      return $Taskboard;
    }
    public function getModuleData()
    {
      $moduledata=DB::table('tbl_module')->where('isdelete',0)->get();
      return $moduledata;
    }
    public function getTasklist($id)
    {
       $taskdata=DB::table('tbl_tasklist')->where('pid',$id)->get();
       return $taskdata;
    }

    public function inserttask(Request $request)
   {
      // exit;
      $task=$request->task;
      $pid=$request->pid;
      $mid=$request->mid;

      $taskid=DB::table('tbl_tasklist')->insertGetId([
         'task'=>$task,
         
         'pid'=>$pid,
         'mid'=>$mid
      ]);   
      // echo $taskid;exit;
       return $taskid;
   }
   public function gettaskData()
   {
     $taskData=DB::table('tbl_tasklist')->get();
     return $taskData;
   }

}
