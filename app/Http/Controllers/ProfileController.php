<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\user;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->user=new user();
    }

    public function index($id)
    {
        // exit;
        $data=DB::table('users')->where('id',$id)->get();
        return view('auth.profile',['data'=>$data]);
    }

    public function add(Request $request){
        $id=$request->id;
        $user = $request->user();
        $profile=DB::table('users')->where('id',$id)->update([
            'name'=>$request->user,
            'email'=>$request->email,
        ]);   

        if($request->pimg!=""){
            $filename = time() . '.' . $request->pimg->extension();
            $request->pimg->move(public_path('images'),$filename);
               $clientid=DB::table('users')->where('id',$id)->update([
                  'image'=> $filename,
               ]);
         }
        return redirect('profile/'.$id);
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
