<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Disrtibute a product!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Product ID</label>
    		<input type="number" name="PID" class="form-control" />
        <lable>Check available products</lable>
        <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>shares/availableproducts">Look Into</a>
    	</div>
    	
      <div class="form-group">
        <label>Category ID</label>
        <input type="number" name="CID" class="form-control"/>
        <label>Check For available Categories</label>
        <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>shares/availablecategories">Look Into</a>
      </div>
      <div class="form-group">
        <label>House ID</label>
        <input type="number" name="HID" class="form-control"/>
        <label>Check For available Houses</label>
        <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>shares/availablehouses">Look Into</a>
      </div>
    	
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/HouseListP">Cancel</a>
    </form>
  </div>
</div>