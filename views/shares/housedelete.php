<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Delete House!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>House Number</label>
    		<input type="number" name="title" class="form-control" />
    	</div>
    	
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/HouseList">Cancel</a>
    	</form>
    	</div>
    	</div>