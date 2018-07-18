<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add New Product!</h3>
  </div>
 
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    
        <div class="form-group">
             <label>Category ID
             <input type="number" name="cid"   > 
             <label>Check For available Categories</label>
        <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>shares/availablecategories">Look Into</a>
        </div>
         <div class="form-group">
       <label>House ID</label>
<input  name='hid' type='number' class="form-control" placeholder=""/>

        </div>
        <div class="form-group">
        <label>User Name</label>
        <input type="text" name="uname" class="form-control" />
      </div>
        
    	<div class="form-group">
    		<label>Company Name</label>
    		<input type="text" name="cname" class="form-control" />
    	</div>
    	<div class="form-group">
            <label>Model</label>
            <input type="text" name="modl" class="form-control" />
        </div>
    	<div class="form-group">
    		<label>Purchase Date</label>
    		<input type="text" name="pdate" class="form-control" />
    	</div>
        <div class="form-group">
            <label>Status</label>
<input  name='status' type='text' class="form-control" placeholder=""/>
</div>
<div class="form-group">
           
        
        
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>