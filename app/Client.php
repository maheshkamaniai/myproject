<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use DB;

class Client extends Model
{
    //
    public function insert(Request $request)
    {
        $company_name=$request->company_name;
        $company_email=$request->company_email;
        $company_address=$request->address;
      
            $clientid=DB::table('tbl_client')->insertGetId([
                'company_name'=>$company_name,
                'company_email'=>$company_email,
                'company_address'=>$company_address,
                'created_by'=>Auth::user()->id,
            ]);
        
        return $clientid;
    }
    public function updateRecord(Request $request)
    {
        $company_name=$request->company_name;
        $company_email=$request->company_email;
        $company_address=$request->address;
        $id=$request->id;
      
            $clientid=DB::table('tbl_client')->where('id',$id)->update([
                'company_name'=>$company_name,
                'company_email'=>$company_email,
                'company_address'=>$company_address,
                'updated_by'=>Auth::user()->id,
            ]);
    }
    public function insertPerson(Request $request)
    {
        $clientid=$request->id;
        $name=$request->name;
        $email=$request->email;
        $number=$request->number;
        $status=$request->status;
        if($status==0){
            DB::table('tbl_client_person')->where('client_id',$clientid)->where('isdelete',0)->where('status',0)->update([
                'status'=>1
            ]);
        }
        DB::table('tbl_client_person')->insert([
            'client_id'=>$clientid,
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$number,
            'status'=>$status,
        ]);
    }
    public function updatePerson(Request $request)
    {
        $clientid=$request->id;
        $subid=$request->subid;
        $name=$request->name;
        $email=$request->email;
        $number=$request->number;
        $status=$request->status;
        if($status==0){
            DB::table('tbl_client_person')->where('client_id',$clientid)->where('isdelete',0)->where('status',0)->update([
                'status'=>1
            ]);
        }
        DB::table('tbl_client_person')->where('id',$subid)->update([
            
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$number,
            'status'=>$status,
        ]);

    }
    public function getClientData()
    {
        $clientdata=DB::table('tbl_client')->where('isdelete',0)->get();
        return $clientdata;
    }
    public function getPersondata()
    {
        $persondata=DB::table('tbl_client_person')->where('isdelete',0)->where('status',0)->get();
        return $persondata;
    }
}
