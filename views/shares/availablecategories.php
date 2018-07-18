<div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      
      <th>Category ID</th>
       <th>Category Name</th>
      
    </tr>
  </thead>
  <tbody>
 
  <?php $id=1; foreach($viewmodel as $item) : ?>
    <tr>
    <th scope="row"></th>

      
      <td><?php echo $item['CategoryID']; ?></td>
      <td><?php echo $item['CategoryName']; ?></td>
       
     </tr>
  <?php endforeach; ?>

</tbody>
</table>
