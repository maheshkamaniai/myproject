@extends('layouts.app')
@section('content')
<?php $page='ProjectList'; ?>
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
    $val_modulename = '';
    $val_moduledesc = '';
    $val_module_doc = '';
    $button = 'Add';
    if ($id != '') {
        $val_modulename = $moduledata->module_name;
        $val_moduledesc = $moduledata->module_description;
        $val_module_doc = $moduledata->module_document;
        $button = 'Update';
    }
    ?>
    <div class="page">
    @include('layouts.tophead')
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="nav nav-tabs page-header-tab">
                                <li class="nav-item"><a class="nav-link" href="add_project.php"><i class="fa fa-plus"></i> Add project</a></li>
                                <li class="nav-item"><a class="nav-link active" href="<?= url('Project-List/modulelist/' . $projectid) ?>"><i class="fa fa-plus"></i> Module List</a></li>
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
                                            <?php $i = 1;
                                            foreach ($modulelist as $module) { ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $module->module_name ?></td>
                                                    <td><?= $module->module_description ?></td>
                                                    <td>
                                                        <div class=btn-group><a href='<?= url('Project-List/tasklist/' . $module->id) ?>' class='btn btn-primary btn-xs'><span class='fa fa-cogs'></span></a>
                                                        </div>
                                                        <div class=btn-group><a href='<?= url('Project-List/modulelist/' . $projectid . '/' . $module->id) ?>' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span></a>
                                                        </div>
                                                        <div class=btn-group><a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $module->id }}" data-action="#" onclick="deleteConfirmation({{$module->id}})"> <span class='fa fa-trash'></span></a></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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
        }).then(function(e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                window.location.href = "{{url('Project-List/deleteModule/')}}/" + id

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