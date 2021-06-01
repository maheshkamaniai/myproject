<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Client;
use DB;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->client=new Client();
    }

    public function index()
    {
      
        $clientdata=$this->client->getClientData();
        $persondata=$this->client->getPersondata();
        return view('Client.index',['clientdata'=>$clientdata,'persondata'=>$persondata]);
      
    }
  
    public function create()
    {
        //
    }
    public function add(Request $request,$id=''){
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
           $id=$request->id;
           $data=DB::table('tbl_client')->where('id',$id)->get()->first();
            return view('Client.add',['data'=>$data,'id'=>$id]);
        }
        else{
            return redirect('/login');
        }
    }
    public function insert(Request $request)
    {
        $pid=$request->id;
        if($pid!=''){
            if($this->client->updateRecord($request)){    
            request()->session()->flash('success_msg', 'Client Updated Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Update Client');
            
            }
        }
       else{
        $pid=$this->client->insert($request);
        if($pid!='')
        {
            request()->session()->flash('success_msg', 'Client Added Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Add Client');
            
            }
       }
      return redirect('Client/addContactPerson/'.$pid);
        //  }
        // else{
        //     $message="Client Allready Exists";
        //     return redirect(back()->with($message));
        // }



    }
    public function addContactPerson(Request $request){
        $id=$request->id;
        $subid=$request->subid;
        $persondata=DB::table('tbl_client_person')->where('client_id',$id)->where('isdelete',0)->get();
        $persondetail=DB::table('tbl_client_person')->where('id',$subid)->where('isdelete',0)->get()->first();
        return view("Client.addContactPerson",['id'=>$id,'subid'=>$subid,'persondata'=>$persondata,'persondetail'=>$persondetail]);
    }
    public function insertPerson(Request $request)
    {
        $subid=$request->subid;
        $id=$request->id;
        if($subid!='')
        {
            if($this->client->updatePerson($request))
            {
                request()->session()->flash('success_msg', 'Contact Person Updated Successfully');
            }else{
                request()->session()->flash('error_msg', 'Failed To Update Contact Person');
                
                }   
            
            return redirect('Client/addContactPerson/'.$id);   
           
        }
        else{
            if($this->client->insertPerson($request))
            {
                
                request()->session()->flash('success_msg', 'Contact Person Added Successfully');
            }else{
                request()->session()->flash('error_msg', 'Failed To Add Contact Person');
                
                }   
            return redirect()->back();
        }
      
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

   
    public function destroy($id)
    {
 
     $client=DB::table('tbl_client')
            ->where('id', $id)
            ->update(['isdelete' => "1"]);
        if($client!=''){
            request()->session()->flash('success_msg', 'Client Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete Client');
        }   
        return redirect()->back();
    }

    
    public function deletePerson($id)
    {
     $client=DB::table('tbl_client_person')
            ->where('id', $id)
            ->update(['isdelete' => "1"]);
        if($client!=''){
            request()->session()->flash('success_msg', 'Contect Person Deleted Successfully');
        }else{
            request()->session()->flash('error_msg', 'Failed To Delete Contect Person');
        }   
        return redirect()->back();
    }
}
