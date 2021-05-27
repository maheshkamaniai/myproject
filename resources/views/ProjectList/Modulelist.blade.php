
@extends('layouts.app')
@section('content')
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
<?php
$val_modulename='';
$val_moduledesc='';
$val_module_doc='';
$button='Add';
if($id!='')
{
    $val_modulename=$moduledata->module_name;
    $val_moduledesc=$moduledata->module_description;
    $val_module_doc=$moduledata->module_document;
    $button='Update';
}
?>
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
                                <li class="nav-item"><a class="nav-link"  href="add_project.php"><i class="fa fa-plus"></i> Add project</a></li>
                                <li class="nav-item"><a class="nav-link active"  href="<?=url('Project-List/modulelist/'.$projectid)?>"><i class="fa fa-plus"></i> Module List</a></li>
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
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <form action='{{url("Project-List/modulelist/insert")}}' method='post' enctype="multipart/form-data">
                                <div class="row">
                                 
                                  {{ csrf_field() }}
                                  <input type='hidden' name='projectid' value='{{$projectid}}'>
                                  <input type='hidden' name='id' value='{{$id}}'>
                                  <input type='hidden' name='module_doc' value='{{$val_module_doc}}'>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Module Name</label>
                                            <input type="text" name='module_name' value='{{ $val_modulename}}' class="form-control" placeholder="Module Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Documents</label>
                                            <input type="file" name='module_document[]' class="form-control" multiple>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Module Description</label>
                                            <input type="text" name='module_desc' value='{{ $val_moduledesc}}' class="form-control" placeholder="Module Name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                    <button type="submit" class="btn btn-primary">{{ $button}}</button>
                                    </div>
                                 
                                </div>
                                </form>
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
                                       <table class="table">
                                           <tr class='thead-dark'>
                                               <th>#</th>
                                               <th>Module Name</th>
                                               <th>Module Description</th>
                                               <th>Action</th>
                                            </tr>
                                            <?php $i=1; foreach($modulelist as $module){ ?>
                                            <tr>
                                               <td><?= $i++?></td>
                                               <td><?=$module->module_name ?></td>
                                               <td><?= $module->module_description ?></td>
                                               <td>
                                               <div class=btn-group><a href='<?=url('Project-List/tasklist/'.$module->id)?>' class='btn btn-primary btn-xs'><span class='fa fa-cogs'></span></a>
                                                </div>
                                               <div class=btn-group><a href='<?=url('Project-List/modulelist/'.$projectid.'/'.$module->id)?>' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span></a>
                                                </div>
                                                <div class=btn-group><a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $module->id }}" data-action="#" onclick="deleteConfirmation({{$module->id}})"> <span class='fa fa-trash'></span></a></span></a>
                                                </div>
                                               </td>
                                            </tr>
                                            <?php }?>
                                       </table>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                window.location.href= "{{url('Project-List/deleteModule/')}}/" + id

            } else {
                swal({
                            title: "Cancelled",
                            text: "Your Records are safe :)",
                            type: "error",
                            confirmButtonClass: "btn-danger"
                        });
            }

        }, function (dismiss) {
            return false;
        })
    }
   
</script>
@endsection