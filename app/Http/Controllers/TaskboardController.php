<?php

namespace App\Http\Controllers;

use App\Taskboard;
use Auth;
use DB;
use Illuminate\Http\Request;

class TaskboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Taskboard = new Taskboard();
    }

    public function index()
    {
        if (Auth::user()->name != '' && Auth::user()->name != null) {
            $Taskboard = $this->Taskboard->getTaskboardData();
            return view('Taskboard/index', ['Taskboard' => $Taskboard]);
        } else {
            return redirect('/login');
        }

    }
    public function changeTask(Request $request)
    {
        $id=$request->search;
        $mid=$request->module;
        if($id!='')
        {
            DB::table('tbl_tasklist')->where('id',$id)->update([
                'mid'=>$mid
            ]);
        }
        return redirect()->back();
    }

    public function addmodule($id)
    {
        if (Auth::user()->name != '' && Auth::user()->name != null) {
            $moduledata = $this->Taskboard->getModuleData();
            $taskdata = $this->Taskboard->getTasklist($id);
            return view('Taskboard/module', ['id' => $id, 'moduledata' => $moduledata, 'taskdata' => $taskdata]);
        } else {
            return redirect('/login');
        }
    }

    public function addtask(Request $request)
    {
        $id = $request->pid;
        $taskid = $this->Taskboard->inserttask($request);
        if($taskid!='')
        {
            request()->session()->flash('success_msg', 'Module Added Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Add Module');
        }
        return redirect('Taskboard/addmodule/' . $id)->with($message);
    }

    public function addsubtask(Request $request)
    {
        $id=$request->id;
        // echo $id; exit;
        $subtaskdata=DB::table('tbl_subtask')->where('isdelete',0)->where('mid',$id)->get();
        return view('Taskboard/addsubtask',['id'=>$id,'subtaskdata'=>$subtaskdata]);
    }
    public function addsubtaskname(Request $request)
    {
        $taskname=$request->taskname;
        $mid=$request->mid;

        $taskid=DB::table('tbl_subtask')->insert([
            'taskname'=>$taskname,
            'mid'=>$mid
            ]);   
            if($taskid!='')
            {
                request()->session()->flash('success_msg', 'Task Added Successfully');
            }else{
                request()->session()->flash('error_msg', 'Failed To Add Task');
            }
        return redirect()->back();
    }
    public function updateTask(Request $request)
    {
        $id=$request->taskid;
        $task=DB::table('tbl_subtask')->where('id',$id)->first();
        if($task->status==0)
        {
            DB::table('tbl_subtask')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        else{
            DB::table('tbl_subtask')->where('id',$id)->update([
                'status'=>0
            ]);
        }

    }
}
