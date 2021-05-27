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
                            <h1 class="page-title">TaskBoard</h1>

                        </div>
                        <div class="right">
                            <div class="input-icon xs-hide mr-4">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-icon-addon"><i class="fa fa-search"></i></span>
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
                                        <a class="dropdown-item" href="page-profile.html"><i
                                                class="dropdown-icon fe fe-user"></i> Profile</a>
                                        <a class="dropdown-item" href="app-setting.html"><i
                                                class="dropdown-icon fe fe-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><span
                                                class="float-right"><span class="badge badge-primary">6</span></span><i
                                                class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-send"></i> Message</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                        <a class="dropdown-item" href="login.html"><i
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <ul class="nav nav-tabs page-header-tab">
                                    <li class="nav-item"><a class="nav-link active" id="TaskBoard-tab" data-toggle="tab"
                                            href="#TaskBoard-list">List View</a></li>
                                    <li class="nav-item"><a class="nav-link" id="TaskBoard-tab" data-toggle="tab"
                                            href="#TaskBoard-grid">Grid View</a></li>
                                </ul>
                                <div class="header-action d-flex">
                                    <div class="input-group mr-2">
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addtask"><i class="fe fe-plus mr-2"></i>Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mt-2">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>Planned</h6>
                                    <input type="text" class="knob" value="23" data-width="90" data-height="90"
                                        data-thickness="0.1" data-fgColor="#6e7687">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>In progress</h6>
                                    <input type="text" class="knob" value="43" data-width="90" data-height="90"
                                        data-thickness="0.1" data-fgColor="#6e7687">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>Completed</h6>
                                    <input type="text" class="knob" value="83" data-width="90" data-height="90"
                                        data-thickness="0.1" data-fgColor="#6e7687">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6>In Completed</h6>
                                    <input type="text" class="knob" value="12" data-width="90" data-height="90"
                                        data-thickness="0.1" data-fgColor="#6e7687">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="container-fluid">
                    <div class="tab-content taskboard">
                        <div class="tab-pane fade show active" id="TaskBoard-list" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Task</th>
                                                    <th>Team</th>
                                                    <th>Duration</th>
                                                    <th>Action</th>
                                                    <th class="w200"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr onclick="window.location='{{ route('projecttodo')}}';">
                                                    <td>01</td>
                                                    <td>
                                                        <!-- <a href="project-todo.php"> -->
                                                        <h6 class="mb-0">New code Update on github</h6>
                                                        <span>It is a long established fact that a reader will be
                                                            distracted...</span></a>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled team-info mb-0">
                                                            <li><img src="assets/images/xs/avatar1.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar2.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar5.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="text-info">Start: 3 Jun 2019</div>
                                                        <div class="text-pink">End: 15 Jun 2019</div>
                                                    </td>
                                                    <td>
                                                        <span class="tag tag-blue">Planned</span>
                                                    </td>
                                                    <td>
                                                        <div class="clearfix">
                                                            <div class="float-left"><strong>0%</strong></div>
                                                            <div class="float-right"><small
                                                                    class="text-muted">Progress</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-azure" role="progressbar"
                                                                style="width: 0%" aria-valuenow="42" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr onclick="window.location='project-todo.php';">
                                                    <td>02</td>
                                                    <td>
                                                        <h6 class="mb-0">Design Events</h6>
                                                        <span>It is a long established fact that a reader will be
                                                            distracted...</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled team-info mb-0">
                                                            <li><img src="assets/images/xs/avatar1.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="text-info">Start: 02 Jun 2019</div>
                                                        <div class="text-pink">End: 08 Jun 2019</div>
                                                    </td>
                                                    <td>
                                                        <span class="tag tag-green">Completed</span>
                                                    </td>
                                                    <td>
                                                        <div class="clearfix">
                                                            <div class="float-left"><strong>100%</strong></div>
                                                            <div class="float-right"><small
                                                                    class="text-muted">Progress</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                style="width: 100%" aria-valuenow="42" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr onclick="window.location='project-todo.php';">
                                                    <td>03</td>
                                                    <td>
                                                        <h6 class="mb-0">Feed Details on Dribbble</h6>
                                                        <span>The point of using Lorem Ipsum is that...</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled team-info mb-0">
                                                            <li><img src="assets/images/xs/avatar1.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar2.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar5.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="text-info">Start: 3 Jun 2019</div>
                                                        <div class="text-pink">End: 15 Jun 2019</div>
                                                    </td>
                                                    <td>
                                                        <span class="tag tag-orange">In progress</span>
                                                    </td>
                                                    <td>
                                                        <div class="clearfix">
                                                            <div class="float-left"><strong>35%</strong></div>
                                                            <div class="float-right"><small
                                                                    class="text-muted">Progress</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-azure" role="progressbar"
                                                                style="width: 35%" aria-valuenow="42" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr onclick="window.location='project-todo.php';">
                                                    <td>04</td>
                                                    <td>
                                                        <h6 class="mb-0">New code Update on github</h6>
                                                        <span>It is a long established fact that a reader will be
                                                            distracted...</span>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled team-info mb-0">
                                                            <li><img src="assets/images/xs/avatar1.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar2.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar5.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar3.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                            <li><img src="assets/images/xs/avatar7.jpg"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Avatar" alt="Avatar"></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="text-info">Start: 13 Jun 2019</div>
                                                        <div class="text-pink">End: 23 Jun 2019</div>
                                                    </td>
                                                    <td>
                                                        <span class="tag tag-orange">In progress</span>
                                                    </td>
                                                    <td>
                                                        <div class="clearfix">
                                                            <div class="float-left"><strong>75%</strong></div>
                                                            <div class="float-right"><small
                                                                    class="text-muted">Progress</small></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                style="width: 75%" aria-valuenow="42" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TaskBoard-grid" role="tabpanel">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <div class="card planned_task">
                                        <div class="card-header">
                                            <h3 class="card-title">Planned</h3>
                                            <div class="card-options">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                                <div class="item-action dropdown ml-2">
                                                    <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-cloud-download"></i>
                                                            Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dd" data-plugin="nestable">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="1">
                                                        <div class="dd-handle">
                                                            <h6>Dashbaord</h6>
                                                            <span class="time"><span class="text-primary">Start: 5
                                                                    Aug</span> to <span class="text-danger">Complete: 15
                                                                    Aug</span></span>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</p>
                                                            <ul class="list-unstyled team-info">
                                                                <li><img src="assets/images/xs/avatar1.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar2.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar5.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">
                                                            <h6>New project</h6>
                                                            <span class="time"><span class="text-primary">Start: 6
                                                                    Aug</span> to <span class="text-danger">Complete: 28
                                                                    Aug</span></span>
                                                            <p>It is a long established fact that a reader will be
                                                                distracted.</p>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="3">
                                                        <div class="dd-handle">
                                                            <h6>Feed Details</h6>
                                                            <p>here are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered.</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card progress_task">
                                        <div class="card-header">
                                            <h3 class="card-title">In progress</h3>
                                            <div class="card-options">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                                <div class="item-action dropdown ml-2">
                                                    <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-cloud-download"></i>
                                                            Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dd" data-plugin="nestable">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="1">
                                                        <div class="dd-handle">
                                                            <h6>New Code Update</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</p>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">
                                                            <h6>Meeting</h6>
                                                            <span class="time"><span class="text-primary">Start: 5
                                                                    Aug</span> to <span class="text-danger">Complete: 11
                                                                    Aug</span></span>
                                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                                                reproduced below for those interested. Sections 1.10.32
                                                                and 1.10.33 from "de Finibus Bonorum et Malorum" by
                                                                Cicero</p>
                                                            <ul class="list-unstyled team-info">
                                                                <li><img src="assets/images/xs/avatar7.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar9.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">
                                                            <h6>New project</h6>
                                                            <p>It is a long established fact that a reader will be
                                                                distracted.</p>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="3">
                                                        <div class="dd-handle">
                                                            <h6>Feed Details</h6>
                                                            <p>here are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered.</p>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card completed_task">
                                        <div class="card-header">
                                            <h3 class="card-title">Completed</h3>
                                            <div class="card-options">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                                <div class="item-action dropdown ml-2">
                                                    <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-cloud-download"></i>
                                                            Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i
                                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dd" data-plugin="nestable">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="1">
                                                        <div class="dd-handle">
                                                            <h6>Job title</h6>
                                                            <p>If you are going to use a passage of Lorem Ipsum, you
                                                                need to be sure there isn't anything embarrassing hidden
                                                                in the middle of text.</p>
                                                            <ul class="list-unstyled team-info">
                                                                <li><img src="assets/images/xs/avatar4.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar5.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar6.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                                <li><img src="assets/images/xs/avatar8.jpg"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Avatar" alt="Avatar"></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">
                                                            <h6>Event Done</h6>
                                                            <p>Contrary to popular belief, Lorem Ipsum is not simply
                                                                random text. It has roots in a piece of classical</p>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="1">
                                                        <div class="dd-handle">
                                                            <h6>New Code Update</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry.</p>
                                                        </div>
                                                    </li>
                                                </ol>
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
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <a href="templateshub.net">Templates Hub</a>
                            </div>
                            <div class="col-md-6 col-sm-12 text-md-right">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
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
    </div>

    <!-- Add New Task -->
    <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add New Task</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option>Project Work</option>
                                    <option>Other Task</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option>Project 1</option>
                                    <option>Project 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option>Module 1</option>
                                    <option>Module 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Task Title ">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mt-2 mb-3">
                                <input type="file" class="dropify">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Task Description"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Task list">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection