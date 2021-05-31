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
                                <h5 class="number mb-0 font-32 counter">31</h5>
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
                                <h5 class="number mb-0 font-32 counter">245</h5>
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
                                <h5 class="number mb-0 font-32 counter">17</h5>
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
                                <h5 class="number mb-0 font-32 counter">12</h5>
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
                                                <th>Project Cost</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#AD1245</td>
                                                <td>Sean Black</td>
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
                                                <td>Angular Admin</td>
                                                <td>$14,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#DF1937</td>
                                                <td>Sean Black</td>
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
                                                <td>Angular Admin</td>
                                                <td>$14,500</td>
                                                <td>Pending</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#YU8585</td>
                                                <td>Merri Diamond</td>
                                                <td>
                                                    <ul class="list-unstyled team-info sm margin-0 w150">
                                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar">
                                                        </li>
                                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>One page html Admin</td>
                                                <td>$500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-orange">Submit</span></td>
                                            </tr>
                                            <tr>
                                                <td>#AD1245</td>
                                                <td>Sean Black</td>
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
                                                    </ul>
                                                </td>
                                                <td>Wordpress One page</td>
                                                <td>$1,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td>#GH8596</td>
                                                <td>Allen Collins</td>
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
                                                <td>VueJs Application</td>
                                                <td>$9,500</td>
                                                <td>Done</td>
                                                <td><span class="tag tag-success">Delivered</span></td>
                                            </tr>
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