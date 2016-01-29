<?php

	require_once('db.php');
	require_once('header.php');
?>
<div>
	<table border="1" cellpadding="4" cellspacing="0">
		<thead>
			<tr>
				<th>
					Sl.No.
				</th>
				<th>
					Name
				</th>
				<th>
					Address
				</th>
				<th>
					Phone
				</th>
				<th>
					E-mail
				</th>
				<th>
					Qualification
				</th>
				<th>
					Remarks
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>
		<tbody>
<?php
	$sql = "SELECT id, candname, address, phone, email, qual, remarks
	  		FROM cand";
	$res = pg_query($sql);
	$rows = pg_fetch_all($res);
	$i = 0;
	if($rows)
	foreach($rows as $h){
		$i++;
		echo "<tr>
			<td>".$i."</td>
			<td>".$h["candname"]."</td>
			<td>".$h['address']."</td>
			<td>".$h['phone']."</td>
			<td>".$h['email']."</td>
			<td>".$h['qual']."</td>
			<td>".$h['remarks']."</td>
			<td><a href='edit.php?id=".$h['id']."'>Edit</a><br/><a href='delete.php?id=".$h['id']."'>Delete</a></td>
		</tr>";

	}
	
?>

</tbody>
		<tfoot>
			<tr>
				<td colspan="8" align="center">****</td>
			</tr>
		</tfoot>
	</table>
</div>
<br /><br />
<div>
	<a href="index.php"> Add Candidates</a>
</div>
<?php require_once('footer.php'); ?>