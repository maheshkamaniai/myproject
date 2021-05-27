@extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
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
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
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
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
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
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
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
                                            class="dropdown-icon fa fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.php"><i
                                            class="dropdown-icon fa fa-cog"></i> Settings</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span
                                                class="badge badge-primary">6</span></span><i
                                            class="dropdown-icon fa fa-envelope"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="dropdown-icon fa fa-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="dropdown-icon fa fa-question-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="login.php"><i
                                            class="dropdown-icon fa fa-sign-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="nav nav-tabs page-header-tab">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#Project-OnGoing">OnGoing</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#Project-UpComing">UpComing</a></li>
                                <li class="nav-item"><a class="nav-link" id="addnew-tab" data-toggle="tab"
                                        href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                            </ul>
                            <div class="header-action d-md-flex">
                                <div class="input-group mr-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                        <div class="row">
                            <?php for($i=0;$i<6;$i++)
                            { ?>
                            <div class="col-lg-6 col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">New Admin Design</h3>
                                        <div class="card-options">
                                            <label class="custom-switch m-0">
                                                <input type="checkbox" value="1" class="custom-switch-input" checked>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                    class="fa fa-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="tag tag-blue mb-3">Web Design</span>
                                        <p>Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur
                                            perferendis temporibus!</p>
                                        <div class="row">
                                            <div class="col-5 py-1"><strong>Front End:</strong></div>
                                            <div class="col-7 py-1">Laravel,Angular</div>
                                            <div class="col-5 py-1"><strong>Back End:</strong></div>
                                            <div class="col-7 py-1">Mysql,SQLite</div>
                                            <div class="col-5 py-1"><strong>Total Modules:</strong></div>
                                            <div class="col-7 py-1"><strong>23</strong></div>

                                            <div class="col-5 py-1"><strong>Bug:</strong></div>
                                            <div class="col-7 py-1"><strong>5</strong></div>
                                            <div class="col-5 py-1"><strong>Team:</strong></div>
                                            <div class="col-7 py-1">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar1.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar2.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar3.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar4.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar5.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <span class="avatar avatar-sm">+8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>15%</strong></div>
                                            <div class="float-right"><small class="text-muted">Progress</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-red" role="progressbar" style="width: 15%"
                                                aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="Project-UpComing" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Owner</th>
                                                        <th>Milestone</th>
                                                        <th class="w100">Work</th>
                                                        <th class="w100">Duration</th>
                                                        <th>Priority</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar1.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Isidore
                                                                Dilao</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar2.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Maricel
                                                                Villalon</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>68:00</span></td>
                                                        <td>105:0 hrs</td>
                                                        <td><span class="text-danger">High</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar3.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Theresa
                                                                Wright</span></td>
                                                        <td>Approval site</td>
                                                        <td><span>74:00</span></td>
                                                        <td>89:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar4.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Jason
                                                                Porter</span></td>
                                                        <td>Final touch up</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar5.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Annelyn
                                                                Mercado</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar6.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Sean Black</span>
                                                        </td>
                                                        <td>Basement slab preparation</td>
                                                        <td><span>88:00</span></td>
                                                        <td>88:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar7.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Scott
                                                                Ortega</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>56:00</span></td>
                                                        <td>125:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar8.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>David
                                                                Wallace</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="addnew" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Project Title</lable>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Project Title">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Front End</lable>
                                                    <select class='form-control'>
                                                        <option>Laravel</option>
                                                        <option>Angular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Back End</lable>
                                                    <select class='form-control'>
                                                        <option>Node js</option>
                                                        <option>Mysql</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <lable>Project Description</lable>
                                                    <textarea type="text" class="form-control"
                                                        rows="4">Enter Description</textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Project Start Date</lable>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <lable>Deliverable Days</lable>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Deliverable Day">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-12">
                                                <lable>Documents File</lable>
                                                <input type="file" class="dropify" multiple>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <lable>Module List</lable>
                                                    <textarea type="text" class="form-control" rows="4"
                                                        placeholder="Enter Module list"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                                <button type="submit" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
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
    </div>
</div>


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/js/core.js"></script>
</body>

<!-- soccer/project/project-list.php  07 Jan 2020 03:41:02 GMT -->

</html>
@endsection