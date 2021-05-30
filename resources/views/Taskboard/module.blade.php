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
                        <?php // print_r($moduledata);
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
                                    if($data->mid==$post->id){?>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="{{ URL('Taskboard/addsubtask/' . $data->id) }}">
                                                <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded">
                                                    <strong><?=$data->task?></strong><br>
                                                    <span class="badge-text js-checkitems-badge-text">2/15</span>
                                            </a>
                                            <button class='btn btn-info btn-xs pull-right'><i class='fa fa-check'></i></button>
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
    <div class="section-body">
        @include('layouts.footar')
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#ntdfooterhide').click(function() {
                $('#ntdformhide').removeClass('hide')
                $('#ntdfooterhide').addClass('hide')
            });

        });

        $(document).ready(function() {
            $('#idfooterhide').click(function() {
                $('#idformhide').removeClass('hide')
                $('#idfooterhide').addClass('hide')
            });

        });

        $(document).ready(function() {
            $('#nttfooterhide').click(function() {
                $('#nttformhide').removeClass('hide')
                $('#nttfooterhide').addClass('hide')
            });

        });
        $(document).ready(function() {
            $('#utfooterhide').click(function() {
                $('#utformhide').removeClass('hide')
                $('#utfooterhide').addClass('hide')
            });

        });
        $(document).ready(function() {
            $('#utpfooterhide').click(function() {
                $('#utpformhide').removeClass('hide')
                $('#utpfooterhide').addClass('hide')
            });

        });
        $(document).ready(function() {
            $('#ptfooterhide').click(function() {
                $('#ptformhide').removeClass('hide')
                $('#ptfooterhide').addClass('hide')
            });

        });
        $(document).ready(function() {
            $('#dfooterhide').click(function() {
                $('#dformhide').removeClass('hide')
                $('#dfooterhide').addClass('hide')
            });

        });

    </script>
    </body>

    </html>
@endsection
