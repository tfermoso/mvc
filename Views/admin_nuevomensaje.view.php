<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=URL_PATH?>/Assets/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL_PATH?>/Assets/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= URL_PATH ?>/Assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= URL_PATH ?>/Assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= URL_PATH ?>/Assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          <a href="admin/nuevomensaje" class="dropdown-item dropdown-footer">Enviar nuevo mensaje</a>
        </div>
      </li>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Main Container -->
      <section>
        <form action="">
          <label for="">Destinatario</label>
        </form>
      </section>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
        
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
         
          
          

          
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
          
         
        
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=URL_PATH?>/Assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=URL_PATH?>/Assets/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?=URL_PATH?>/Assets/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=URL_PATH?>/Assets/js/dashboard2.js"></script>
</body>
</html>
