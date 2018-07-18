<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Product ID</th>
      <th>Category ID</th>
       <th>Category Name</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php $id=1; foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      <td><?php echo $item['ProductID'];?></td>
      <td><?php echo $item['CategoryID']; ?></td>
      <td><?php echo $item['CategoryName']; ?></td>
       
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares/newproduct">Back</a>