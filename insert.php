<?php 

	require_once('db.php');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$qual = $_REQUEST['qual'];
	$remarks = $_REQUEST['remarks'];
	
	$sql = "INSERT INTO cand( candname, address, phone, email, qual, remarks)
    		VALUES ('".$name."','".$address."',".$phone.",'".$email."','".$qual."','".$remarks."' )";
	pg_query($sql);
	
	echo "Inserted Successfully.";
	header("refresh:2;url=view.php");
?>