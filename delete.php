<?php
	require_once('db.php');
	
	$id = $_REQUEST['id'];
	
	$sql = "DELETE FROM cand WHERE id=".$id;
	pg_query($sql);
	
	echo "Deleted Successfully.";
	header("refresh:1;url=view.php");

?>