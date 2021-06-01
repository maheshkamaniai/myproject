@extends('layouts.app')

@section('content')


@include('layouts.sidebar')
<?php
$page='Client';
$val_name = '';
$val_email = '';
$val_address = '';
if ($id != '') {
    $val_name = $data->company_name;
    $val_email = $data->company_email;
    $val_address = $data->company_address;
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

                                    <li class="nav-item"><a class="nav-link active" href="{{url('Client/add')}}"><i class="fa fa-plus"></i>Add Client</a></li>
                                    @if($id!='')
                                    <li class="nav-item"><a class="nav-link" href="{{url('Client/addContactPerson/'.$id)}}"><i class="fa fa-list-ul"></i> Contact Person</a></li>
                                    @endif
                                </ul>
                            </div>

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
                                    <h3 class="card-title">Add Client</h3>
                                    <div class="card-options ">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>

                                    </div>
                                </div>

                                <form class="card-body" method='post' action="{{url('Client/insert')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name='id' value='{{$id}}'>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name='company_name' value='{{$val_name}}' class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Company Email</label>
                                                <input type="email" name='company_email' value='{{$val_email}}' class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Company Address</label>
                                                <textarea id="address" name="address" class='form-control' rows="4" cols="50">{{$val_address}}
                                                </textarea>

                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
    
</div>
@endsection