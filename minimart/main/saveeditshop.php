<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['email'];
$e = $_POST['gstin'];
$f = $_POST['note'];
// query
$sql = "UPDATE shop 
        SET shop_name=?, shop_address=?, shop_contact=?, shop_email=?, shop_gstin=?, shop_note=?
		WHERE shop_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: shop.php");

?>