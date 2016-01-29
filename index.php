<?php require_once('header.php'); ?>
<div>
	Candidate Details
</div>
<br />
<br />
<div>
	<form action="insert.php" method="post">
		<table border="1" cellpadding="4" cellspacing="0">
			<tr>
				<td> Name : </td>
				<td>
				<input name="name" type="text" autofocus="on"/>
				</td>
			</tr>
			<tr>
				<td> Address : </td>
				<td>				<textarea name="address" cols="25" rows="5"></textarea></td>
			</tr>
			<tr>
				<td> Phone : </td>
				<td>
				<input name="phone" tel="number" />
				</td>
			</tr>
			<tr>
				<td> E-mail : </td>
				<td>
				<input name="email" type="email" />
				</td>
			</tr>
			<tr>
				<td> Qualification : </td>
				<td>
				<select name="qual" >
					<option selected="">B.E </option>
					<option >B.Tech </option>
				</select></td>
			</tr>
			<tr>
				<td> Remarks : </td>
				<td>				<textarea name="remarks" cols="25" rows="5"></textarea></td>
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