<?php
	include('../connect.php');


	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM employees WHERE emp_id= :empid");
	$result->bindParam(':empid', $id);
	$result->execute();

	
	$result = $db->prepare("DELETE FROM user WHERE id= :empid");
	$result->bindParam(':empid', $id);
	$result->execute();


	
?>