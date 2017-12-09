<?php require 'inc/header.php' ?>


<div class="row">
    <div class="col-md-12">
      <div class="grid simple">
        <div class="grid-title no-border">
			<div class="page-title"><i class="fa fa-tasks"></i>
			        <h3>Add <span class="semi-bold">Todo List</span></h3>
			</div>
        </div>
	<div class="col-md-12 text-center">
		<?php require 'inc/msg.php' ?>
	</div>

        <div class="grid-body no-border">
	        <form id="add_category" action="" method="post">
                <div class="form-group">
	    	        <label class="form-label">Enter Category</label>
			        <input type="text" name="title" id="title" required="required" class="form-control"/>
                	<p class="text-danger" id="title_msg"></p>  
                </div>  

                <div class="form-group">
	    	        <label class="form-label">Enter Category</label>
			        <textarea name="body" id="body" rows="5" cols="35" required="required" class="form-control"></textarea>
			    	<p class="text-danger" id="title_msg"></p>  
                </div>  

                <div class="form-actions">  
				<div class="pull-right">

                    <input  type="submit" class="btn btn-success btn-cons" name="add_submit" value="Add"></button>
					<button type="reset" class="btn btn-white btn-cons">Clear</button>

				</div></div>
    			</form>
			</div>
			</div>
		</div>
	</div>
<!-- 
<form action="" method="post">

    <p><label for="title">Title:</label><br />
    </p>

    <p><label for="body">Body:</label><br />
        <textarea name="body" id="body" rows="5" cols="35" required="required"></textarea>
    </p>

    <p><input type="submit" name="add_submit" value="Add" /></p>
</form>
 -->
<?php require 'inc/footer.php' ?>
