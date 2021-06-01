<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Users;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Users=new Users();
    }

    public function index()
    {
        // $Users=$this->Users->getUsersData();
        return view('user.index');
    }
    public function add(Request $request)
    {
    
        // $id=$request->id;
        // $data='';
        // if($id!='')
        // {
        //     $data=DB::table('tbl_Usersr')->where('isdelete',0)->where('id',$id)->get()->first();
        // }
        return view('user.add');
        // return view('Usersr/add');
    }
    public function save(Request $request)
    {
      
       $id=$request->id;
        if($id!='')
        {
           
            $this->Users->updateProject($request);
        }
        else{
            $projectid=$this->Users->insert($request);
        }
       
       return redirect('Team-Member/');
    }
    
    public function delete($id)
    {
        DB::table('tbl_Usersr')->where('id', $id)->update(['isdelete' => "1"]);
        return redirect()->back();
    }
 
}
