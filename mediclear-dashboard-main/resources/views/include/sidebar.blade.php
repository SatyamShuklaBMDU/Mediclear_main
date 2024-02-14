<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mediclear the Eye Test</title>
    <!-- Custom fonts for this template-->
    <link href="{{ url('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="{{ url('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashbord') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ url('dashboard/img/logo.png') }}"
                        style="width: 36%; border-radius: 64%;padding: 4px; ">
                </div>
            </a>

            @if (session()->has('permissionerror'))
                <div class="alert alert-danger">
                    {{ session()->get('permissionerror') }}
                </div>
            @endif
            @php 
            $Userpermission = Auth::User()->permissions ;
            $login = Auth::User();
            @endphp
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- 2nd menu -->
            <!-- Nav Item - Dashboard -->
            @if (
                (in_array('corporateid', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2" href="{{ url('/corporateID') }}">
                        <i class="fa-regular fa-id-badge"></i>
                        <span> Corporate ID</span></a>
                </li>
            @endif

            <hr class="sidebar-divider my-0">
            @if (
                (in_array('addcompany', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2" href="{{ url('add-company') }}">
                        <i class="fa-solid fa-building"></i>
                        <span> Add Company</span></a>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            @if (
                (in_array('adddoctor', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2" href="{{ url('/add-docter') }}">
                        <i class="fa-solid fa-user-doctor"></i>
                        <span> Add Doctor</span></a>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link py-2" href="{{ url('/customer-profile') }}">
                    <i class="fa-solid fa-users"></i>
                    <span> Customer Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu corporatebatch customerbatch-->
            @if (
                (in_array('customerbatch', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all') ||
                    ((in_array('corporatebatch', $Userpermission) && isset($Userpermission)) ||
                        (isset($Userpermission[0]) && $Userpermission[0] == 'all')))
                <li class="nav-item active">
                    <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-circle-user"></i>
                        <span>Batch Create</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @if (
                                (in_array('customerbatch', $Userpermission) && isset($Userpermission)) ||
                                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                                <a class="collapse-item" href="{{ url('/customer-batch') }}">Customer Batch</a>
                            @endif

                            @if (
                                (in_array('corporatebatch', $Userpermission) && isset($Userpermission)) ||
                                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                                <a class="collapse-item" href="{{ url('/corporate-batch') }}">Corporate Batch</a>
                            @endif
                        </div>
                    </div>
                </li>
            @endif
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Utilities Collapse Menu -->
            @if (
                (in_array('payment', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa-regular fa-money-bill-1"></i>
                        <span>Payment</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="customer-payment.php">Customer Payment</a>
                            <a class="collapse-item" href="corporate-payment.php">Corporate Payment</a>
                        </div>
                    </div>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- account seession -->
            <li class="nav-item active">
                <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
                    <i class="fa-regular fa-user"></i>
                    <span>Accounts Section</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{Route('customer-account-section')}}">Customer</a>
                        <a class="collapse-item" href="{{Route('company-account-section')}}">Company</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0 helo ">
            <!-- Nav Item - Pages Collapse Menu -->
            @if (
                (in_array('notification', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                        data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fa-solid fa-bell"></i>
                        <span>Notifications</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ url('/customer-notification') }}">Customer
                                Notifications</a>
                            <a class="collapse-item" href="corporate-notifications.php">Corporate Notifications</a>
                        </div>
                    </div>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0 helo ">
            <!-- Nav Item - Pages Collapse Menu -->
            @if (
                (in_array('vertigoreport', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                        data-target="#collapsevertigo" aria-expanded="true" aria-controls="collapsevertigo">
                        <i class="fa-solid fa-certificate"></i>
                        <span> Vertigo Report</span>
                    </a>
                    <div id="collapsevertigo" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ url('/customers-vertigo-report') }}">Customer
                                Report</a>
                            <a class="collapse-item" href="{{ url('/corporate-vertigo-report') }}">Corporate Report</a>
                        </div>
                    </div>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider  my-0 helo">
            <!-- Nav Item - Pages Collapse Menu adminmanages-->
            @if (
                (in_array('adminmanages', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseadmin" aria-expanded="true" aria-controls="collapseadmin">
                        <i class="fa-solid fa-user"></i>
                        <span> Admin Manages</span>
                    </a>
                    <div id="collapseadmin" class="collapse" aria-labelledby="headingadmin"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ url('/adminmanages') }}">Add Users</a>
                            <a class="collapse-item" href="{{ url('/showusers') }}">Users List</a>
                        </div>
                    </div>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- next -->
            @if (
                (in_array('complaints', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2" href="{{ url('/complaint') }}">
                        <i class="fa-solid fa-phone"></i>
                        <span> Complaints</span></a>
                </li>
            @endif
            <!-- Divider -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- next -->
            @if (
                (in_array('feedback', $Userpermission) && isset($Userpermission)) ||
                    (isset($Userpermission[0]) && $Userpermission[0] == 'all'))
                <li class="nav-item active">
                    <a class="nav-link py-2" href="{{ url('/feedback') }}">
                        <i class="fa-solid fa-comment"></i>
                        <span>Feedback</span></a>
                </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                    data-target="#collapsehistory" aria-expanded="true" aria-controls="collapsehistory">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span> History</span>
                </a>
                <div id="collapsehistory" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="report-history.php">Report History</a>
                        <a class="collapse-item" href="payment-history.php">Payment History</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link py-2 collapsed" href="#" data-toggle="collapse"
                    data-target="#collapsesettings" aria-expanded="true" aria-controls="collapsesettings">
                    <i class="fa-solid fa-gears"></i>
                    <span> Settings</span>
                </a>
                <div id="collapsesettings" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/">Forget Password</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0 d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    {{-- <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
               <input type="text" class="form-control bg-light border-1 small" placeholder="Search for..."
                  aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                  </button>
               </div>
            </div>
         </form> --}}
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link py-2 dropdown-toggle" href="#" id="searchDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ url('dashboard/img/undraw_profile_1.svg') }}" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.
                                        </div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ url('dashboard/img/undraw_profile_2.svg') }}" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?
                                        </div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="{{ url('dashboard/img/undraw_profile_3.svg') }}" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!
                                        </div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...
                                        </div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>
                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow text-right">
                            <a class="sidebar-divider my-0 dropdown-toggle" href="#" id="userDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$login->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ url('dashboard/img/undraw_profile.svg') }}" style="width: 8%;">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-danger-400" style="color: red;"></i>
                                    Forget Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger-400"
                                        style="color: red;"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
    </div>
                <!-- End of Topbar -->
