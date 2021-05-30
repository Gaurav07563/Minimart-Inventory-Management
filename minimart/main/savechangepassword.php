<?php
// configuration
session_start();

$con=mysqli_connect('localhost','root','','sale');

$b=$_SESSION['SESS_USER_NAME'];


$c = $_POST['npassword'];
$d = $_POST['cpassword'];


if($c != $d)
{
?>
	<script>alert('Password Mismatch')
		document.location='profile.php';
	</script>
<?php
}
else
{



// query
$sql =mysqli_query($con,"UPDATE user SET password='$c' WHERE username='$b'");
?>

	<script>alert('Password Updated Successfully..!')
		document.location='profile.php';
	</script>

<?php
}
?>
