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
           
            if($this->TeamMembe->updateProject($request))
            {
            request()->session()->flash('success_msg', 'Team Member Updated Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Update Team Member');
            }
        }
        else{
            if($this->TeamMembe->insert($request))
            {
                
            request()->session()->flash('success_msg', 'Team Member Added Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Add Team Member');
            }
        }
       
       return redirect('Team-Member/');
    }
    
    public function delete($id)
    {
        $team=DB::table('tbl_teammember')->where('id', $id)->update(['isdelete' => "1"]);
        if($team!=''){
        request()->session()->flash('success_msg', 'Team Member Deleted Successfully');
    }else{
        request()->session()->flash('error_msg', 'Failed To Delete Team Member');
        }
        return redirect()->back();
    }
 
}
