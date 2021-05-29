<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\TeamMembe;

use DB;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->TeamMembe=new TeamMembe();
    }

    public function index()
    {
        $TeamMembe=$this->TeamMembe->getTeamMembeData();
      
        return view('TeamMember.index',['TeamMembe'=>$TeamMembe]);
    }
    public function add()
    {
       
            return view('TeamMember/add');
     
    }
    public function insert(Request $request)
    {
      
        $id=$request->id;
        if($id!='')
        {
            $this->TeamMembe->updateProject($request);
        }
        else{
            $projectid=$this->TeamMembe->insert($request);
        }
       
       return redirect('Team-Member/');
    }
    
 
}
