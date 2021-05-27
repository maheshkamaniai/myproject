@extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
    @include('layouts.tophead')
        <div class="section-body mt-3">
        <form action = "create" method = "post">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                      
                            <div class="card">
                                <div class="card-body">
                                    <div class="row clearfix">
                                        
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <lable>Project Title</lable>
                                                @csrf
                                                <input type="text" class="form-control" name="project_title"
                                                    placeholder="Enter Project Title">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <lable>Front End</lable>
                                                <select class='form-control' name="frontend">
                                                    <option>Laravel</option>
                                                    <option>Angular</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <lable>Back End</lable>
                                                <select class='form-control' name="technology_used">
                                                    <option>Node js</option>
                                                    <option>Mysql</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <lable>Project Description</lable>
                                                <textarea type="text" class="form-control" name="description"
                                                    rows="4">Enter Description</textarea>
                                            </div>
                                        </div>	

                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <lable>Project Start Date</lable>
                                                <input type="date" class="form-control" name="start_date" value="">
                                            </div>
                                        </div>
                                     
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <lable>Deliverable Days</lable>
                                                <input type="number" class="form-control" name="deliverable_days_no"
                                                    placeholder="Enter Deliverable Day">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <lable>Documents File</lable>
                                            <input type="file" class="form-control" multiple="" name="documents">
                                            <!-- dropify -->
                                        </div>
                                      
                                        <div class="col-lg-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            <button type="submit" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</form>
    </div>
    <div class="section-body">
        @include('layouts.footar')
    </div>
</div>
</div>
<!-- <script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="assets/js/core.js"></script> -->
</body>

</html>
@endsection