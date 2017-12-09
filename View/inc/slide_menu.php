  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"><img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username"><?php  //echo $_SESSION['admin']; ?> <!-- <span class="semi-bold">Smith</span> --></div>
<!--           <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
 -->        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">&nbsp;</p>
  <!--     <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
   -->    <ul>
        <li> <a href="#" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span><!--  <span class="arrow open"></span> --> </a> 
		      <!--<ul class="sub-menu">
            <li > <a href="dashboard.php"> Dashboard v1 </a> </li>
            <li class="active"> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul>-->
		    </li>
        <li> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">Todo List</span> <span class="arrow open"></span> </a>
            <ul class="sub-menu">
              <li > <a href="#">Add  </a> </li>
              <li > <a href="">List</a> </li>
            </ul>
        </li>  
      </ul>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
 