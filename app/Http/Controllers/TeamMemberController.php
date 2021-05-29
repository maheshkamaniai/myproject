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
    public function add(Request $request)
    {
        $id=$request->id;
        $data='';
        if($id!='')
        {
            $data=DB::table('tbl_teammember')->where('isdelete',0)->where('id',$id)->get()->first();
        }
        return view('TeamMember.add',['data'=>$data,'id'=>$id]);
        // return view('TeamMember/add');
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
    
    public function delete($id)
    {
        DB::table('tbl_teammember')->where('id', $id)->update(['isdelete' => "1"]);
        return redirect()->back();
    }
 
}
