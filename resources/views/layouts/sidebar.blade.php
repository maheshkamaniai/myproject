
<div class="sidebar" id="left-sidebar" data-color="purple" data-image="../images/sidebar-1.jpg" style="background-image:url({{ asset('assets/images/sidebar-2.jpg') }});">

    <a class="header-brand" href="{{url('home')}}">
        <img src="{{URL::asset('assets/images/logo.png')}}">
    </a>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="g_heading">Project</li>
            <li class="active"><a href="{{url('home')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-list-ol"></i><span>Project list</span></a>
                <ul>
                    <li><a href="{{url('Project-List/ongoing')}}">OnGoing</a></li>
                    <li><a href="{{url('Project-List/upcomming')}}">up Comming</a></li>
                    <li><a href="{{url('Project-List/closed')}}">Closed</a></li>
                </ul>
            </li>
            <li><a href="{{url('Taskboard')}}"><i class="fa fa-calendar-check-o"></i><span>Taskboard</span></a></li>
            <li><a href="{{url('Team-Member')}}"><i class="fa fa-user"></i><span>Team Member</span></a></li>
            <li><a href="{{url('Client')}}"><i class="fa fa-user"></i><span>Client</span></a></li>


            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-lock"></i><span>HRMS</span></a>
                <ul>
                    <li><a href="login.php">User</a></li>
                    <li><a href="{{url('UserRole')}}">User Role</a></li>

                </ul>
            </li>
            <!-- <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                        class="fa fa-lock"></i><span>Authentication</span></a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="forgot-password.php">Forgot password</a></li>
                    <li><a href="404.php">404 error</a></li>
                    <li><a href="500.php">500 error</a></li>
                </ul>
            </li> -->


        </ul>
    </nav>
</div>