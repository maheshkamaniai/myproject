@extends('layouts.app')
@section('content')
@include('layouts.sidebar')
<?php $page='User'; ?>
<?php

$val_name = '';
$val_email = '';
$val_roal="";
$val_image="";
$val_id ="";
if ($id != '') {
    $val_name = $data->name;
    $val_email = $data->email;
    $val_id = $data->id;
    $val_roal = $data->roal;
    $val_image = $data->image;
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
                        <input type="hidden" name="id" value="<?=$val_id?>">
                        <input id="name" type="text"
                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                        value="{{ old('name') }} <?=$val_name?>" required autofocus>
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
                                value="{{ old('email') }}<?=$val_email?>" required>

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
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="<?=$val_email?>"
                                required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                    </div>

                  


                    <div class="col-md-4 col-sm-12">
              
                        <label for="password-confirm" class="form-label">Role </label>
                        <select class="form-control show-tick" name="roal">
                            <option value="">-- Roal --</option>
                            <option value="0" @if($val_roal==1) selected @endif>Admin</option>
                            <option value="1" @if($val_roal==0) selected @endif>Developer</option>
                        </select>
                    </div>
                 
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Profile</label>
                        <input type="file" name="profile" type='file' id="imgInp" accept="image/png, image/gif, image/jpeg" class="form-control">
                      </div>
                    </div>
                  <?php  if($val_image!=''){
                    ?>

                  
                    <div class="col-md-6 col-sm-12">
                      <img id="blah" class="rounded-circle img-thumbnail w100" src="{{url( '/profile/'.$val_image)}}" alt="" style="width: 150px; height: 150px;">
                      <h6 class="mt-3 mb-0"></h6>
                      <!-- <span>jason-porter@info.com</span> -->
                  </div>
<?php } ?>
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
      
      <script>
        imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
      </script>
@endsection