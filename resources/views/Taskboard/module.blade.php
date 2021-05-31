@extends('layouts.app')
@section('content')
    <style>
        /* .hide {
            display: none;
            
        } */

    </style>
    <div id="main_content">
        @include('layouts.sidebar')
        <div class="page">
            @include('layouts.tophead')
            <div class="section-body">
                <div class="container">
                    <div class="d-flex flex-row flex-nowrap overflow-auto mt-4">
                        <?php 
                        foreach ($moduledata as $post) { ?>
                        <div class="col-lg-3 4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $post->name }}</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fa fa-chevron-up"></i></a>
                                    </div>
                                </div>
                                
                                <div class="card-bodybg">
                                <?php foreach($taskdata as $data) { 
                                    if($data->mid==$post->id){
                                        $totaltask=DB::table('tbl_subtask')->where('isdelete',0)->where('mid',$data->id)->count();
                                        $completetask=DB::table('tbl_subtask')->where('isdelete',0)->where('mid',$data->id)->where('status',1)->count();
                                        ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="{{ URL('Taskboard/addsubtask/' . $data->id) }}">
                                                <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded">
                                                    <strong><?=$data->task?></strong><br>
                                                    <span class="badge-text js-checkitems-badge-text"><?= $completetask?>/<?=$totaltask?></span>
                                            </a>
                                            <button class='btn btn-info btn-xs pull-right moves' data-toggle="modal" data-target="#myModal" data-id='<?=$data->id?>'>Move</button>
                                        </div>
                                    </div>
                                </div>
                                <?php } }?>
                                <form method='post' action="{{ URL('Taskboard/addtask/') }}" id='ntdformhide' class="hide">
                                    {{ csrf_field() }}
                                    <div class='form-group'>
                                        <input type="text" class="form-control" name="task" value="">
                                        <input type="hidden" class="form-control" name="pid" value="<?=$id?>">
                                        <input type="hidden" class="form-control" name="mid" value="<?=$post->id?>">
                                        <button type="submit" value="submit" class="btn btn-primary mt-1 ml-0">Add</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    <form method='post' action='{{url("Taskboard/changeTask/")}}'>
                    <!-- Modal content-->
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <input type='hidden' id='search' name='search' value=''>
                        <select name='module' class='form-control'>
                        <?php 
                        foreach ($moduledata as $post) { ?>
                        <option value='<?= $post->id?>'><?=$post->name?></option>
                        <?php }?>
                        <option value='0'>Remove From Taskboard</option>
                        </select>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Move</button>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>

    <div class="section-body">
        @include('layouts.footar')
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.moves').click(function() {
                var id=$(this).attr('data-id');
                $('#search').val(id);
            });

        });

    </script>
    </body>

    </html>
@endsection
