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

    <!-- Page Loader -->
    <div class="page">
    @include('layouts.tophead')

        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                        <div class="row">
                            <?php foreach ($projectlist as $project) { ?>
                                <div class="col-lg-6 col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ $project->project_title }}</h3>
                                            <div class="card-options">
                                                <div class='pull-right'>
                                                    <a href='<?= url('Project-List/modulelist/' . $project->id) ?>'>
                                                        <span class="btn btn-secondary btn-xs"><i class='fa fa-tasks'></i></span>
                                                    </a>
                                                    <a href='<?= url('Project-List/add/' . $project->id) ?>'>
                                                        <span class="btn btn-primary btn-xs"><i class='fa fa-pencil'></i></span>
                                                    </a>
                                                    <a href='projectsummary.php'>
                                                        <span class="btn btn-warning btn-xs"><i class='fa fa-eye'></i></span>
                                                    </a>
                                                    <a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $project->id }}" data-action="#" onclick="deleteConfirmation({{$project->id}})"> <span class='fa fa-trash'></span></a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $project->project_description}}</p>
                                            <div class="row">
                                                <div class="col-5 py-1"><strong>Technologies Used:</strong></div>
                                                <div class="col-7 py-1">{{ $project->technology_used}}</div>
                                                <div class="col-5 py-1"><strong>Total Modules:</strong></div>
                                                <div class="col-7 py-1"><strong>23</strong></div>

                                                <div class="col-5 py-1"><strong>Total Task:</strong></div>
                                                <div class="col-7 py-1"><strong>30</strong></div>
                                                <div class="col-5 py-1"><strong>Team:</strong></div>
                                                <div class="col-7 py-1">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name" />
                                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name" />
                                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name" />
                                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name" />
                                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name" />
                                                        <span class="avatar avatar-sm">+8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="clearfix">
                                                <div class="float-left"><strong>15%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="Project-UpComing" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Owner</th>
                                                        <th>Milestone</th>
                                                        <th class="w100">Work</th>
                                                        <th class="w100">Duration</th>
                                                        <th>Priority</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar1.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Isidore Dilao</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar2.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Maricel Villalon</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>68:00</span></td>
                                                        <td>105:0 hrs</td>
                                                        <td><span class="text-danger">High</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar3.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Theresa Wright</span></td>
                                                        <td>Approval site</td>
                                                        <td><span>74:00</span></td>
                                                        <td>89:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar4.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Jason Porter</span></td>
                                                        <td>Final touch up</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar5.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Annelyn Mercado</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar6.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Sean Black</span></td>
                                                        <td>Basement slab preparation</td>
                                                        <td><span>88:00</span></td>
                                                        <td>88:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar7.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Scott Ortega</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>56:00</span></td>
                                                        <td>125:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar8.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>David Wallace</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
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