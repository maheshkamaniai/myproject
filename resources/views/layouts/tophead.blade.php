<div id="page_top" class="section-body top_dark">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                <h1 class="page-title">Project List</h1>
            </div>
            <div class="right">
                <div class="input-icon xs-hide mr-4">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                </div>
                <div class="notification d-flex">
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                            data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="{{ url('profile/'.Auth::user()->id)}}"><i
                                    class="dropdown-icon fa fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('/logout')}}"><i
                                    class="dropdown-icon fa fa-sign-out"></i> Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>