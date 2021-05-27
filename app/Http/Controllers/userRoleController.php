<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class userRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      
        if(Auth::user()->name !='' &&Auth::user()->name != NULL){
          
            return view('/UserRole');
        }
        else{
            return redirect('/login');
        }
    }
    public function add()
    {
        $sidebar_menu = array(
			array("name" => "<span class='fa fa-home'></span> Dashboard", "role" => "dashboard", "role_type" => "view"),
			array("name" => "<span class='fa fa-motorcycle'></span> Project List", "role" => "project", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-gift'></span> Packing List", "role" => "packing_list", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-file'></span> Invoice", "role" => "invoice", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-user'></span> Customer", "role" => "customer", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-list-alt'></span> Item", "role" => "item", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-industry'></span> Company", "role" => "company_master", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-file-o'></span> Reports", "role" => "reports", "role_type" => "view"),
			array("name" => "&rarr;<span class='fa fa-file-o'></span> Item Report", "role" => "item_report", "role_type" => "view"),
			array("name" => "&rarr;<span class='fa fa-file-o'></span> Order Report", "role" => "order_report", "role_type" => "view"),
			array("name" => "&rarr;<span class='fa fa-file-o'></span> Dispatch Report", "role" => "dispatch_report", "role_type" => "view"),
			array("name" => "<span class='fa fa-gear'></span> Settings", "role" => "settings", "role_type" => "view"),
			array("name" => "&rarr;<span class='fa fa-gear'></span> Financial Year", "role" => "financial_year", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-gear'></span> Backup", "role" => "backup", "role_type" => "view,add"),
			array("name" => "&rarr;<span class='fa fa-globe'></span> Country Master", "role" => "country_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-rupee'></span> Currency Master", "role" => "currency_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-th-large '></span> Item Category", "role" => "item_category", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-anchor'></span> Port Master", "role" => "port_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-truck'></span> Transporter Master", "role" => "transporter_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='fa fa-gear'></span> Bank Master", "role" => "bank_master", "role_type" => "view,add,edit,delete"),

			array("name" => "<span class='glyphicon glyphicon-fire'></span> HRMS", "role" => "hrms", "role_type" => "view"),
			array("name" => "&rarr;<span class='fa fa-users'></span> Users", "role" => "user", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='glyphicon glyphicon-modal-window'></span> Role", "role" => "role", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='glyphicon glyphicon-equalizer'></span> Departments", "role" => "department_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='glyphicon glyphicon-equalizer'></span> Attendance", "role" => "attendance_master", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='glyphicon glyphicon-equalizer'></span> Staff Upaad / Jama", "role" => "staff_account", "role_type" => "view,add,edit,delete"),
			array("name" => "&rarr;<span class='glyphicon glyphicon-equalizer'></span> Staff Salary Report", "role" => "staff_salary_report", "role_type" => "view,add,edit,delete"),
			
			

			
			
		);

		define("MENU_LIST_JSON", json_encode($sidebar_menu));

		try {
	
            return view('/UserRole');
		} catch (Exception $e) {
			echo $e;
		}
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
