
@extends('layouts.app')
@section('content')
<?php $page='Taskboard'; ?>
    <div id="main_content">
        @include('layouts.sidebar')
        <div class="page">
            @include('layouts.tophead')
            <div class="section-body">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="list" role="tabpanel">
                            <div class='row col-md-12' style='margin-top:10px'>                                                                    
                            <?php // print_r($Taskboard);
                            foreach ($Taskboard as $post) { ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="{{ URL('Taskboard/addmodule/'. $post->id) }}">
                                        <div class="card-body text-center ribbon">
                                            <img class="rounded-circle img-thumbnail w100" style='width:90px' src="../upload/{{ $post->project_logo}}" alt="">
                                            <h6 class="mt-3 mb-0">{{ $post->project_title }}</h6>
                                        
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-body">
        @include('layouts.footar')
    </div>


    </body>

    </html>
@endsection
