@extends('layouts.app')
@section('content')
<?php $page='ProjectList'; ?>
<?php
$button = 'Add';
$title = '';
$sdate = '';
$edate = '';
if ($id != '') {
    $title = $taskdata->title;
    $sdate = $taskdata->sdate;
    $edate = $taskdata->edate;
    $button = 'Update';
}

?>
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
    @include('layouts.tophead')
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="nav nav-tabs page-header-tab">
                                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-list"></i> Module</a></li>
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
                                            <?php $i = 1; ?>
                                            @foreach($tasklist as $task)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$task->title}}</td>
                                                <td>{{$task->sdate}}</td>
                                                <td>{{$task->edate}}</td>
                                                <td>

                                                    <div class=btn-group><a href='<?= url('Project-List/tasklist/' . $moduleid . '/' . $task->id) ?>' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span></a>
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
        }).then(function(e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                window.location.href = "{{url('Project-List/deleteTask/')}}/" + id

            } else {
                swal({
                    title: "Cancelled",
                    text: "Your Records are safe :)",
                    type: "error",
                    confirmButtonClass: "btn-danger"
                });
            }

        }, function(dismiss) {
            return false;
        })
    }
</script>
@endsection