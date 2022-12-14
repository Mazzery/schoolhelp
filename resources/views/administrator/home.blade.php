<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Admin| Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/assets/AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="/extcss/SchoolH.css">

</head>
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="https://e7.pngegg.com/pngimages/60/441/png-clipart-orange-h-logo-hosted-graphite-logo-icons-logos-emojis-tech-companies-thumbnail.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">HOME</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="ion-log-out"></i>
        </a>
      <li class="nav-item">
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="/extcss/help.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SchoolHelp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">SchoolID</a>
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('submit_request') }}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Submit a Request
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="javascript:;" onclick="allRequest()" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                View all Requests
              </p>
            </a>
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
            <h1 class="m-0">School Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
    @endif
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-7">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>TUTORIAL</h3>
                <p>Submit Tutorial Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-plus"></i>
                </div>
                <div class ="col-md-12 text-center">
              <a href="{{ route('submit_request') }}"><button class="tutor" >SELECT</button></a></div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>RESOURCE</h3>
                <p>Submit Resource Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <div class ="col-md-12 text-center">
              <a href="{{ route('resource_request') }}"><button class="tutor" >SELECT</button></a></div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
              </div>
        <!-- /.card -->
      </div>
              <!-- /.card-body-->
            <!-- /.card -->
              <!-- /.card-header -->
              <div class="card-body pt-0">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://help.edu.my/">Help University</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>BIT216</b> Software Engineering Priciples
    </div>
  </footer>
<script src="inde.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- jQuery -->
  <script src="/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="/assets/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="/assets/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/assets/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/AdminLTE/dist/js/adminlte.js"></script>
@auth
    <div class="modal fade" id="modal-request" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">All Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>REQUEST TYPE</th>
                                <th>DESCRIPTION</th>
                                <th>DATE POSTED</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (\App\Models\RequestData::all() as $key => $item)
                                @php
                                    $list_status = [
                                        'pending' => 'warning',
                                        'new' => 'primary',
                                        'closed' => 'secondary',
                                    ];
                                @endphp
                                  @if ($item->school->id == Auth::user()->school_id)  
                                    <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->request_type}}</td>
                                      <td>{{$item->description}}</td>
                                      <td>{{$item->created_at->translatedFormat('l, d F Y H:i')}}</td>
                                      <td><span class="text-capitalize text-white badge badge-{{$list_status[strtolower($item->status)]}}">{{$item->status}}</span></td>
                                      <td>
                                          <a href="javascript:;" onclick="modalOffer('{{route('school_admin_home',['detail' => $item->id])}}')" class="btn btn-sm btn-primary">Detail</a>
                                      </td>
                                    </tr>
                                  @endif
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endauth

    @auth
    <div class="modal fade" id="modal-offers" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">All Offers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-offers-body"></div>
            </div>
        </div>
    </div>
    @endauth

    @auth
    <div class="modal fade" id="modal-review" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">Selected Offer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body-review"></div>
            </div>
        </div>
    </div>
    @endauth
    <script>
        function allRequest() {
            $("#modal-request").modal()
        }
        function modalOffer(url) {
            $("#modal-offers").modal()
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    $("#modal-offers-body").html(data)
                },
                erorr: function (data) {
                    console.log(data)
                }
            })
        }
        function modalReview(url) {
            $("#modal-review").modal()
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    $("#modal-body-review").html(data)
                },
                erorr: function (data) {
                    console.log(data)
                }
            })
        }

    </script>
</body>
</html>
