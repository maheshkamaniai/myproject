@extends('layouts.app')
@section('content')
<?php $page='Client'; ?>
    @include('layouts.sidebar')
    <div class="page">
    @include('layouts.tophead')
      
       
    
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="addnew" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Client List</h3>
                                        <div class="card-options ">
                                   

                                        <a class="btn btn-primary pull-right"  href="{{url('Client/add')}}" >Add New</a>
                                            
                                        </div>
                                    </div>
                                    <table class='table'>
                                        <tr class='thead-dark'>
                                            <th>#</th>
                                            <th>Company Name</th>
                                            <th>Email</th>
                                            <th>Contact Person</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        foreach ($clientdata as $post) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $post->company_name ?></td>
                                            <td><?= $post->company_email ?></td>
                                            <td><?php foreach ($persondata as $data) {
                                                if ($post->id == $data->client_id) {
                                                    echo $data->name;
                                                }
                                            } ?></td>
                                            <td><?= $post->company_address ?></td>
                                            <td>
                                                <div class=btn-group>
                                                    <a href='<?= url('Client/add/' . $post->id) ?>' class='btn btn-info btn-xs'>
                                                        <span class='fa fa-pencil'></span>
                                                    </a>
                                                </div>
                                                <div class=btn-group>
                                                <a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $post->id }}" data-action="#" onclick="deleteConfirmation({{$post->id}})"> <span class='fa fa-trash'></span></a>
                                                    </a>
                                                </div>
                                                
                                                
                                            </td>
                                        </tr>
                                       <?php }
                                        ?>
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
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                window.location.href= "{{url('Client/destroy/')}}/" + id

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
