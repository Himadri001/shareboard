<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>House ID</th>
      <th>House Name</th>
       <th>Location</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      <td><?php echo $item['HouseID'];   ?></td>
      <td><?php echo $item['HouseName']; ?></td>
      <td><?php echo $item['Location']; ?></td>
      
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/newhouse">Create New House</a></li>

  <li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/housedelete">Delete House</a></li>
   <li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/updatehouse">Update House</a></li>
   </div>
  