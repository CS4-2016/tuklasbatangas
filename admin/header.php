<?php
    require_once("dbconn.php");

    $db = new db();
	$db -> Connect();

    $type = $_SESSION['usertype'];
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tuklas Batangas</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Bootstrap Material Design -->
    <link href="css/ripples.css" rel="stylesheet">
    <link href="css/bootstrap-material-design.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/tuklas.css">
    <link rel="stylesheet" href="css/skin-green-light.css">
    <link rel="stylesheet" href="css/style.css">    

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/tuklasbatangas-favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/tuklasbatangas-favicon.ico" type="image/x-icon">    
</head>

<body class="hold-transition skin-green-light sidebar-mini fixed">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->   <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../img/tuklas.png" class="site-logo"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg logo-index">Tuklas Batangas</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        
        <!-- Username on the right side of the SPA module -->
        <div class="navbar-custom-menu unselectable" style="padding: 15px; cursor: pointer"> 
            <div id="header-user-click">
                <?php echo $username; ?>
                <i class="fa fa-user fa-fw"></i>
                <i class="fa fa-caret-down"></i>
            </div>
            <ul class="unselectable" id="header-drop-down">
                <li><a href="user-profile.php"><i class="fa fa-user"></i> User Profile</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </nav>
  </header>
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main Navigation</li>
            
            <!-- ADMIN HEADER -->
            <?php if($type == 'admin'){ ?>
                <li class="active"><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <?php } ?>
            
            <!-- ADMIN HEADER -->
            <?php if($type == 'poi'){ ?>
                <li class="active"><a href="points-of-interests.php?x=<?php echo $username; ?>"><i class="fa fa-dot-circle-o"></i> <span>My Points of Interests</span></a></li>
            <?php } ?>
            
            <!-- ADMIN HEADER -->
            <?php if($type == 'lto'){ ?>
                <li class="active"><a href="users.php"><i class="fa fa-users"></i> <span>POI Accounts</span></a></li>
            <?php } ?>
            
                
          
<!--
        <li><a href="#"><i class="fa fa-link"></i> <span>Clients</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>Data Sources</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Excel Spreadsheet</a></li>
            <li><a href="#">Databases</a></li>
          </ul>
        </li>
-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">