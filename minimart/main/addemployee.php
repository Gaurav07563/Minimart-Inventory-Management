<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveemployee.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Employee</h4></center>
<hr>
<div id="ac">
<span>Emp ID : </span><input type="text" style="width:265px; height:30px;" name="id" required/><br>
<span>Name : </span><input type="text" style="width:265px; height:30px;" name="name" required/><br>
<span>Gender : </span> Male   <input type="radio"name="gender" id="male" value="male"> Female   <input type="radio" name="gender" id="female" value="female"><br>


<span>DOB : </span><input type="date" style="width:265px; height:30px;" name="dob" required/><br>
<span>Contact No. : </span><input type="tel" style="width:265px; height:30px;"   pattern="[6789][0-9]{9}" title="Must contain exactly 10 digits starting with 6-9" name="contact" required /><br>
<span>Email. : </span><input type="email" style="width:265px; height:30px;" name="email" required /><br>
<span>Address : </span><textarea style="width:265px; height:80px;" name="address" required/></textarea><br>
<span>Salary : </span><input type="number" style="width:265px; height:30px;" name="salary" required /><br>
<span>Post : </span><select name="post"  style="width:265px; height:30px; margin-left:-5px;" >
 					<option value="admin">Admin</option>
 					<option value="employee">Employee</option>
</select><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:265px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>