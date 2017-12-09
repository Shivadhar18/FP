<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?=\TestProject\Engine\Config::SITE_NAME?></title>
<!-- <title><?php echo $title; ?> - Add Category</title>
 -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="<?=ROOT_URL?>static/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?=ROOT_URL?>static/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?=ROOT_URL?>static/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?=ROOT_URL?>static/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script src="<?=ROOT_URL?>static/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>

<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="dashboard.php"> <?php // echo $title; ?> <!--<img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/>--></a>
      <!-- END LOGO -->
      <ul class="nav pull-right notifcation-center">
        <li class="dropdown" id="header_task_bar"> <a href="dashboard.php" class="dropdown-toggle active" data-toggle="">
          <div class="iconset top-home"></div>
          </a> </li>
        <!--<li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" >
          <div class="iconset top-messages"></div>
          <span class="badge" id="msgs-badge">2</span> </a></li>-->
        <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle">
          <div class="iconset top-chat-white "></div>
          </a> </li>
      </ul>
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <!--<li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
          <li class="m-r-10 input-prepend inside search-form no-boarder"> <span class="add-on"> <span class="iconset top-search"></span></span>
            <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
          </li>-->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right">
        <ul class="nav quick-section ">
          <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
            <div class="iconset top-settings-dark "></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href="#"> My Account</a> </li>
              <li class="divider"></li>
              <li><a href="<?=ROOT_URL?>?p=admin&amp;a=logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<div class="page-container row-fluid">
<?php require("slide_menu.php"); ?>
  <div class="page-content">
    <div class="content">