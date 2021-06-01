<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectList;
use Auth;
use DB;
class ProjectListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->projectlist=new ProjectList();
    }

    public function index1(Request $request)
    {
        $projectlist=DB::table('tbl_project')->where('isdelete',0)->where('project_status',1)->get();
            return view('ProjectList.index1',['projectlist'=>$projectlist]);
    }
    public function index2(Request $request)
    {
        $projectlist=DB::table('tbl_project')
            ->leftJoin('tbl_client','tbl_project.client_id','tbl_client.id')
            ->select('tbl_project.*','tbl_client.company_name')
            ->where('tbl_project.isdelete',0)->where('tbl_project.project_status',2)->get();
            return view('ProjectList.index2',['projectlist'=>$projectlist]);
    }
    public function index3(Request $request)
    {
        $projectlist=DB::table('tbl_project')
            ->leftJoin('tbl_client','tbl_project.client_id','tbl_client.id')
            ->select('tbl_project.*','tbl_client.company_name')
            ->where('tbl_project.isdelete',0)->where('tbl_project.project_status',3)->get();
            return view('ProjectList.index3',['projectlist'=>$projectlist]);
    }
    public function add(Request $request)
    {
        $id=$request->id;
        $projectdata='';
        if($id!='')
        {
            $projectdata=DB::table('tbl_project')->where('isdelete',0)->where('id',$id)->get()->first();
        }
        $clientlist=DB::table('tbl_client')->where('isdelete',0)->get();
        $membaer=DB::table('tbl_teammember')->select('id','name')->where('isdelete',0)->get();
        return view('ProjectList.add',['membaer'=>$membaer,'clientlist'=>$clientlist,'projectdata'=>$projectdata,'id'=>$id]);
    }
    public function insert(Request $request)
    {
        $id=$request->id;
        if($id!='')
        {
            if($this->projectlist->updateProject($request))
            {
                $request->session()->flash('success_msg', 'Project Updated Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Update Project');
            }
            $projectid=$id;
        }
        else{
            $projectid=$this->projectlist->insert($request);
            if($projectid!='')
            {
                $request->session()->flash('success_msg', 'Project Added Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Add Project');
            }
        }
       
       return redirect('Project-List/modulelist/'.$projectid);
    }
    public function modulelist(Request $request)
    {
        $projectid=$request->projectid;
        $id=$request->id;
        $modulelist=DB::table('tbl_project_module')->where('isdelete',0)->where('project_id',$projectid)->get();
        $moduledata='';
        if($id!='')
        {
            $moduledata=DB::table('tbl_project_module')->where('isdelete',0)->where('id',$id)->first();
        }
        return view('ProjectList.Modulelist',['projectid'=>$projectid,'modulelist'=>$modulelist,'id'=>$id,'moduledata'=>$moduledata]);
    }
    public function insertModulelist(Request $request)
    {
        $id=$request->id;
        $projectid=$request->projectid;
        if($id!='')
        {
            if($this->projectlist->updateModule($request))
            {
                $request->session()->flash('success_msg', 'Module Updated Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Update Module');
            }
        }
        else{
            if($this->projectlist->insertModule($request))
            {
                $request->session()->flash('success_msg', 'Module Added Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Add Module');
            }
        }
        return redirect('Project-List/modulelist/'.$projectid);
    }
    public function tasklist(Request $request)
    {
        $moduleid=$request->moduleid;
        $id=$request->id;
        $tasklist=DB::table('tbl_project_task')->where('isdelete',0)->where('module_id',$moduleid)->get();
        $taskdata='';
        if($id!='')
        {
            $taskdata=DB::table('tbl_project_task')->where('isdelete',0)->where('id',$id)->first();

        }
        return view('ProjectList.tasklist',['moduleid'=>$moduleid,'tasklist'=>$tasklist,'taskdata'=>$taskdata,'id'=>$id]);
    }
    public function insertTasklist(Request $request)
    {
        $id=$request->id;
        $moduleid=$request->moduleid;
        if($id!='')
        {
            if($this->projectlist->updateTask($request))
            {
                $request->session()->flash('success_msg', 'Task Updated Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Update Task');
            }

        }
        else{
            if($this->projectlist->insertTask($request))
            {
                $request->session()->flash('success_msg', 'Task Added Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Add Task');
            }
            
        }
        return redirect('Project-List/tasklist/'.$moduleid);
    }

    public function deleteProject($id)
    {
        $prj=DB::table('tbl_project')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);
        if($prj!='')
        {
            request()->session()->flash('success_msg', 'Project Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete Project');
        }

        return redirect()->back();
    }
    public function deleteModule($id)
    {
        $prj=DB::table('tbl_project_module')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);
        if($prj!='')
        {
            request()->session()->flash('success_msg', 'Module Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete Module');
        }
        return redirect()->back();
    }
    public function deleteTask($id)
    {
        $prj=DB::table('tbl_project_task')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);
        if($prj!='')
        {
            request()->session()->flash('success_msg', 'Task Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete Task');
        }
        return redirect()->back();
    }

    public function summary($id)
    {
        $projectmodule=DB::table('tbl_project_module')->where('isdelete',0)->where('project_id',$id)->get();
        $taskdata=DB::table('tbl_project_task')->where('isdelete',0)->get();
      
        return view('ProjectList.summary',['projectmodule'=>$projectmodule,'taskdata'=>$taskdata]);
    }
    public function updateTask(Request $request)
    {
        $id=$request->taskid;
        $task=DB::table('tbl_project_task')->where('id',$id)->first();
        if($task->status==0)
        {
            DB::table('tbl_project_task')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        else{
            DB::table('tbl_project_task')->where('id',$id)->update([
                'status'=>0
            ]);
        }
        $pendingtask=DB::table('tbl_project_task')->where('isdelete',0)->where('status',0)->where('module_id',$task->module_id)->get();
        if(count($pendingtask)==0)
        {
            DB::table('tbl_project_module')->where('id',$task->module_id)->update([
                'status'=>1
            ]);
        }
        else{
            DB::table('tbl_project_module')->where('id',$task->module_id)->update([
                'status'=>0
            ]);
        }


    }
    public function addtaskbordstatush($id)
    {
        
        $projectid=DB::table('tbl_project')->where('id',$id)->update([
            'task_stetas'=>1,
            ]);   
            
            $projectmodule=DB::table('tbl_project_module')->where('project_id',$id)->get();
      
            foreach($projectmodule as $post){
                $moduleid=DB::table('tbl_tasklist')->insertGetId([
                    'task'=>$post->module_name,
                    'module'=>$post->id,
                    'pid'=>$id,
                    'mid'=>1
                    ]);   

                $projecttask=DB::table('tbl_project_task')->where('module_id',$post->id)->get();

            foreach($projecttask as $data){
                $taskid=DB::table('tbl_subtask')->insert([
                    'taskname'=>$data->title,
                    'mid'=>$moduleid
                    ]);   
            }
            }
        if($projectid!='')
        {
            request()->session()->flash('success_msg', 'Project Add To TaskBoard Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Add Project To TaskBoard');
        }
         return redirect()->back();
    }
  
}
