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
    <div class="page">
    @include('layouts.tophead')
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center pull-right">

                            <div class="header-action d-md-flex">
                                <div class="input-group mr-2" style="padding-top:10px">
                                    <a href='{{url("Project-List/add")}}' class="btn btn-primary btn-sm">Add new</a>
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

                    <div class="tab-pan">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Project Name</th>
                                                        <th>Owner</th>
                                                        <th class="w100">Duration</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($projectlist as $project) { ?>
                                                        <tr>
                                                            <td>{{ $project->project_title}}</td>
                                                            <td>{{ $project->company_name}}</td>
                                                            <td>{{ $project->project_deliverable_day}}</td>
                                                            <td>
                                                                <a href='<?= url('Project-List/add/' . $project->id) ?>'>
                                                                    <span class="btn btn-primary btn-xs"><i class='fa fa-pencil'></i></span>
                                                                </a> <a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $project->id }}" data-action="#" onclick="deleteConfirmation({{$project->id}})"> <span class='fa fa-trash'></span></a>
                                                                </a>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
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

<div class="section-body">


    @include('layouts.footar')
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

                window.location.href = "{{url('Project-List/deleteProject/')}}/" + id

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