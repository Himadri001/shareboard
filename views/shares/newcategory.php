<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add New Category!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Category Name</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/categories.php">Cancel</a>
    </form>
  </div>
</div>