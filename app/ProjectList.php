<?php

namespace App;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model
{
    //
    public function insert(Request $request)
    {
        $project_title=$request->project_title;
        $technology=$request->technology;
        $technology=implode(',',$technology);
        $team_member=$request->team_member;
        $team_member=implode(',',$team_member);
        $status=$request->status;
        $client=$request->client;
        $description=$request->description;
        $sdate=$request->sdate;
        $deliverable_days=$request->deliverable_days;
        $logo=$request->logo;
        $fileName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('upload'), $fileName);
        $document=$request->document;
       
        $document_name='';
        $i=0;
        foreach($request->document as $doc)
        {
           
            $i++;
            $docName=time().$i.'.'.$doc->extension();
            $doc->move(public_path('upload/documents'), $docName);
            $document_name.=$docName.',';
        }

      
        $project_id=DB::table('tbl_project')->insertGetId([
            'project_title'=>$project_title,
            'technology_used'=>$technology,
            'team_member_id'=>$team_member,
            'project_status'=>$status,
            'client_id'=>$client,
            'project_description'=>$description,
            'project_start_date'=>$sdate,
            'project_deliverable_day'=>$deliverable_days,
            'project_logo'=>$fileName,
            'project_document'=>$document_name,
        ]);
        return $project_id;
    }
    public function updateProject(Request $request)
    {
        $project_title=$request->project_title;
        $technology=$request->technology;
        $technology=implode(',',$technology);
        $team_member=$request->team_member;
        $team_member=implode(',',$team_member);
        $status=$request->status;
        $client=$request->client;
        $description=$request->description;
        $sdate=$request->sdate;
        $deliverable_days=$request->deliverable_days;
        $fileName=$request->logotext;
     
        if($request->hasFile('logo'))
        {
          
            $fileName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('upload'), $fileName);   
            
        }

        //$document=$request->document;
        $document_name=$request->document_text;
        $i=0;
        if($request->hasFile('document'))
        {
        foreach($request->document as $doc)
        {
           
            $i++;
            $docName=time().$i.'.'.$doc->extension();
            $doc->move(public_path('upload/documents'), $docName);
            $document_name.=$docName.',';
        }
        }
        $project=DB::table('tbl_project')->where('id',$request->id)->update([
            'project_title'=>$project_title,
            'technology_used'=>$technology,
            'team_member_id'=>$team_member,
            'project_status'=>$status,
            'client_id'=>$client,
            'project_description'=>$description,
            'project_start_date'=>$sdate,
            'project_deliverable_day'=>$deliverable_days,
            'project_logo'=>$fileName,
            'project_document'=>$document_name,
        ]);
        return $project;
    }
    public function insertModule(Request $request)
    {
        $projectid=$request->projectid;
        $modulename=$request->module_name;
        $module_desc=$request->module_desc;
        $i=0;
        $document_name='';
        if($request->hasFile('module_document'))
        {
        foreach($request->module_document as $doc)
        {
            $i++;
            $docName=time().$i.'.'.$doc->extension();
            $doc->move(public_path('upload/documents'), $docName);
            $document_name.=$docName.',';
        }
        }
        $module=DB::table('tbl_project_module')->insert([
            'project_id'=>$projectid,
            'module_name'=>$modulename,
            'module_description'=>$module_desc,
            'module_document'=>$document_name
        ]);
        return $module;
    }
    public function updateModule(Request $request)
    {
        $projectid=$request->projectid;
        $modulename=$request->module_name;
        $module_desc=$request->module_desc;
        $i=0;
        $document_name=$request->module_doc;
        if($request->hasFile('module_document'))
        {
        foreach($request->module_document as $doc)
        {
            $i++;
            $docName=time().$i.'.'.$doc->extension();
            $doc->move(public_path('upload/documents'), $docName);
            $document_name.=$docName.',';
        }
        }
        $module=DB::table('tbl_project_module')->where('id',$request->id)->update([
            'project_id'=>$projectid,
            'module_name'=>$modulename,
            'module_description'=>$module_desc,
            'module_document'=>$document_name
        ]);
        return $module;
    }
    public function insertTask(Request $request)
    {
        $moduleid=$request->moduleid;
        $title=$request->task_name;
        $sdate=$request->sdate;
        $edate=$request->edate;
        $task=DB::table('tbl_project_task')->insertGetId([
            'module_id'=>$moduleid,
            'title'=>$title,
            'sdate'=>$sdate,
            'edate'=>$edate
        ]);
        return $task;
    }
    public function updateTask(Request $request)
    {
        $moduleid=$request->moduleid;
        $title=$request->task_name;
        $sdate=$request->sdate;
        $edate=$request->edate;
        $id=$request->id;
        $task=DB::table('tbl_project_task')->where('id',$id)->update([
            'title'=>$title,
            'sdate'=>$sdate,
            'edate'=>$edate
        ]);
        return $task;
    }
}
