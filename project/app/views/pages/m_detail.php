<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach($data['users'] as $user) : ?>
<div class="card card-body bg-primary mt-5 ">
 <table>
 <tr>
 <th> Name Of Contractor</th>
 <th> Name Of Driver</th>
 <th> Entry Weight</th>
 <th> Exit Weight</th>
 </tr>
 <tr>
 <td><?php echo $user->contractor_id	; ?></td>
 <td><?php echo $user->name; ?></td>
 <td><?php echo $user->entry_wt; ?> </td>
 <td><?php echo $user->exit_wt; ?> </td>
  </tr>
  </table>    
  
  <?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
