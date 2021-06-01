@extends('layouts.app')

@section('content')


@include('layouts.sidebar')
<?php
$page='Client';
$val_name = '';
$val_email = '';
$val_mobile = '';
$val_status = '';
if ($subid != '') {
    $val_name = $persondetail->name;
    $val_email = $persondetail->email;
    $val_mobile = $persondetail->mobile;
    $val_status = $persondetail->status;
    $operation = 'edit';
}
?>

<div class="page">
@include('layouts.tophead')
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex justify-content-between mb-2">
                                <ul class="nav nav-tabs b-none">

                                    <li class="nav-item"><a class="nav-link " href="{{url('Client/add/'.$id)}}"><i class="fa fa-plus"></i>Add Client</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="{{url('Client/addContactPerson/'.$id)}}"><i class="fa fa-list-ul"></i> Contact Person</a></li>
                                </ul>
                            </div>
                            <form class="card-body" method='post' action="{{url('Client/insertPerson/')}}">
                                {{ csrf_field() }}
                                <input type='hidden' name='id' value='{{$id}}'>
                                <input type='hidden' name='subid' value='{{$subid}}'>

                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name='name' value='<?= $val_name ?>' id='name' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id='email' name='email' value='<?= $val_email ?>' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Contact No.</label>
                                            <input type="text" id='number' name='number' value='<?= $val_mobile ?>' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name='status' class='form-control'>
                                                <option value='0' @if($val_status==0) selected @endif>primary</option>
                                                <option value='1' @if($val_status==1) selected @endif>Secondary</option>
                                                <option value='2' @if($val_status==2) selected @endif>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            @if(isset($operation))
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            @else
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="container-fluid">
            <div class="tab-content">

                <div class="tab-pane fade show active" id="addnew" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Contact Person Detail</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>

                                    </div>
                                </div>
                                <table class='table'>
                                    <tr class="thead-dark">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    foreach ($persondata as $post) {
                                        if ($post->status == 0) {
                                            $status = " <span class='badge badge-primary'>Primary</span>";
                                        } elseif ($post->status == 1) {
                                            $status = "<span class='badge badge-warning'>Secondary</span>";
                                        } ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $post->name ?></td>
                                            <td><?= $post->email ?></td>
                                            <td><?= $post->mobile ?></td>
                                            <td><?= $status ?></td>
                                            <td>
                                                <div class=btn-group><a href='<?= url('Client/addContactPerson/' . $id . "/" . $post->id) ?>' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span></a>
                                                </div>
                                                <div class=btn-group><a href='javascript:void(0)' class='btn btn-danger btn-xs removercd' data-id='<?= $post->id ?>' onclick="deleteConfirmation({{$post->id}})"><span class='fa fa-trash'></span></a>
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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
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

                window.location.href = "{{url('Client/deletePerson/')}}/" + id

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
<script>
    $(document).on('click', '.removercd', function() {
        alert('hello');
        var id = $(this).data('id');
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Records!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: true,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {

                    window.location.href = '<?= url('Settings/CustomerManagement/deletePerson/' . $id . '/') ?>' + id;

                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your Records are safe :)",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                }
            });
    });
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core    
        Core.init();

        // Init Demo JS  
        Demo.init();

        // Init Select2 - Basic Single
        $(".select2-single").select2();

        // Init DateRange plugin
        //$('.datetimepicker').daterangepicker({
        $('.datetimepicker').datepicker({
            dateFormat: 'dd/mm/yy'
        });



    });
</script>
@endsection