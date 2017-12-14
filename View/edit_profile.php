<?php require 'inc/header.php' ?>


<div class="row">
    <div class="col-md-12">
      <div class="grid simple">
        <div class="grid-title no-border">
			<div class="page-title"><i class="fa fa-pencil"></i>
			        <h3>Edit <span class="semi-bold">Profile</span></h3>
			</div>
        </div>
        <div class="grid-body no-border">

        <form id="frm_register" method="post" class="animated fadeIn">    
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-12">
                      <input type="text" name="firstname" id="firstname" required="required" class="form-control"  placeholder="First Name" autocomplete="off" value="<?=$this->oAdmin->firstname?>" />
                      </div>
                      <div class="col-md-6 col-sm-12">
                      <input type="text" name="lastname" id="lastname" required="required" class="form-control"  placeholder="Last Name" autocomplete="off" value="<?=$this->oAdmin->lastname?>" />
                      </div>
                      <div class="col-md-12">
                      <input type="text" name="username" id="username" required="required" class="form-control"  placeholder="Username" autocomplete="off" value="<?=$this->oAdmin->username?>" readonly/>
                      </div>
                      <div class="col-md-12">
                      <input type="email" name="email" id="email" required="required" class="form-control"  placeholder="Email" autocomplete="off" value="<?=$this->oAdmin->email?>" />
                      </div>
                      <div class="col-md-12">
	                    <input type="password" name="password" id="password" class="form-control" placeholder="Password blank if not change" autocomplete="off"/>
                      </div>
                      <div class="col-md-12 col-sm-12">
	                     <input type="submit" class="btn btn-primary btn-cons"  name="updateprofile" value="Update" />
                                <?php require 'inc/msg.php' ?>
                      </div>
                    </div>
                    

                    </form>
	        
			</div>
			</div>
		</div>
	</div>

<?php require 'inc/footer.php' ?>
