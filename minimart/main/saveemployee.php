<?php
//session_start();
//include('../connect.php');
include('../connection.php');

$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['gender'];
$d = $_POST['dob'];
$e = $_POST['contact'];
$f = $_POST['email'];
$g = $_POST['address'];
$h = $_POST['salary'];
$i = $_POST['post'];


$q2=mysqli_query($con,"select * from employees where emp_id='$a'and emp_email='$f'");
$q3=mysqli_query($con,"select * from employees where emp_email='$f'");
$q4=mysqli_query($con,"select * from employees where emp_id='$a'");




if(mysqli_num_rows($q2))
{
?>
	<script>alert('Both Email and Employee ID already exists..!')
			document.location="employee.php";
	</script>

<?php

}

elseif(mysqli_num_rows($q3))
{
?>
	<script>alert('Email id already exists..!')
			document.location="employee.php";
	</script>

<?php

}
elseif(mysqli_num_rows($q4))
{
?>
	<script>alert('Employee id already exists..!')
			document.location="employee.php";
	</script>

<?php

}



else
{


	// query
	$sql =mysqli_query($con,"INSERT INTO employees VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
	
	$sql1 =mysqli_query($con, "INSERT INTO user VALUES ('$a','$f','$d','$b','$i')");
	// $q = $db->prepare($sql);
	// $q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i));
	?> <script>alert('Employee Details Successfully Added..!')
			document.location="employee.php";
	</script>
<?php
}
?>