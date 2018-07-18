<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Product ID</th>
            <th>House ID</th>

      <th>Category ID</th>
      <th>Category Name</th>
       <th>Company Name</th>
       <th>Model</th>
       <th>Purchase Date</th>
       <th>Status</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      <td><?php echo $item['ProductID'];?></td>
            <td><?php echo $item['HouseID'];?></td>

      <td><?php echo $item['CategoryID']; ?></td>
      <td><?php echo $item['CategoryName']; ?></td>
      <td><?php echo $item['CompanyName']; ?></td>
      <td><?php echo $item['Model']; ?></td>
      <td><?php echo $item['PurchaseDate']; ?></td>
      <td><?php echo $item['Status']; ?></td>
    
       
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/addproduct">Add New Product To Inventory</a></li>

<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/deleteproduct">Delete Product</a></li>

<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/searchforproductid">Search By Product ID</a></li>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>search/housedistsearch">Search By House ID</a></li>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/updatestatus">Update Product Status</a></li>


</div>