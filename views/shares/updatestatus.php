<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Update Product Details!</h3>
  </div>
 
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    
        <div class="form-group">
             <label>Product ID</label>
             <input type="number" name="ProductID"  placeholder="enter product id you want to update" > 
        </div>
        <div class="form-group">
             <label>Model</label>
             <input type="text" name="mdl" placeholder="new model name"  > 
        </div>
         <div class="form-group">
             <label>User Name</label>
             <input type="text" name="uname"  placeholder="new status" > 
        </div>
          <div class="form-group">
             <label>Status</label>
             <input type="text" name="Status"  placeholder="new status" > 
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
         <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/totalassests">Cancel</a>
        </form>
        </div>
        </div>