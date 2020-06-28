<html>
<head>
<title> OCD-Mate Registration Page </title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
<h1> OCD-Mate: Your personal OCD predictor </h1>
</head>
<body>

<?php
$conn = mysqli_connect('localhost/html', 'root', 'ocd', 'pdb');
$username = "";
  $email = "";
  if (isset($_POST['Next'])) {
  	$username = $_POST['uname'];
  	$email = $_POST['email'];
  	$password = $_POST['pass'];

  	$sql_u = "SELECT * FROM patients WHERE username='$username'";
  	$sql_e = "SELECT * FROM patients WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);
	
	if (empty($username) || empty($email) || empty($password) || empty($_POST['name']) || empty($_POST['mobile']))
	{
		$empty_error="Please enter all the details.";
	}else{
  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
		session_start(); 

		$_SESSION['name'] = $_POST['name']; 
		  
		$_SESSION['email_address'] = $_POST['email']; 
		  
		$_SESSION['mobile_number'] = $_POST['mobile'];

		$_SESSION['username'] = $_POST['uname'];

		$_SESSION['password'] = $_POST['pass'];
		
		header("Location: questionnaire.php");
		exit();
	}
	}
  }
?>

<form name="MyForm" method="POST" action="Registration_Page1.php" id="register_form">
<span class="error">* required field</span><br><br>
	<table>
		<tr>
			<td><span class="error">*</span>Full Name:</td>
			<td><input type="text" placeholder="Enter Full Name" name="name"></td>
		</tr>
		<tr>
			<td><span class="error">*</span>Email:</td>
			<td><input type="text" placeholder="Enter Email" name="email"></td>
		</tr>
		<tr>
			<td><span class="error">*</span>Mobile:</td>
			<td><input type="text" placeholder="Enter Mobile Number" name="mobile"></td>
		</tr>
		<tr>
			<td><span class="error">*</span>Username:</td>
			<td><input type="text" placeholder="Enter Username" name="uname"></td>
		</tr>
		<tr>
			<td><span class="error">*</span>Password:</td>
			<td><input type="password" placeholder="Enter Password" name="pass"></td>
		</tr>
		<i>Note:These details are purely for communication purposes <br>
		and will be kept confidential in all circumstances.</i>
		<br>
		<tr><br>
		<?php if (isset($name_error)): ?>
			<span><?php echo $name_error; ?></span>
		<?php endif ?><br>
		<?php if (isset($email_error)): ?>
			<span><?php echo $email_error; ?></span>
		<?php endif ?><br>
		<?php if (isset($empty_error)): ?>
			<span><?php echo $empty_error; ?></span>
		<?php endif ?>
			<td><br><br><button type="submit" name="Next" id="reg_btn"> NEXT </button></td>
		</tr>
	</table>
</form>
</body>
</html>