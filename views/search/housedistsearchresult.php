
<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
     <th>House ID</th>
      
            <th>User</th>

       <th>Product ID</th>
      
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
            <td><?php echo $item['user']; ?></td>
     
      
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
 <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/HouseList">Back</a>
</div>