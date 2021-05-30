<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM employees WHERE emp_id= :empid");
	$result->bindParam(':empid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditemployee.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Employee</h4></center><hr>
<div id="ac">
	<?php
/*<input type="hidden" name="memi" value="<?php echo $id; ?>" />*/
?>
<span>EMP ID : </span><input type="text" readonly style="width:265px; height:30px;" name="empid" value="<?php echo $row['emp_id']; ?>" /><br>
<span>Name : </span><input type="text" style="width:265px; height:30px;" name="name" value="<?php echo $row['emp_name']; ?>" required /><br>
<span>Gender :</span>Male   <input type="radio"name="gender" id="male" value="male" required >Female     <input type="radio" name="gender" id="female" value="female" required ><br>

<span>DOB : </span><input type="date" style="width:265px; height:30px;"  required  name="dob" value="<?php echo $row['emp_dob']; ?>" /><br>
<span>Contact No.: </span><input type="tel" style="width:265px; height:30px;"   pattern="[789][0-9]{9}" title="Must contain exactly 10 digits starting with 6-9" required  name="contact" value="<?php echo $row['emp_contact']; ?>" /><br>
<span>Email: </span><input type="email" style="width:265px; height:30px;" name="email" required  value="<?php echo $row['emp_email']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:50px;" required name="address" value="<?php echo $row['emp_address']; ?>" /><br>
<span>Salary : </span><input type="text" style="width:265px; height:30px;" required name="salary" value="<?php echo $row['emp_salary']; ?>" /><br>
<span>Post : </span><select name="post"  style="width:265px; height:30px; margin-left:-5px;" required >
 					 					<option value="admin">Admin</option>
 					<option value="employee">Employee</option>
 				</select>
 <div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>
