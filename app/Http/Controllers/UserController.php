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
        $UsersData=$this->Users->getUsersData();
        return view('user.index',['UsersData'=>$UsersData]);
    }
    public function add(Request $request)
    {
    
        $id=$request->id;
        $data='';
        if($id!='')
        {
            $data=DB::table('Users')->where('isdelete',0)->where('id',$id)->get()->first();
        }
        return view('user.add',['data'=>$data,'id'=>$id]);
        // return view('Usersr/add');
    }
    public function save(Request $request)
    {
      
       $id=$request->id;
        if($id!='')
        {
           
            if($this->Users->updateProject($request))
            {
                $request->session()->flash('success_msg', 'User Updated Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Update User');
            }


        }
        else{
            if($this->Users->insert($request))
            {
                $request->session()->flash('success_msg', 'User Added Successfully');
            }else{
                $request->session()->flash('error_msg', 'Failed To Add User');
            }

        }
       
       return redirect('user/');
    }
    
    public function delete($id)
    {
        $user=DB::table('Users')->where('id', $id)->update(['isdelete' => "1"]);
        if($user!='')
        {
            request()->session()->flash('success_msg', 'User Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete User');
        }

        return redirect()->back();
    }
 
}
