@extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
            <div id="page_top" class="section-body top_dark">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">
                            <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i
                                    class="fa  fa-align-left"></i></a>
                            <h1 class="page-title">Todo List</h1>

                        </div>
                        <div class="right">
                            <div class="input-icon xs-hide mr-4">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                            </div>
                            <div class="notification d-flex">
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/us.svg">English</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/es.svg">Spanish</a>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/jp.svg">japanese</a>
                                        <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                                src="assets/images/flags/bl.svg">France</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                            class="badge badge-success nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="right_chat list-unstyled w350 p-0">
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Donald Gardner</span>
                                                        <div class="message">It is a long established fact that a reader
                                                        </div>
                                                        <small>11 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Wendy Keen</span>
                                                        <div class="message">There are many variations of passages of
                                                            Lorem Ipsum</div>
                                                        <small>18 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Matt Rosales</span>
                                                        <div class="message">Contrary to popular belief, Lorem Ipsum is
                                                            not simply</div>
                                                        <small>27 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);" class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Phillip Smith</span>
                                                        <div class="message">It has roots in a piece of classical Latin
                                                            literature from 45 BC</div>
                                                        <small>33 mins ago</small>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                            class="badge badge-primary nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="list-unstyled feeds_widget">
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-check"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-danger">Issue Fixed <small
                                                            class="float-right text-muted">11:05</small></h4>
                                                    <small>WE have fix all Design bug with Responsive</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-user"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">New User <small
                                                            class="float-right text-muted">10:45</small></h4>
                                                    <small>I feel great! Thanks team</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Feedback <small
                                                            class="float-right text-muted">Today</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-warning">Server Warning <small
                                                            class="float-right text-muted">10:50</small></h4>
                                                    <small>Your connection is not private</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Orders <small
                                                            class="float-right text-muted">11:35</small></h4>
                                                    <small>You received a new oder from Tina.</small>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2"
                                        data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="page-profile.php"><i
                                                class="dropdown-icon fe fe-user"></i> Profile</a>
                                        <a class="dropdown-item" href="app-setting.php"><i
                                                class="dropdown-icon fe fe-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><span
                                                class="float-right"><span class="badge badge-primary">6</span></span><i
                                                class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-send"></i> Message</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                        <a class="dropdown-item" href="login.php"><i
                                                class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center">
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#todo-list">ToDo
                                    List</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-body mt-3">
                <div class="container-fluid">
                <div id="todo-add" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Todo</h3>
                        <!-- <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div> -->
                    </div>
                    <form class="card-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title Name <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control">
                            </div>
                            <!-- <label class="col-md-1 col-form-label">Priority <span class="text-danger">*</span></label>
                            <div class="col-md-3">
                                <select class="form-control show-tick">
                                    <option>Select</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="form-group row"> 
                                   
                                   
                            <!-- <label class="col-md-2 col-form-label">Priority <span class="text-danger">*</span></label>
                            <div class="col-md-3">
                                <select class="form-control show-tick">
                                    <option>Select</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label">Due <span class="text-danger">*</span></label>
                            <div class="col-md-3">
                                <div class="input-daterange input-group" data-provide="datepicker">
                                    <input type="date" class="form-control" name="start">
                                   
                                  <span class="input-group-addon"> to </span>
                                    <input type="text" class="form-control" name="end"> 
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="input-daterange input-group" data-provide="datepicker">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                   
                                    <!-- <span class="input-group-addon"> to </span>
                                    <input type="text" class="form-control" name="end"> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label">Select Team <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <select class="form-control show-tick">
                                    <option>Select</option>
                                    <option>John Smith</option>
                                    <option>Claire Peters</option>
                                    <option>Allen Collins</option>
                                    <option>Cory Carter</option>
                                    <option>Rochelle Barton</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Description <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <textarea rows="4" class="form-control no-resize"
                                    placeholder="Please type what you want..."></textarea>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Due <span class="text-danger">*</span></label>
                            <div class="col-md-3">
                                <div class="input-daterange input-group" data-provide="datepicker">
                                    <input type="date" class="form-control" name="start">
                                    <span class="input-group-addon"> to </span>
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
                </div>
            </div>
          
            <div class="section-body mt-3">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="todo-list" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive todo_list">
                                        <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="w150 text-right">Due</th>
                                                    <th class="w100">Priority</th>
                                                    <th class="w80"><i class="icon-user"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1" checked>
                                                            <span class="custom-control-label">Report Panel Usag</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">Feb 12-2019</td>
                                                    <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                                    <td>
                                                        <span class="avatar avatar-pink" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Avatar Name">NG</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Report Panel Usag</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">Feb 18-2019</td>
                                                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                    <td>
                                                        <img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip"
                                                            data-placement="top" title="" alt="Avatar" class="avatar"
                                                            data-original-title="Avatar Name">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1" checked>
                                                            <span class="custom-control-label">New logo design for
                                                                Angular Admin</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">March 02-2019</td>
                                                    <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                                    <td>
                                                        <img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip"
                                                            data-placement="top" title="" alt="Avatar" class="avatar"
                                                            data-original-title="Avatar Name">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1" checked>
                                                            <span class="custom-control-label">Report Panel Usag</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">Feb 12-2019</td>
                                                    <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                                    <td>
                                                        <span class="avatar avatar-pink" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Avatar Name">NG</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Report Panel Usag</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">Feb 18-2019</td>
                                                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                    <td>
                                                        <img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip"
                                                            data-placement="top" title="" alt="Avatar" class="avatar"
                                                            data-original-title="Avatar Name">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1" checked>
                                                            <span class="custom-control-label">New logo design for
                                                                Angular Admin</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">March 02-2019</td>
                                                    <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                                                    <td>
                                                        <span class="avatar avatar-blue" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Avatar Name">NG</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Design PSD files for
                                                                Angular Admin</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">March 20-2019</td>
                                                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                    <td>
                                                        <img src="assets/images/xs/avatar4.jpg" data-toggle="tooltip"
                                                            data-placement="top" title="" alt="Avatar" class="avatar"
                                                            data-original-title="Avatar Name">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Design PSD files for
                                                                Angular Admin</span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">March 20-2019</td>
                                                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                                                    <td>
                                                        <img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip"
                                                            data-placement="top" title="" alt="Avatar" class="avatar"
                                                            data-original-title="Avatar Name">
                                                    </td>
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
            <div class="section-body">
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <a href="templateshub.net">Templates Hub</a>
                            </div>
                            <div class="col-md-6 col-sm-12 text-md-right">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="doc/index.php">Documentation</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('layouts.footar')
        </div>
    </div>
</div>
</body>

<!-- soccer/project/project-list.php  07 Jan 2020 03:41:02 GMT -->

</html>
@endsection