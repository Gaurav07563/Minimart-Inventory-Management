<html>
<head>
<title>
Profile
</title>
<?php
	require_once('auth.php');
	$link=mysqli_connect("localhost","root","","sale");
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">


<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>



 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
<script type="text/javascript">

		function change_pass()
	{
		// var pass=document.getElementById("pass").value;
		// var c_pass=document.getElementById("c_pass").value;
		// if(pass!=c_pass)
		// {
		// 	return 
		alert('Password Mismatch..!');
			//return false;
		//}
		//return true;
		
	}

	</script>

<body>
<?php include('navfixed.php');?>

<?php
$position=$_SESSION['SESS_LAST_NAME'];
$username=$_SESSION['SESS_USER_NAME'];

$qry2="SELECT * FROM employees WHERE emp_email='$username'";
	$result2=mysqli_query($link,$qry2);
	$row=mysqli_fetch_assoc($result2);





if($position=='admin') {
?>


<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>                                     </li>
			<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a>                                    </li>
			<li ><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a>                                    </li>
			<li><a href="employee.php"><i class="icon-group icon-2x"></i> Employee</a>                                   </li>
			<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
			<li><a href="shop.php"><i class="icon-shopping-cart icon-2x"></i> Shop Info</a>                </li>
			<li class="active"><a href="profile.php"><i class="icon-list-alt icon-2x"></i> Profile</a>                </li>

			
					<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>     
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-group"></i> Profile
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Profile Information</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

</div>


<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th> EMP ID</th>
			<th> Name</th>
			<th> Gender</th>
			<th> DOB </th>
			<th> Mobile No </th>
			<th> Email</th>
			<th> Address </th>
			<th> Salary</th>		
			<th> Post</th>

			<th width="120"> Action </th>
			
		</tr>
	</thead>
	<tbody>
		
			
			<tr class="record">
			<td><?php echo $row['emp_id']; ?></td>
			<td><?php echo $row['emp_name']; ?></td>
			<td><?php echo $row['emp_gender']; ?></td>
			<td><?php echo $row['emp_dob']; ?></td>
			<td><?php echo $row['emp_contact']; ?></td>
			<td><?php echo $row['emp_email']; ?></td>
			<td><?php echo $row['emp_address']; ?></td>
			<td><?php echo $row['emp_salary']; ?></td>
			<td><?php echo $row['emp_post']; ?></td>
			 <td><a rel="facebox" href="changepassword.php?id=<?php echo $row['emp_email']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit" onclick="change_pass()"></i> Change Password </button></a>
			
			
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php
		}
			?>
<?php
if($position=='employee') {
?>


<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>          
			<li class="active"><a href="profile.php"><i class="icon-list-alt icon-2x"></i> Profile</a>                </li>

			
					<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>     
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-group"></i> Profile
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Profile Information</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

</div>


<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th> EMP ID</th>
			<th> Name</th>
			<th> Gender</th>
			<th> DOB </th>
			<th> Mobile No </th>
			<th> Email</th>
			<th> Address </th>
			<th> Salary</th>		
			<th> Post</th>

			<th width="120"> Action </th>
		</tr>
	</thead>
	<tbody>
		
			
			<tr class="record">
			<td><?php echo $row['emp_id']; ?></td>
			<td><?php echo $row['emp_name']; ?></td>
			<td><?php echo $row['emp_gender']; ?></td>
			<td><?php echo $row['emp_dob']; ?></td>
			<td><?php echo $row['emp_contact']; ?></td>
			<td><?php echo $row['emp_email']; ?></td>
			<td><?php echo $row['emp_address']; ?></td>
			<td><?php echo $row['emp_salary']; ?></td>
			<td><?php echo $row['emp_post']; ?></td>
			<td><a rel="facebox" href="changepassword.php?id=<?php echo $row['emp_email']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit" onclick="change_pass()"></i> Change Password </button></a>
			
			<?php
				}
			?>
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

</body>
<?php include('footer.php');?>

</html>