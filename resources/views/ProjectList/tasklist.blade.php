@extends('layouts.app')
@section('content')
<?php 
$button='Add';
$title='';
$sdate='';
$edate='';
if($id!=''){
    $title=$taskdata->title;
    $sdate=$taskdata->sdate;
    $edate=$taskdata->edate;
    $button='Update';
}

?>
<div id="main_content">
    @include('layouts.sidebar')
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
                                <li class="nav-item"><a class="nav-link"  href=""><i class="fa fa-list"></i> Module</a></li>
                                <li class="nav-item"><a class="nav-link active" id="" data-toggle="tab" href="tasklist.php"><i class="fa fa-plus"></i> Add Task</a></li>
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
                               <form action='{{url("Project-List/tasklist/insert")}}' method='post' enctype='multipart/form-data'>
                                <div class="row">
                                {{ csrf_field() }}
                                  <input type='hidden' name='moduleid' value='{{$moduleid}}'>
                                  <input type='hidden' name='id' value='{{$id}}'>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Task Name</label>
                                            <input type="text" name='task_name' value='{{$title}}' class="form-control" placeholder="Task Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="date" name='sdate' value='{{$sdate}}' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" name='edate' value='{{$edate}}' class="form-control">
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
                                               <th>Task Name</th>
                                               <th>Start Date</th>
                                               <th>End Date</th>
                                               <th>Action</th>
                                            </tr>
                                            <?php $i=1;?>
                                            @foreach($tasklist as $task)
                                            <tr>
                                               <td>{{$i++}}</td>
                                               <td>{{$task->title}}</td>
                                               <td>{{$task->sdate}}</td>
                                               <td>{{$task->edate}}</td>
                                               <td>
                                              
                                               <div class=btn-group><a href='<?=url('Project-List/tasklist/'.$moduleid.'/'.$task->id)?>' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span></a>
                                                </div>
                                                <div class=btn-group><a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $task->id }}" data-action="#" onclick="deleteConfirmation({{$task->id}})"> <span class='fa fa-trash'></span></a></span></a>
                                                </div>
                                               </td>
                                            </tr>
                                            @endforeach
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
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="templateshub.net">Templates Hub</a>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="doc/index.php">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-icon">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
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

                window.location.href= "{{url('Project-List/deleteTask/')}}/" + id

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