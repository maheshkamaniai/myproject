@extends('layouts.app')
@section('content')

<?php

    $val_name = $data[0]->name;
    $val_email = $data[0]->email;
    $val_image = $data[0]->image;
    $val_id = $data[0]->id;

?>

<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
        @include('layouts.tophead')
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class='row col-md-12' style='margin-top:10px'>
                            <div class="col-xl-12 col-lg-4 col-md-6">
                                <div class="card">
                                    <form action="{{url('addprofile')}}" method="POST" enctype="multipart/form-data">
                                        <div class="card-body ribbon">
                                            <div class="col-md-6 col-sm-12">
                                                @csrf
                                                <img id="blah" class="rounded-circle img-thumbnail w100"
                                                    src="../images/<?php echo $val_image ?>" alt="" style="width: 150px; height: 150px;">

                                                   
                                                <h6 class="mt-3 mb-0"></h6>
                                                <!-- <span>jason-porter@info.com</span> -->
                                            </div>
                                                  
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input accept="image/*" name="pimg" type='file' id="imgInp" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="hidden" name="id" class="form-control" value="<?=$val_id?>">
                                                    <input type="text" name="user" class="form-control" value="<?=$val_name?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" value="<?=$val_email?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
</div>
<script>
  imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>

<div class="section-body">
    @include('layouts.footar')
</div>


</body>

</html>
@endsection