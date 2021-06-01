@extends('layouts.app')
@section('content')
@include('layouts.sidebar')
<?php $page='User'; ?>
<?php

$val_name = '';
$val_dob = '';
$val_gender = '';
$val_phone = '';
$val_email = '';
$val_img = '';
$val_id = '';
$val_Roal = '';
// if ($id != '') {
//     $val_name = $data->name;
//     $val_email = $data->email;
//     $val_dob = $data->dob;
//     $val_phone = $data->phone;
//     $val_img = $data->img;
//     $val_gender = $data->gender;
//     $val_id = $data->id;
//     $val_Roal = $data->Roal;
// }
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
                  <h3 class="card-title">Add User</h3>
                </div>



                
                <form class="card-body" enctype="multipart/form-data" method="post" action="{{ url('user/save') }}"
               >
                  <div class="row ">
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input id="name" type="text"
                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                        value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                      </div>
                    </div>
                    @csrf
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                                <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                            <label class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <?php $val_Roal=""; ?>
                        <label for="password-confirm" class="form-label">Role </label>
                        <select class="form-control show-tick" name="roal">
                            <option value="">-- Roal --</option>
                            <option value="0" @if($val_Roal==1) selected @endif>Admin</option>
                            <option value="1" @if($val_Roal==0) selected @endif>Developer</option>
                        </select>
                    </div>
                 
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Profile</label>
                        <input type="file" name="profile" accept="image/png, image/gif, image/jpeg" class="form-control">
                      </div>
                    </div>
                  
                    {{-- <div class="col-md-4 col-sm-12">
                      <div class="form-group">
                        <label>Enter Your Profile</label>
                        <input type="file" name="pimage" accept="image/png, image/gif, image/jpeg" class="form-control" />
                      </div>
                    </div> --}}
                    <div class="col-sm-12">
                       
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                          
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