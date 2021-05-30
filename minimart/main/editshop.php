<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM shop WHERE shop_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditshop.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Shop Info..</h4></center><hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Shop ID : </span><input type="text" style="width:265px; height:30px;" name="id" readonly value="<?php echo $row['shop_id']; ?>" />
<span>Shop Name : </span><input type="text" style="width:265px; height:30px;" name="name" value="<?php echo $row['shop_name']; ?>" /><br>

<span>Adress : </span><textarea style="width:265px; height:80px;" name="address"><?php echo $row['shop_address']; ?></textarea><br>

<span>Contact No.: </span><input type="text" style="width:265px; height:30px;" name="contact" value="<?php echo $row['shop_contact']; ?>" /><br>

<span>Email : </span><input type="text" style="width:265px; height:30px;" name="email" value="<?php echo $row['shop_email']; ?>" /><br>

<span>GSTIN : </span><input type="text" style="width:265px; height:30px;" name="gstin" value="<?php echo $row['shop_gstin']; ?>" /><br>

<span>Note : </span><textarea style="width:265px; height:80px;" name="note"><?php echo $row['shop_note']; ?></textarea><br>


<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>
