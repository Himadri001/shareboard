<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Product ID</th>
      <th>User</th>
            <th>House ID</th>

      
      <th>Category Name</th>
       <th>Company Name</th>
       <th>Model</th>
       <th>Purchase Date</th>
       <th>Status</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php $id=1; foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      <td><?php echo $item['ProductID'];?></td>
      <td><?php echo $item['user'];?></td>
            <td><?php echo $item['HouseID'];?></td>

      
      <td><?php echo $item['CategoryName']; ?></td>
      <td><?php echo $item['CompanyName']; ?></td>
      <td><?php echo $item['Model']; ?></td>
      <td><?php echo $item['PurchaseDate']; ?></td>
      <td><?php echo $item['Status']; ?></td>
    
       
     </tr>
  <?php endforeach; ?>

</tbody>
</table>

