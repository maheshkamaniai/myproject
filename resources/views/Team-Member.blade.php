@extends('layouts.app')

@section('content')


@include('layouts.sidebar') 
  

<div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
            @include('layouts.tophead')
                <!--<div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                        <h1 class="page-title">Clients</h1>                        
                    </div>
                    <div class="right">
                        <div class="input-icon xs-hide mr-4">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                        </div>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/us.svg">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/es.svg">Spanish</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/jp.svg">japanese</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/bl.svg">France</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w350 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <div class="message">It is a long established fact that a reader</div>
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
                                                    <div class="message">There are many variations of passages of Lorem Ipsum</div>
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
                                                    <div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
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
                                                    <div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
                                                    <small>33 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>                        
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>                                   
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.php"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.php"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="login.php"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between mb-2">
                                    <ul class="nav nav-tabs b-none">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i> Clients List</a></li>                                        
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" placeholder="Clinet Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-6">
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" placeholder="Project">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block mb-1" title="">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box green">New</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar1.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">07</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$2,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box indigo">India</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar3.jpg" alt="">
                                        <h6 class="mt-3 mb-0">David Wallace</h6>
                                        <span>Michelle@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">14</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$7,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar4.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">08</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$5,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar6.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">05</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$1,071</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box orange">Gold</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar5.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">31</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$45,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar1.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Sean Black</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">31</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$45,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <div class="ribbon-box pink">USA</div>
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar2.jpg" alt="">
                                        <h6 class="mt-3 mb-0">Jason Porter</h6>
                                        <span>Carol@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">22</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$12,510</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/images/sm/avatar2.jpg" alt="">
                                        <h6 class="mt-3 mb-0">David Wallace</h6>
                                        <span>jason-porter@info.com</span>
                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dropbox"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-apple"></i></a></li>
                                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <button class="btn btn-default btn-sm">View Profile</button>
                                        <button class="btn btn-default btn-sm">Message</button>
                                        <div class="row text-center mt-4">
                                            <div class="col-6 border-right">
                                                <label class="mb-0">Project</label>
                                                <h4 class="font-18">12</h4>
                                            </div>
                                            <div class="col-6">
                                                <label class="mb-0">Deal</label>
                                                <h4 class="font-18">$1,840</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="addnew" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Client</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <form class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <label>Gender</label>
                                                <select class="form-control show-tick">
                                                    <option value="">-- Gender --</option>
                                                    <option value="10">Male</option>
                                                    <option value="20">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Enter Your Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Website URL</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>LinkedIN</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Behance</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mt-2 mb-3">
                                                    <input type="file" class="dropify">
                                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mt-3">
                                                    <label>Messages</label>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
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
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection