<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | LERUfic</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @yield('frontcss')
  <link rel="stylesheet" href="{{URL::asset('css/semantic.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/semantic.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/skin-red.min.css')}}">
  <style type="text/css">
    .content-wrapper,
    .right-side {
      background-color:#f1f1f1;
      background-image:url({{URL::asset('noise.png')}});
      background-repeat:repeat;
      background-position:top left;
      background-attachment:fixed;
      min-height: 100%;
      z-index: 800;
    }
  </style>
  @yield('backcss')
</head>
<body>
  <div class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    @yield('navbar')
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
              <img src="{{URL::asset('logomin.png')}}">
            </div>
        <div class="pull-left info">
          <p>Aguel Satria Wijaya</p>
          <p></p>
        </div>
      </div>
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container"></span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Postingan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Semua</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Diterbitkan</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-reply"></i>
              <span>Komentar</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Lihat Komentar Baru</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>
    <aside class="right-side">
      <section class="content">
        @yield('content')
      </section>
    </aside>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io/">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>
  </div>
  </div>
  @yield('modal')
  @yield('frontjs')
  <script src="{{URL::asset('js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/semantic.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/app.min.js')}}" type="text/javascript"></script>
  @yield('backjs')
</body>
</html>