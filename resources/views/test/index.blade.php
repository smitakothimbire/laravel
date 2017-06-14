


<table border="1">
<tr>
	<th>id</th>
	<th>First name</th>
	<th>Last name</th>
	<th>Email id</th>
	<th>Gender</th>
	<th>Create Date</th>
</tr>
<?php  foreach ($users as $vals) { ?>
<tr>
	<td><?php echo $vals->id; ?></td>
	<td><?php echo $vals->first_name; ?></td>	
	<td><?php echo $vals->last_name; ?></td>
	<td><?php echo $vals->email_id; ?></td>
	<td><?php echo $vals->gender; ?></td>
	<td><?php echo $vals->create_date; ?></td>
</tr>  
<?php } ?>
 </table>