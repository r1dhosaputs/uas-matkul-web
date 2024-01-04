<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>SYNTRA | Responsive Web App Kit</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/plugins/morris-chart/morris.css" rel="stylesheet">
    <!-- Theme Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/slidebars.min.css" rel="stylesheet">
    <link href="/assets/css/icons.css" rel="stylesheet">
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <div class="sidebar-left-info">

                <div class="user-box">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="mt-2 text-center text-white">
                        <h6>Travis Watson</h6>
                        <p class="text-muted m-0">Admin</p>
                    </div>
                </div>

                <!--sidebar nav start-->
                <ul class="side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li class="active">
                        <a href="{{ route('barang.index') }}"><i class="mdi mdi-gauge"></i> <span>Barang</span></a>
                    </li>

                    <li class="active">
                        <a href="{{ route('barang.dash') }}"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                    </li>

                </ul><!--sidebar nav end-->
            </div>
        </div><!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content">
            <!-- header section start-->
            <div class="header-section">
                <!--logo and logo icon start-->
                <div class="logo">
                    <a href="index.html">
                        <span class="logo-img">
                            <img src="assets/images/logo_sm.png" alt="" height="26">
                        </span>
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">Syntra</span>
                    </a>
                </div>

                <!--toggle button start-->
                <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse mega-menu collapse">
                    <ul class="nav navbar-nav">
                        <!-- Classic dropdown -->
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown" class=""> English <i
                                    class="mdi mdi-chevron-down"></i> </a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li>
                                    <a tabindex="-1" href="javascript:;"> German </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"> Italian </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"> French </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"> Spanish </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"> Russian </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Classic list -->
                        <li>
                            <form class="search-content" action="index.html" method="post">
                                <input type="text" class="form-control mt-3" name="keyword" placeholder="Search...">
                                <span class="search-button"><i class="ti ti-search"></i></span>
                            </form>
                        </li>
                    </ul>
                </div>
                <!--mega menu end-->

                <div class="notification-wrap">
                    <!--right notification start-->
                    <div class="right-notification">
                        <ul class="notification-menu">
                            <li>
                                <a href="javascript:;" class="notification" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-success">4</span>
                                </a>
                                <ul class="dropdown-menu mailbox dropdown-menu-right">
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li class="notification-scroll">
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-star"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Jane A. Seward</h6>
                                                    <span class="mail-desc">Iwon meddle and...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-heart"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Michael W. Salazar</h6>
                                                    <span class="mail-desc">Lovely gide learn for you...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-image"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>David D. Chen</h6>
                                                    <span class="mail-desc">Send his new photo...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-bell"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Irma J. Hendren</h6>
                                                    <span class="mail-desc">6:00 pm our meeting so...</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="bg-light text-center" href="javascript:void(0);">
                                            <strong>See all notifications</strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" class="notification" data-toggle="dropdown">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="badge badge-danger">9</span>
                                </a>
                                <ul class="dropdown-menu mailbox dropdown-menu-right">
                                    <li>
                                        <div class="drop-title">New Messages 5</div>
                                    </li>
                                    <li class="notification-scroll">
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="user"
                                                        class="rounded-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Cassie T. Bishop</h6>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="user"
                                                        class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Rudy A. Scott</h6>
                                                    <span class="mail-desc">I've sung a song! See you at</span> <span
                                                        class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="user"
                                                        class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Kevin D. Jernigan</h6>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="user"
                                                        class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Jane A. Seward</h6>
                                                    <span class="mail-desc">Just see the my admin!</span> <span
                                                        class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="bg-light text-center" href="javascript:void(0);"> <strong>See all
                                                notifications</strong> </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;" data-toggle="dropdown">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-menu">
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="badge badge-success pull-right">5</span><i
                                            class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                            </li>

                            <li>
                                <div class="sb-toggle-right">
                                    <i class="mdi mdi-apps"></i>
                                </div>
                            </li>
                        </ul>
                    </div><!--right notification end-->
                </div>
            </div>
            <!-- header section end-->

            {{-- <div class="container-fluid">
                    <div class="page-head">
                        <h4 class="mt-2 mb-2">Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-eye"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="dynamicbar">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">145</h2>
                                                <p>Visits Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center text-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-user"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="inlinesparkline">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">946</h2>
                                                <p>Visits Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-money"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="dynamicbar">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">548</h2>
                                                <p>Visits Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-wallet"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="inlinesparkline">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">999</h2>
                                                <p>Visits Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-9 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Overview</h5>           
                                    <div id="morris-line-chart" style="height: 360px;"></div>             
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">                                    
                                    <div class="border-b pb-3 pt-1">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Sheres</h6>
                                                <h3>1,503</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-2"></span>
                                            </div>                                            
                                        </div>
                                    </div> 
                                    <div class="border-b pb-3 pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Clicks</h6>
                                                <h3>11,503</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="border-b pb-3 pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Virality</h6>
                                                <h3>3.55%</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-3"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Counteries</h6>
                                                <h3>36</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-2"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Summary</h5>           
                                    <div id="morris-donut-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Revenue</h5>           
                                    <div id="morris-bar-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Email Sent</h5>           
                                    <div id="extra-area-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Recent Contacts</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
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
                    
                </div><!--end container--> --}}

            <div class="container-fluid">

                @yield('content')
                {{-- <h1>ADOKONAFJOAFOAFKIPWA</h1> --}}
            </div>

            <!--footer section start-->
            <footer class="footer">
                2018 &copy; Syntra.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
                <div class="right-bar slimscroll">
                    <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

                    <ul class="nav nav-tabs nav-justified-">
                        <li class="">
                            <a href="#chat" class="active" data-toggle="tab">Chat</a>
                        </li>
                        <li class="">
                            <a href="#activity" data-toggle="tab">Activity</a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="online-chat">
                                <div class="online-chat-container">
                                    <div class="chat-list">
                                        <form class="search-content" action="index.html" method="post">
                                            <input type="text" class="form-control" name="keyword"
                                                placeholder="Search...">
                                            <span class="search-button"><i class="ti ti-search"></i></span>
                                        </form>
                                    </div>
                                    <div class="side-title-alt">
                                        <h2>online</h2>
                                    </div>

                                    <ul class="team-list chat-list-side">
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-1.jpg"
                                                        alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Alison Jones</span>
                                                    <small class="text-muted">Start exploring</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-3.jpg"
                                                        alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jonathan Smith</span>
                                                    <small class="text-muted">Alien Inside</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-4.jpg"
                                                        alt="">
                                                    <i class="away dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Anjelina Doe</span>
                                                    <small class="text-muted">Screaming...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-5.jpg"
                                                        alt="">
                                                    <i class="busy dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Franklin Adam</span>
                                                    <small class="text-muted">Don't lose the hope</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="assets/images/users/avatar-6.jpg"
                                                        alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jeff Crowford </span>
                                                    <small class="text-muted">Just flying</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="side-title-alt mb-3">
                                        <h2>Friends</h2>
                                    </div>
                                    <ul class="list-unstyled friends">
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-7.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-8.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-9.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-10.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-2.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-1.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-3.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="assets/images/users/avatar-4.jpg"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="activity">

                            <div class="aside-widget">
                                <div class="side-title-alt">
                                    <h2>Recent Activity</h2>
                                </div>
                                <ul class="team-list chat-list-side info">
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company</span>
                                            <span class="time">just now</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown send a new message </span>
                                            <span class="time">50 min ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-wrench"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Holly Cobb Uploaded 6 new photos.</span>
                                            <span class="time">3 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company.</span>
                                            <span class="time">1 Month Ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="aside-widget">

                                <div class="side-title-alt">
                                    <h2>Events</h2>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list">
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Jamie Miller</p>
                                            <span class="name">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text.</span>
                                            <span class="time text-muted">2 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Robert Jones</p>
                                            <span class="name">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting .</span>
                                            <span class="time text-muted">1 Month Ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="side-title-alt">
                                <h6 class="mb-0">Account Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Auto updates</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Show offline Contacts</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Location Permission</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>
                            </ul>

                            <div class="side-title-alt">
                                <h6 class="mb-0">General Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Show me Online</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Status visible to all</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Notifications</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e"
                                            data-size="small" />
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Right Slidebar-->
        </div>
        <!--end body content-->
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/slidebars.min.js"></script>

    <!--plugins js-->
    <script src="/assets/plugins/counter/jquery.counterup.min.js"></script>
    <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
    <script src="/assets/pages/jquery.sparkline.init.js"></script>

    <script src="/assets/plugins/chart-js/Chart.bundle.js"></script>
    <script src="/assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="/assets/plugins/morris-chart/morris.js"></script>
    <script src="/assets/pages/dashboard-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- <!--app js-->
        <script src="assets/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script> --}}
</body>

</html>
