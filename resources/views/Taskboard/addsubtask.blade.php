@extends('layouts.app')
@section('content')
<?php $page='Taskboard'; ?>
<div id="main_content">
    @include('layouts.sidebar')
 
    <!-- Page Loader -->
    <div class="page">
        @include('layouts.tophead')
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="card-body">
                        <form method="POST" action="{{ URL('Taskboard/addsubtaskname/') }}" >
                        <div class="row">
                            @csrf
                                <div class="col-lg-10 col-md-4 col-sm-6">
                                    <div class="input-group">
                                        <input type="text" name="taskname" class="form-control" placeholder="Task Name" required>
                                        <input type="hidden" name="mid" value="<?=$id?>">
                                    </div>
                                </div>
                                
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                   <button class="btn btn-primary btn-block" type="submit">Add</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                   {{-- ------------------------------------------------------------------------ --}}
                   <div class="card">
                    <div class="card-body">
                        <div class="table-responsive todo_list">
                            <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                              
                                <tbody>
                                    <?php // print_r($moduledata);
                                    foreach ($subtaskdata as $post) { ?>
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input check" data-id='{{ $post->id }}' name="example-checkbox1" value="option1" <?php echo ($post->status==1 ? 'checked' : '');?>>
                                                <span class="custom-control-label"><?=$post->taskname?></span>
                                            </label>
                                        </td>
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                   {{-- ------------------------------------------------------------------------ --}}
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
        }).then(function (e) {

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

        }, function (dismiss) {
            return false;
        })
    }
</script>
<script>
    function toggleBox(x) {
        x.classList.toggle('opened');
    }
    
</script>
<script>
 $(".check").change(function() {
    var ischecked= $(this).attr('data-id');
    $.ajax({
                    type: "POST",
                    url: "{{ url('Taskboard/updateTask') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "taskid":ischecked,
                    },
                    success: function(data) {
                    }
                });
});
</script>
@endsection