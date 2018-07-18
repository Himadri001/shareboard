
   
	<div>
	<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>House Name</th>
      <th>Amount</th>
      
    </tr>
  </thead>
  <tbody>
<?php foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>
      <td><?php echo $item['HouseName']; ?></td>
      <td><?php echo $item['Amount']; ?></td>
      
     </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>