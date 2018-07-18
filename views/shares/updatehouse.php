<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Update House!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label>House ID</label>
        <input type="number" name="id" class="form-control" />
      </div>
    
    	<div class="form-group">
    		<label>House Title</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Location</label>
    		<textarea name="location" class="form-control"></textarea>
    	</div>
    	
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/HouseList">Cancel</a>
    </form>
  </div>
</div>