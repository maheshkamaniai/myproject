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
            $this->projectlist->updateProject($request);
            $projectid=$id;
        }
        else{
            $projectid=$this->projectlist->insert($request);
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
            $this->projectlist->updateModule($request);
        }
        else{
            $this->projectlist->insertModule($request);
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
            $this->projectlist->updateTask($request);
        }
        else{
            $this->projectlist->insertTask($request);
        }
        return redirect('Project-List/tasklist/'.$moduleid);
    }

    public function deleteProject($id)
    {
        
        DB::table('tbl_project')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);

        return redirect()->back();
    }
    public function deleteModule($id)
    {
        DB::table('tbl_project_module')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);
   
        return redirect()->back();
    }
    public function deleteTask($id)
    {
        DB::table('tbl_project_task')
        ->where('id', $id)
        ->update(['isdelete' => "1"]);
   
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
         return redirect()->back();
    }
  
}
