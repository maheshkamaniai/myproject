@extends('layouts.app')
@section('content')
@include('layouts.sidebar')
<?php $page='TeamMember'; ?>
<?php
  // print_r($TeamMembe);exit;
  ?>
<div class="page">
      @include('layouts.tophead')
  <div class="section-body mt-3">
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-lg-12">
              <div class="d-md-flex justify-content-between mb-2">
                <ul class="nav nav-tabs b-none">
                </ul>
                <A href="{{url('Team-Member/add')}}"><button class="btn btn-primary">add </button></A>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-body">
    <div class="container-fluid">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="list" role="tabpanel">
          <div class="row clearfix">
            <?php
              foreach ($TeamMembe as $post) {?>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="card">

                <div class="card-body text-center ribbon">
                  <div class="ribbon-box green"><?php if($post->Roal==1){ 
                    echo "Developer"; 
                  }else{ 
                    echo "Tester"; 
                  }?></div>

                  <div class="pull-right">
                  <a href='<?= url('Team-Member/add/' . $post->id) ?>'>
                      <span class="btn btn-primary btn-xs"><i class='fa fa-pencil'></i></span>
                  </a>
                    <a class="btn btn-danger btn-flat btn-xs remove-user" data-id="{{ $post->id }}" data-action="#" onclick="deleteConfirmation({{ $post->id }})"> <span class='fa fa-trash'></span></a>
                    </a>
                  </div>

                  
                  <img class="rounded-circle img-thumbnail w100" src="pimage/<?=$post->img?>" alt=""
                    style="margin-top:20px;margin-left: 77px; height: auto; height: 96px;">
                  <h6 class="mt-3 mb-0">
                    <?=$post->name?>
                  </h6>
                  <span>
                    <?=$post->email?>
                  </span><br>
                  <span>
                    <?=$post->phone?>
                  </span><br>
                  <!-- <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->
                  <!-- <button class="btn btn-default btn-sm">View Profile</button>
                    <button class="btn btn-default btn-sm">Message</button> -->
                  <!-- <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                      <label class="mb-0">Project</label>
                      <h4 class="font-18">07</h4>
                    </div>
                    <div class="col-6">
                      <label class="mb-0">Deal</label>
                      <h4 class="font-18">$2,510</h4>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
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

        window.location.href = "{{url('Team-Member/deleteProject/')}}/" + id

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