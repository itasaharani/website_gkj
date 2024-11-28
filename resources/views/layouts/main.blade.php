<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Gkj Sedayu')</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.11/jspdf.plugin.autotable.min.js"></script>



    <link rel="stylesheet" href="assets2/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets2/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets2/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets2/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets2/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets2/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets2/images/logo.png" />
  </head>

<body>

  <!-- ======= Header ======= -->
  
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          
          <!-- <div>
            <a class="navbar-brand brand-logo" href="/">
              <img src="assets2/images/logo.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="/">
              <img src="assets2/images/logo-mini.svg" alt="logo" />
            </a>
          </div> -->

          <div>
            <a class="navbar-brand brand-logo" href="/admin">
                <span style="font-size: 24px; font-weight: bold; color: #000;">Admin GKJ </span>
            </a>
            <a class="navbar-brand brand-logo-mini" href="/">
                <span style="font-size: 20px; font-weight: bold; color: #000;">Admin</span>
            </a>
          </div>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
              <h3 class="welcome-sub-text">Your performance summary this week </h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">Select category</p>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Bootstrap Bundle </p>
                    <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Angular Bundle</p>
                    <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">VUE Bundle</p>
                    <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">React Bundle</p>
                    <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                    <p class="fw-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                    <p class="fw-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-mail icon-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets2/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets2/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets2/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets2/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets2/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                  <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/pendeta">
              <i class="mdi mdi-church menu-icon"></i>
                <span class="menu-title">Pendeta</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/jadwal">
                <i class="mdi mdi-calendar menu-icon"></i>
                <span class="menu-title">Jadwal Ibadah</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/adminrenungan">
              <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                <span class="menu-title">Renungan Mingguan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pengumuman">
              <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Pengumuman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/adminstruktur">
              <i class="mdi mdi-account-group menu-icon"></i>
                <span class="menu-title">Struktur</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/feedback-admin">
              <i class="mdi mdi-comment-outline menu-icon"></i>
                <span class="menu-title">Feedback</span>
              </a>
            </li>
            <li class="nav-item">
      <a class="nav-link" href="/galleryAdmin">
        <i class="mdi mdi-image-multiple menu-icon"></i>
        <span class="menu-title">Gallery</span>
      </a>
    </li>
          </ul>
        </nav>
      <!-- .navbar -->

   <!-- End Header -->

  @yield('content')
  
  <!-- ======= Footer ======= -->
        <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer> -->

   <!-- plugins:js -->
   <script src="assets2/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets2/vendors/chart.js/chart.umd.js"></script>
    <script src="assets2/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets2/js/off-canvas.js"></script>
    <script src="assets2/js/template.js"></script>
    <script src="assets2/js/settings.js"></script>
    <script src="assets2/js/hoverable-collapse.js"></script>
    <script src="assets2/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets2/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets2/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>