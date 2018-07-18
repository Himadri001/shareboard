<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Delete Product!</h3>
  </div>
 
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    
        <div class="form-group">
             <label>Product ID</label>
             <input type="number" name="ProductID"   > 
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
         <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/totalassests">Cancel</a>
        </form>
        </div>
        </div>