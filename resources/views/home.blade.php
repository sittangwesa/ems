
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Event Management System</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                       
        <li class="sidebar-item">
            <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="javascript:void(0)"
                aria-expanded="false"
                ><i class="me-3 fa fa-calendar " aria-hidden="true"></i><span class="hide-menu">  Events </span></a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href=" {{ route('events.create') }}" class="sidebar-link"
                    ><i class="me-3 fas fa-calendar-plus  "
                    aria-hidden="true"></i><span class="hide-menu"> Create New Event </span></a>
                </li>
                <li class="sidebar-item">
                <a href="{{ route('events.index') }}" aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link"
                    ><i class="me-3 fa fa-calendar-check"></i
                    ><span class="hide-menu"> Events List </span></a>
                </li>
            </ul>
            </li>
            <li class="sidebar-item">
                <a
                    class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)"
                    aria-expanded="false"
                    ><i class="me-3 fas fa-bell " aria-hidden="true"></i><span class="hide-menu">  Posts </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href=" {{ route('posts.create') }}" class="sidebar-link"
                        ><i class="me-3 fas fa-plus  "
                        aria-hidden="true"></i><span class="hide-menu"> Add Post </span></a>
                    </li>
                    <li class="sidebar-item">
                    <a href="{{ route('posts.index') }}" aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link"
                        ><i class="me-3 fa fa-check-circle"></i
                        ><span class="hide-menu"> Posts List </span></a>
                    </li>
                </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{ url('bulksms') }}" aria-expanded="false">
                    <i class="me-3 fas fa-envelope" aria-hidden="true"></i><span
                        class="hide-menu">Send SMS</span></a>
            </li>
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="map-google.html" aria-expanded="false"><i class="me-3 fa fa-globe"
                aria-hidden="true"></i><span class="hide-menu">Google Map</span></a></li>
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="blank.html" aria-expanded="false"><i class="me-3 fa fa-columns"
                aria-hidden="true"></i><span class="hide-menu">Blank</span></a></li>
    
</ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
                                Pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> $120</h2>
                    <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar"
                        style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Weekly Sales</h4>
                <div class="text-end">
                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> $5,000</h2>
                    <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-info">30%</span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Revenue Statistics</h4>
                <div class="flot-chart">
                    <div class="flot-chart-content " id="flot-line-chart"
                        style="padding: 0px; position: relative;">
                        <canvas class="flot-base w-100" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
<!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
    <div class="d-md-flex">
        <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Projects of the Month</h4>
        <div class="col-md-2 ms-auto">
            <select class="form-select shadow-none col-md-2 ml-auto">
                <option selected>January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
            </select>
        </div>
    </div>
    <div class="table-responsive mt-5">
        <table class="table stylish-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0" colspan="2">Assigned</th>
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">Budget</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:50px;"><span class="round">S</span></td>
                    <td class="align-middle">
                        <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                    </td>
                    <td class="align-middle">Elite Admin</td>
                    <td class="align-middle">$3.9K</td>
                </tr>
                <tr class="active">
                    <td><span class="round"><img src="../assets/images/users/2.jpg"
                                alt="user" width="50"></span></td>
                    <td class="align-middle">
                        <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                    </td>
                    <td class="align-middle">Real Homes</td>
                    <td class="align-middle">$23.9K</td>
                </tr>
                <tr>
                    <td><span class="round round-success">B</span></td>
                    <td class="align-middle">
                        <h6>Bhavesh patel</h6><small class="text-muted">Developer</small>
                    </td>
                    <td class="align-middle">MedicalPro Theme</td>
                    <td class="align-middle">$12.9K</td>
                </tr>
                <tr>
                    <td><span class="round round-primary">N</span></td>
                    <td class="align-middle">
                        <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small>
                    </td>
                    <td class="align-middle">Elite Admin</td>
                    <td class="align-middle">$10.9K</td>
                </tr>
                <tr>
                    <td><span class="round round-warning">M</span></td>
                    <td class="align-middle">
                        <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small>
                    </td>
                    <td class="align-middle">Helping Hands</td>
                    <td class="align-middle">$12.9K</td>
                </tr>
                <tr>
                    <td><span class="round round-danger">N</span></td>
                    <td class="align-middle">
                        <h6>Johnathan</h6><small class="text-muted">Graphic</small>
                    </td>
                    <td class="align-middle">Digital Agency</td>
                    <td class="align-middle">$2.6K</td>
                </tr>
      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
             
                  
                </div>
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
            </div>
           
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
