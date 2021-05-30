@extends('layouts.app')
@section('content')
@include('layouts.sidebar')
<?php

$val_name = '';
$val_dob = '';
$val_gender = '';
$val_phone = '';
$val_email = '';
$val_img = '';
$val_id = '';
$val_Roal = '';
if ($id != '') {
    $val_name = $data->name;
    $val_email = $data->email;
    $val_dob = $data->dob;
    $val_phone = $data->phone;
    $val_img = $data->img;
    $val_gender = $data->gender;
    $val_id = $data->id;
    $val_Roal = $data->Roal;
}
?>

<div class="page">
  <div id="page_top" class="section-body top_dark">
    <div class="container-fluid">
      @include('layouts.tophead')
    </div>
  </div>
  <div class="section-body mt-3">
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-md-flex justify-content-between mb-2">
                <ul class="nav nav-tabs b-none">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-body">
    <div class="container">
      <div class="tab-content">
        <div class="tab-pane fade show  active" id="addnew" role="tabpanel">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Add Client</h3>
                </div>
                <form class="card-body" action="{{url('Team-Member/create')}}" method="post" enctype="multipart/form-data">
                  <div class="row ">
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?=$val_name?>">
                        <input type="hidden" name="id" class="form-control" value="<?=$val_id?>">
                      </div>
                    </div>
                    @csrf
                    <div class="col-md-3 col-sm-12">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input data-provide="datepicker" name="dob" data-date-autoclose="true" class="form-control " placeholder="Date of Birth" value="<?=$val_dob?>">
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                      <label>Roal</label>
                      <select class="form-control show-tick" name="Roal" >
                        <option value="">-- Roal --</option>
                        <option value="1" @if($val_Roal==1) selected @endif>Developer</option>
                        <option value="0" @if($val_Roal==0) selected @endif>Tester</option>
                      </select>
                    </div>

                    <div class="col-md-3 col-sm-12">
                      <label>Gender</label>
                      <select class="form-control show-tick" name="gender" >
                        <option value="">-- Gender --</option>
                        <option value="1" @if($val_gender==1) selected @endif>Male</option>
                        <option value="0" @if($val_gender==0) selected @endif>Female</option>
                      </select>
                    </div>
                 
                    <div class="col-md-4 col-sm-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?=$val_phone?>">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" class="form-control" value="<?=$val_email?>">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="form-group">
                        <label>Enter Your Profile</label>
                       
                        <input type="file" name="pimage" accept="image/png, image/gif, image/jpeg" class="form-control" />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="submit" class="btn btn-outline-secondary">Cancel</button>
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
  <div class="section-body">
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <a href="templateshub.net">MCA SEM 6</a>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right">
          
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
@endsection