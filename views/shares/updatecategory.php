<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Update Category!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>Category ID</label>
        <input type="number" name="cid" class="form-control" />
      </div>
    
    	<div class="form-group">
    		<label>Category Name</label>
    		<input type="text" name="upname" class="form-control" />
    	</div>
    	<div class="form-group">
    		
    	
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/categories">Cancel</a>
    </form>
  </div>
</div>