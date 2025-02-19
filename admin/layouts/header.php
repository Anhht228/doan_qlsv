<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang quản trị</title>
    <!-- plugins:css -->

    <link rel="stylesheet" href="../admin/src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../admin/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../admin/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../admin/src/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../admin/src/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../admin/src/assets/images/favicon-dhv.png" />
  </head>
  <body class="with-welcome-text">
  <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="../admin/index.php">
              <img src="../admin/src/assets//images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="../admin/index.php">
              <img src="../admin/src/assets//images/logo-dhv.png" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Xin chào, <span class="text-black fw-bold"><strong>Thành Nguyễn</strong></span></h1>
              <h3 class="welcome-sub-text">Bắt đầu ngày làm việc!!!</h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
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
                  <p class="mb-0 fw-medium float-start">Bạn có 4 thông báo mới! </p>
                  <span class="badge badge-pill badge-primary float-end">Xem tất cả</span>
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
                  <p class="mb-0 fw-medium float-start">Bạn có 7 thư chưa đọc! </p>
                  <span class="badge badge-pill badge-primary float-end">Xem tất cả</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../admin/src/assets//images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../admin/src/assets//images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../admin/src/assets//images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
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
                <img class="img-xs rounded-circle" src="../admin/src/assets//images/faces/avatar-01.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../admin/src/assets//images/faces/avatar-01.jpg" alt="Profile image" width="42" height="42">
                  <p class="mb-1 mt-3 fw-semibold"><strong>Nguyễn Thành</strong></p>
                  <p class="fw-light text-muted mb-0">thanhnguyen22823@gmail.com@gmail.com</p>
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
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../admin/index.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Bảng điều khiển</span>
              </a>
            </li>
            <li class="nav-item nav-category">Giao diện người dùng</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_diem">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Điểm số</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_lophp">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Lớp học phần</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_khoa" >
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Khoa</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_sinhvien">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Sinh viên</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_hocphan">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Học phần</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?act=add_giangvien">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Giảng viên</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Người dùng</span>
              </a>
            </li>
          </ul>
        </nav>