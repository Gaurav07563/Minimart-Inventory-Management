<?php
 session_start();
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM user WHERE username= :empid");
	$result->bindParam(':empid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
	
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<head>
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
	<style type="text/css">/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 10px;
  margin-top: 10px;
}

#message p {
  padding: 1px 35px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}</style>
</head>
<body>

<form action="savechangepassword.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Change Password</h4></center><hr>
<div id="ac">
	<?php
/*<input type="hidden" name="memi" value="<?php echo $id; ?>" />*/
?>
<span>Email: </span><input type="email" readonly style="width:265px; height:30px;" name="email" value="<?php echo $row['username']; ?>" /><br>
<span>New Password : </span><input type="text" style="width:265px; height:30px;" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]){8,15}"  title="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special characterand max 15 character"name="npassword" id="pass" /><br>
<span>Confirm Password : </span><input type="text" style="width:265px; height:30px;" name="cpassword" id="c_pass" /><br>
<br>
<CENTER>
<button class="btn btn-success btn-block btn-large" style="width:250px;"><i class="icon icon-save icon-large" onclick="return change_pass()"></i> Save Changes</button>
</CENTER>
</div>
</div>
</form><div id="message">
  <h4>Password must contain the following:</h4>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="special" class="invalid">A <b>special character</b></p>
  <p id="min" class="invalid">Minimum <b>8 characters</b> 
   <p id="max" class="invalid">less than <b> 15 characters</b></p>
  
</div>
				
<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var min = document.getElementById("min");
var special = document.getElementById("special");
var max = document.getElementById("max");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8  ) {
    min.classList.remove("invalid");
    min.classList.add("valid");
  } else {
    min.classList.remove("valid");
    min.classList.add("invalid");
  }
  if(myInput.value.length <= 15  ) {
    max.classList.remove("invalid");
    max.classList.add("valid");
  } else {
    max.classList.remove("valid");
    max.classList.add("invalid");
  }
  var specials = /[@$!%*?&]/g;
  if(myInput.value.match(specials)) {  
    special.classList.remove("invalid");
    special.classList.add("valid");
  } else {
    special.classList.remove("valid");
    special.classList.add("invalid");
  }
}
</script>

</body>
<?php
}
?>
