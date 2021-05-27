
@extends('layouts.app')
@section('content')
<?php 
 $val_projecttitle='';
 $val_technology=array();
 $val_team=array();
 $val_project_status='';
 $val_client_id='';
 $val_project_logo='';
 $val_project_desc='';
 $val_project_sdate='';
 $val_deliverable_day='';
 $val_project_doc='';
if($id!='')
{
    $val_projecttitle=$projectdata->project_title;
    $val_technology=explode(',',$projectdata->technology_used);
    $val_team=explode(',',$projectdata->team_member_id);
    $val_project_status=$projectdata->project_status;
    $val_client_id=$projectdata->client_id;
    $val_project_logo=$projectdata->project_logo;
    $val_project_desc=$projectdata->project_description;
    $val_project_sdate=date('Y-m-d',strtotime($projectdata->project_start_date));
    $val_deliverable_day=$projectdata->project_deliverable_day;
    $val_project_doc=$projectdata->project_document;
}
?>
<div id="main_content">
    @include('layouts.sidebar')

<style>
 .btn-xs {
  padding: .25rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}

</style>

<div class="page">
    <div id="page_top" class="section-body top_dark">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">
                            <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i
                                    class="fa  fa-align-left"></i></a>
                            <h1 class="page-title">Project List</h1>

                        </div>
                        <div class="right">
                            <div class="input-icon xs-hide mr-4">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                            </div>
                            <div class="notification d-flex">
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/us.svg">English</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/es.svg">Spanish</a>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/jp.svg">japanese</a>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/bl.svg">France</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                            class="badge badge-success nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="right_chat list-unstyled w350 p-0">
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Donald Gardner</span>
                                                        <div class="message">It is a long established fact that a reader
                                                        </div>
                                                        <small>11 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Wendy Keen</span>
                                                        <div class="message">There are many variations of passages of
                                                            Lorem Ipsum</div>
                                                        <small>18 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Matt Rosales</span>
                                                        <div class="message">Contrary to popular belief, Lorem Ipsum is
                                                            not simply</div>
                                                        <small>27 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Phillip Smith</span>
                                                        <div class="message">It has roots in a piece of classical Latin
                                                            literature from 45 BC</div>
                                                        <small>33 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                            class="badge badge-primary nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="list-unstyled feeds_widget">
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-check"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-danger">Issue Fixed <small
                                                            class="float-right text-muted">11:05</small></h4>
                                                    <small>WE have fix all Design bug with Responsive</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-user"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">New User <small
                                                            class="float-right text-muted">10:45</small></h4>
                                                    <small>I feel great! Thanks team</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Feedback <small
                                                            class="float-right text-muted">Today</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-warning">Server Warning <small
                                                            class="float-right text-muted">10:50</small></h4>
                                                    <small>Your connection is not private</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Orders <small
                                                            class="float-right text-muted">11:35</small></h4>
                                                    <small>You received a new oder from Tina.</small>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="page-profile.php"><i
                                                class="dropdown-icon fa fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="app-setting.php"><i
                                                class="dropdown-icon fa fa-cog"></i> Settings</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><span
                                                class="float-right"><span class="badge badge-primary">6</span></span><i
                                                class="dropdown-icon fa fa-envelope"></i> Inbox</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fa fa-send"></i> Message</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fa fa-question-circle"></i> Need help?</a>
                                        <a class="dropdown-item" href="login.php"><i
                                                class="dropdown-icon fa fa-sign-out"></i> Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
   
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                        <ul class="nav nav-tabs page-header-tab">
                                <li class="nav-item"><a class="nav-link active"  href="#"><i class="fa fa-plus"></i> Add project</a></li>
                               <?php if($id !='')
                               { ?>
                                <li class="nav-item"><a class="nav-link"  href="<?=url('Project-List/modulelist/'.$id)?>"><i class="fa fa-plus"></i> Module List</a></li>
                                <?php }?>
                            </ul>
                            <div class="header-action d-md-flex">
                                <div class="input-group mr-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                  
                    <div class="tab-pane active" id="addnew" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method='post' action='{{url("Project-List/insert")}}' enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type='hidden' name='id' value='{{ $id}}'>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <lable>Project Title</lable>
                                                    <input type="text" name='project_title' value='<?= $val_projecttitle?>' class='form-control'>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <lable>Technologies Used</lable>
                                                    <select data-placeholder="select Technology..." name='technology[]' multiple class="form-control chosen-select" name="test">
                                                    <option value=''>--select--</option>
                                                    <option value='Laravel' @if(in_array('Laravel',$val_technology)) selected @endif>Laravel</option>
                                                    <option value='Angular' @if(in_array('Angular',$val_technology)) selected @endif>Angular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <lable>Team Members</lable>
                                                    <select data-placeholder="select Team Member..." name='team_member[]' multiple class="form-control chosen-select" name="test">
                                                    <option value=''>--select--</option>
                                                    <option value='1' @if(in_array(1,$val_team)) selected @endif>developer-1</option>
                                                    <option value='2' @if(in_array(2,$val_team)) selected @endif>developer-2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <lable>Status</lable>
                                                    <select class='form-control' name='status'>
                                                    <option value=''>--select--</option>
                                                    <option value='2' @if($val_project_status==2) selected @endif>Upcoming</option>
                                                    <option value='1' @if($val_project_status==1) selected @endif>OnGoing</option>
                                                    <option value='3' @if($val_project_status==3) selected @endif>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <lable>Client</lable>
                                                    <select data-placeholder="Begin typing a name to filter..." name='client' class='form-control'>
                                                    <option value=''>--select--</option>
                                                    @foreach($clientlist as $client)
                                                        <option value='{{$client->id}}' @if($val_client_id==$client->id) selected @endif>{{$client->company_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <lable>Project Logo</lable>
                                                <input type="file" name='logo'>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                <lable>Project Description</lable>
                                                    <textarea type="text" name='description' class="form-control" rows="4" placeholder='enter Description'>{{$val_project_desc}}</textarea>
                                                </div>
                                            </div>
                                            <input type='hidden' name='logotext' value='{{$val_project_logo}}'>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Project Start Date</lable>
                                                    <input type="date" name="sdate" value='{{ $val_project_sdate}}' class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Deliverable Days</lable>
                                                    <input type="number" name="deliverable_days" value='{{ $val_deliverable_day }}' class="form-control" placeholder="Enter Deliverable Day">
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-md-12">
                                            <lable>Documents File</lable>
                                                <input type="file" name="document[]" multiple>
                                            </div>
                                            <input type="hidden" name='document_text' value='{{ $val_project_doc}}'>
                                            <div class="col-lg-12 mt-3">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>            
        </div>

<div class="section-body">
@include('layouts.footar')
<script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
});
</script>
</div>
</div>
</div>

@endsection