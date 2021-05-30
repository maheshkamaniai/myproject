<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Taskboard;

class TaskboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Taskboard=new Taskboard();
    }

    public function index()
    {
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
            
            $Taskboard=$this->Taskboard->getTaskboardData();
            return view('Taskboard/index',['Taskboard'=>$Taskboard]);
        }
        else{
            return redirect('/login');
        }
            
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function addmodule($id)
    {
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
            $moduledata=$this->Taskboard->getModuleData();
            $taskdata=$this->Taskboard->getTasklist($id);
            return view('Taskboard/module',['id'=>$id,'moduledata'=>$moduledata,'taskdata'=>$taskdata]);
        }
        else{
            return redirect('/login');
        }
    }

    public function addtask(Request $request)
    {
       
        $id=$request->pid;
        // print_r($taskid);
        // exit;
            $taskid=$this->Taskboard->inserttask($request);
            $message='Project List Added Successfully';
        
        return redirect('Taskboard/addmodule/'.$id)->with($message);
    }
}