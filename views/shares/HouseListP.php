<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>House ID</th>
      <th>House Name</th>
      <th>Location</th>
      <th>Product Id</th>
      <th>Category Id</th>
            <th>Category Name</th>

      <th>Model</th>
     <th>Company Name</th>
      <th>Purchase Date</th>
     <th>Status</th>
     
     
     
      
    </tr>
  </thead>
  <tbody>
<?php foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>
<td><?php echo $item['HouseID']; ?></td>
      <td><?php echo $item['HouseName']; ?></td>
      <td><?php echo $item['Location']; ?></td>
            <td><?php echo $item['ProductID']; ?></td>
<td><?php echo $item['CategoryID']; ?></td>

     <td><?php echo $item['CategoryName']; ?></td>
      <td><?php echo $item['Model']; ?></td>
      <td><?php echo $item['CompanyName']; ?></td>
      <td><?php echo $item['PurchaseDate']; ?></td>

      <td><?php echo $item['Status']; ?></td>
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/newproduct">Add Product To A House</a></li>

  <li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/deleteproduct">Delete Product</a></li>
  
    <li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>search/housedistsearch">Check For House Wise Distribution</a></li>
</div>