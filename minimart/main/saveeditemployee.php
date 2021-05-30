<?php
// configuration
include('../connect.php');

// new data

$a = $_POST['empid'];
$b = $_POST['name'];
$c = $_POST['gender'];
$d = $_POST['dob'];
$e = $_POST['contact'];
$f = $_POST['email'];
$g = $_POST['address'];
$h = $_POST['salary'];
$i = $_POST['post'];
// query
$sql = "UPDATE employees 
        SET emp_name=?, emp_gender=?, emp_dob=?, emp_contact=?, emp_email=?, emp_address=?, emp_salary=?, emp_post=?
		WHERE emp_id=?";
$q = $db->prepare($sql);
$q->execute(array($b,$c,$d,$e,$f,$g,$h,$i,$a));
header("location: employee.php");

?>


// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];
// query
$sql = "UPDATE supliers 
        SET suplier_name=?, suplier_address=?, suplier_contact=?, contact_person=?, note=?
		WHERE suplier_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: supplier.php");