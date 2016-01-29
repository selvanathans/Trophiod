<?php
	require_once('db.php');
	require_once('header.php');
	$id = $_REQUEST['id'];
	
	$sql = "SELECT id, candname, address, phone, email, qual, remarks
	  		FROM cand
	  		Where id = ".$id;
	$res = pg_query($sql);
	$rows = pg_fetch_all($res);
	
?>
<div>
	Candidate Details
</div>
<br />
<br />
<div>
	<form action="update.php" method="post">
		<table border="1" cellpadding="4" cellspacing="0">
			<tr>
				<td> Name : </td>
				<td>
					<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<input name="name" type="text" autofocus="on" value="<?php echo $rows[0]['candname']; ?>"/>
				</td>
			</tr>
			<tr>
				<td> Address : </td>
				<td>				<textarea name="address" cols="25" rows="5">
					<?php echo $rows[0]['address']; ?>
				</textarea></td>
			</tr>
			<tr>
				<td> Phone : </td>
				<td>
				<input name="phone" tel="number" value="<?php echo $rows[0]['phone']; ?>" />
				</td>
			</tr>
			<tr>
				<td> E-mail : </td>
				<td>
				<input name="email" type="email" value="<?php echo $rows[0]['email']; ?>" />
				</td>
			</tr>
			<tr>
				<td> Qualification : </td>
				<td>
				<select name="qual" >
					<option value="B.E" <?php if($rows[0]['qual'] == 'B.E') echo 'selected'; ?>  >B.E </option>
					<option value="B.Tech" <?php if($rows[0]['qual'] == 'B.Tech') echo 'selected'; ?> >B.Tech </option>
				</select></td>
			</tr>
			<tr>
				<td> Remarks : </td>
				<td>				<textarea name="remarks" cols="25" rows="5">
					<?php echo $rows[0]['remarks']; ?>
				</textarea></td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" value="Submit" />
				</td>
			</tr>
		</table>
	</form>
</div>
<br /><br />
<div>
	<a href="view.php"> Candidates List</a>
</div>
<?php require_once('footer.php'); ?>