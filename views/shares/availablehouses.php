<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      
      <th>House ID</th>
       <th>House Name</th>
        <th>House Location</th>
      
      
    </tr>
  </thead>
  <tbody>
 
  <?php $id=1; foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      
      <td><?php echo $item['HouseID']; ?></td>
      <td><?php echo $item['HouseName']; ?></td>
      <td><?php echo $item['Location']; ?></td>
       
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/newproduct">Back</a>