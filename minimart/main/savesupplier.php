<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['address'];
$f = $_POST['gstin'];
$c = $_POST['contact'];
$d = $_POST['cperson'];
$e = $_POST['note'];
// query
$sql = "INSERT INTO supliers (suplier_name,suplier_address,suplier_gstin,suplier_contact,contact_person,note) VALUES (:a,:b,:f,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':f'=>$f,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: supplier.php");


?>