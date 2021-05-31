@extends('layouts.app')

@section('content')

<div id="main_content">
    @include('layouts.sidebar')
    
    <div class="page">
        <div id="page_top" class="section-body top_dark">
            @include('layouts.tophead')

        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome To Awesome Infosys</h4>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">OnGoing Project</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?php echo $OnGoingdata;?></h5>
                                <span class="font-12"><a href="{{ url('Project-List/ongoing')}}">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Upcomming Project</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?php echo $Upcommingdata;?></h5>
                                <span class="font-12"><a href="{{ url('Project-List/upcomming')}}">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Closed Project</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?php echo $Closeddata;?></h5>
                                <span class="font-12"> <a href="{{ url('Project-List/closed')}}">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Team Members</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter"><?php echo $teammembers;?></h5>
                                <span class="font-12"><a href="{{ url('Team-Member')}}">More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
               
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Project Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client Name</th>
                                                <th>Team</th>
                                                <th>Project</th>
                                               
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php  $c=0; 
                                            foreach($Summary as $post){
                                               $c++ ?>
                                            <tr>
                                                <td><?=$c?></td>
                                                <td><?=$post->company_name ?></td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar">
                                                        </li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                        </li>
                                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                        </li>
                                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                                        </li>
                                                        <li class="ml-2"><span>2+</span></li>
                                                    </ul>
                                                </td>
                                                <td><?=$post->project_title ?></td>
                                            
                                                <td>
                                                   <?php 
                                                    if ($post->project_status==1) 
                                                    {
                                                    echo " <span class='tag tag-primary'>In Progress </span>";
                                                    } elseif ($post->project_status==2)
                                                    {
                                                    echo "<span class='tag tag-orange'>  Panding  </span>";
                                                    } elseif ($post->project_status==3)
                                                    {
                                                    echo "<span class='tag tag-success'> Closed </span>";
                                                    }else 
                                                    {
                                                    echo "Have a good night!";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <?php //include('includes/footer.php'); 
                ?>
        </div>
    </div>


    <?php //include('includes/footerjs.php'); 
    ?>
</body>

 soccer/project/  07 Jan 2020 03:37:22 GMT 

</html> -->
        @endsection







