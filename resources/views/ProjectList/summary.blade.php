@extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <style>
        .btn-xs {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }

        .box {
            /* max-width: 500px; */
            display: block;
            /* margin: 100px auto; */
        }

        .content {
            background-color: #bdc3c7;
            overflow: hidden;
            max-height: 0;
            transition: max-height .10s ease-out;
        }

        .content p {
            text-align: center;
            padding: 10px 20px;
        }

        .title {
            text-align: center;
            font-size: 20px;
            padding: 10px 15px;
            color: white;
            background-color: rgba(52, 73, 94, 1.0);
        }

        .title:hover {
            cursor: pointer;
            background: linear-gradient(to left, rgba(44, 62, 80, 1.0), rgba(52, 73, 94, 1.0), rgba(44, 62, 80, 1.0));
        }

        .title:not(.not-border) {
            border-top: solid white 1px;
        }

        .opened+.content {
            max-height: 800px;
            transition: max-height 1.2s ease-out;
        }

        .arrow {
            position: absolute;
            padding: 0;
            margin: 0;
            border-top: 10px solid transparent;
            border-right: 0 solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid white;
            transition: .6s ease-in;
        }

        .opened .arrow {
            transform: rotate(90deg);
        }
    </style>
    <!-- Page Loader -->
    <div class="page">
        @include('layouts.tophead')
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                        <!-- <div class="row"> -->
                            <?php foreach ($projectmodule as $module) { ?>
                           
                            <div class="box">

                                <div class="title not-border" onclick="toggleBox(this)">
                                    <div class="arrow"></div>
                                    <div class="title-text">{{ $module->module_name }}</div>
                                </div>
                                <div class="content">
                                    <div class="table-responsive todo_list">
                                        <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                      
                                            <tbody>
                                                <?php foreach ($taskdata as $task) { 
                                                    if($module->id==$task->module_id){?>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input chack" data-id='<?= $task->id?>' name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">
                                                                <?php echo $task->title; ?></span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right"><?= $task->sdate?></td>
                                                    <td class="text-right"><?= $task->edate?></td>
                                                    <td><span ></span></td>
                                                    <td>
                                                        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"></span>
                                                    </td>
                                                </tr>
                                                <?php }
                                             } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <?php } ?>
                        <!-- </div> -->

                    </div>
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
@endsection