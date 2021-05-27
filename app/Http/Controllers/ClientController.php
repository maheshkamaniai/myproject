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
            $this->client->updateRecord($request);
            $message='Client updated Successfully';
        }
       else{
        $pid=$this->client->insert($request);
        $message='Client Added Successfully';

       }
      return redirect('Client/addContactPerson/'.$pid)->with($message);
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
            $this->client->updatePerson($request);
            return redirect('Client/addContactPerson/'.$id);   
           
        }
        else{
            $this->client->insertPerson($request);
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
 
     DB::table('tbl_client')
            ->where('id', $id)
            ->update(['isdelete' => "1"]);
   
        return redirect()->back();
    }

}
