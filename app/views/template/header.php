<!DOCTYPE html>
<!-- saved from url=(0036)http://localhost/simklinik/index.php -->
<html style="height: auto; min-height: 100%;"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengaduan Masyarakat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--ICon-->
  <link href="" rel="icon" type="image/x-icon">
  <link rel="stylesheet" href="<?= BASEURL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel='stylesheet' href="<?= BASEURL; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel='stylesheet' href="<?= BASEURL; ?>bower_components/Ionicons/css/ionicons.min.css">
  
  
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel='stylesheet' href="<?= BASEURL; ?>dist/css/skins/skin-blue.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= BASEURL; ?>plugins/iCheck/square/blue.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= BASEURL; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= BASEURL; ?>bower_components/select2/dist/css/select2.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="<?= BASEURL; ?>dist/css/AdminLTE.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= BASEURL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
  <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
  <![endif]-->
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="<?= BASEURL; ?>dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'>

  </head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">

<div class="wrapper" style="height: auto; min-height: 100%;">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?= BASEURL; ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="glyphicon glyphicon-leaf"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM</b>Klinik</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <a href="<?= BASEURL; ?>admin/logout/"> <i class="fa  fa-power-off"></i> Sign Out</a>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="<?= BASEURL; ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"></div>
        <div class="pull-left info">
          <p>Admin</p>          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>Kompetensi"><i class="fa fa-users"></i> <span>Kompetensi</span></a></li>    
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>"><i class="fa fa-list-alt"></i> <span>Pendaftaran</span></a></li>
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>"><i class="fa fa-check-square"></i> <span>Pengembalian Berkas</span></a></li>    
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>"><i class="fa fa-user"></i> <span>Seleksi</span></a></li>    
        <li class=""><a class="navigasi" href="<?= BASEURL; ?>"><i class="fa fa-file-text-o"></i> <span>Pengguna</span></a></li>    

      </ul>      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper" id="isi" style="min-height: 508px;">

<section class="content-header">
      <h1>
        <?= $data['judul'];?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= BASEURL; ?>"><i class="fa <?= $data['icon'];?>"></i> Home</a></li>
        <li class="active"><?= $data['judul'];?></li>
      </ol>
</section>