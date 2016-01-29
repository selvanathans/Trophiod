<?php
	require_once('db.php');
	
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$qual = $_REQUEST['qual'];
	$remarks = $_REQUEST['remarks'];
	
	$sql = "UPDATE cand
			   SET candname='".$name."', address='".$address."', phone=".$phone.", 
			   		email='".$email."', qual='".$qual."', remarks='".$remarks."' 
    		 WHERE id=".$id;
	pg_query($sql);
	
	echo "Updated Successfully.";
	header("refresh:1;url=view.php");

?>