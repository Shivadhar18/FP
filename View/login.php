<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Todo List - Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?=ROOT_URL?>static/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?=ROOT_URL?>static/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="<?=ROOT_URL?>static/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?=ROOT_URL?>static/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<body class="error-body no-top lazy"  data-original="<?=ROOT_URL?>static/assets/img/work.jpg"  style="background-image: url('<?=ROOT_URL?>static/assets/img/work.jpg')"> 
<div class="container">
	<div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
			<div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          		<h2 class="normal">Sign in to Todo List</h2>
        	</div>
			<div class="tiles grey p-t-20 p-b-20 text-black">
				<form id="frm_login" method="post" class="animated fadeIn">    
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6 ">
				        <input type="text" name="email" id="email" required="required" class="form-control"  placeholder="Email"/>
                      </div>
                      <div class="col-md-6 col-sm-6">
	                    <input type="password" name="password" id="password" required="required" class="form-control" placeholder="Password" />
                      </div>
                      <div class="col-md-12 col-sm-12">
	                     <input type="submit" class="btn btn-primary btn-cons" id="login_toggle" value="Log In" />
   
                                <?php require 'inc/msg.php' ?>
                      </div>
                    </div>
                    <div class="row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                    	<div class="col-md-12">
                    		<a href="<?=ROOT_URL?>?p=admin&amp;a=create_account">Create New Account</a>
                    	</div>
                    </div>

                    </form>
             </div>

            </div>
        </div>
   	</div>
</body>
</html>

