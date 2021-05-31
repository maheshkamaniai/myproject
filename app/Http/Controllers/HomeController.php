<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $OnGoingdata=DB::table('tbl_project')->where('isdelete',0)->where('project_status',1)->count();
        $Upcommingdata=DB::table('tbl_project')->where('isdelete',0)->where('project_status',2)->count();
        $Closeddata=DB::table('tbl_project')->where('isdelete',0)->where('project_status',3)->count();
        $teammembers=DB::table('tbl_teammember')->where('isdelete',0)->count();
        

        $Summary = DB::table('tbl_project')
        ->where('tbl_project.isdelete',0)
        ->select('*')
        ->leftJoin('tbl_client','tbl_project.client_id', '=', 'tbl_client.id')
        ->get();

        // print_r($Summary);exit;

        return view('home',['OnGoingdata'=>$OnGoingdata,'Upcommingdata'=>$Upcommingdata,'Closeddata'=>$Closeddata,'teammembers'=>$teammembers,'Summary'=>$Summary]);
    }
}
