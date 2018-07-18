
<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>House ID</th>
      <th>Category Name</th>
       <th>Amount</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      <td><?php echo $item['HouseID'];   ?></td>
      <td><?php echo $item['CategoryName']; ?></td>
      <td><?php echo $item['Amount']; ?></td>
      
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
<li><a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>search/housedistsearch">Search By House ID</a></li>
  
   
</div>
