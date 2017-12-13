  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="user-info">
          <span class="greeting ">Welcome <?php print_r($_SESSION['username']); ?></span>
          <span class="username text-capitalize">
          </span>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">&nbsp;</p>
       <ul>
        <li> <a href="<?=ROOT_URL?>?p=todo&amp;a=all" > <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span><!--  <span class="arrow open"></span> --> </a> 
		    </li>
        <li> <a href="<?=ROOT_URL?>?p=todo&amp;a=add"> <i class="fa fa fa-plus"></i> <span class="title">Add Todo </span> </a>
        </li>  
      </ul>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
 