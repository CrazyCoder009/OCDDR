<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start(); 

$servername = "localhost/html";
	$username = "root";
	$password = "ocd"; 
	$dbname = "pdb";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
$sql_query = 'SELECT * FROM bdd';

$u = $_SESSION['username'];
$b1=$b2=$b3=$b4=$b5=$b6=$b7=$b8=$b9=$b10='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['B1']))
	{	$b1 = 0;
	}else
	{
		$b1 = $_POST['B1'];
	}
	if(!isset($_POST['B2']))
	{	$b2 = 0;
	}else
	{
		$b2 = $_POST['B2'];
	}
	if(!isset($_POST['B3']))
	{	$b3 = 0;
	}else
	{
		$b3 = $_POST['B3'];
	}
	if(!isset($_POST['B4']))
	{	$b4 = 0;
	}else
	{
		$b4 = $_POST['B4'];
	}
	if(!isset($_POST['B5']))
	{	$b5 = 0;
	}else
	{
		$b5 = $_POST['B5'];
	}
	if(!isset($_POST['B6']))
	{	$b6 = 0;
	}else
	{
		$b6 = $_POST['B6'];
	}
	if(!isset($_POST['B7']))
	{	$b7 = 0;
	}else
	{
		$b7 = $_POST['B7'];
	}
	if(!isset($_POST['B8']))
	{	$b8 = 0;
	}else
	{
		$b8 = $_POST['B8'];
	}
	if(!isset($_POST['B9']))
	{	$b9 = 0;
	}else
	{
		$b9 = $_POST['B9'];
	}
	if(!isset($_POST['B10']))
	{	$b10 = 0;
	}else
	{
		$b10 = $_POST['B10'];
	}


$insert_query = "insert into bdd ( 
                    username,B1,B2,B3,B4,B5,B6,B7,B8,B9,B10
                    ) values ( '$u','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM bdd WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["B1"] + $row["B2"] + $row["B3"] + $row["B4"] + $row["B5"] + $row["B6"] + $row["B7"] + $row["B8"] + $row["B9"] + $row["B10"];
	
	$qry = "UPDATE bdd SET Total_B = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "bdd.php" id="symptom_form">
<h4>QUESTIONS ON EXCORIATION / SKIN PICKING:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Time occupied by thoughts about Body Defect:<br>
<input type="radio" name="B1" value="1">1 - Mild, less than 1hr/day<br>
<input type="radio" name="B1" value="2">2 - Moderate, 1-3hrs/day<br>
<input type="radio" name="B1" value="3">3 - Severe, 3-8 hrs/day<br>
<input type="radio" name="B1" value="4">4 - Extreme, over 8hrs/day<br>
<br>
2. Interference due to thoughts about Body Defect:<br>
<input type="radio" name="B2" value="1">1 - Mild, slight interference<br>
<input type="radio" name="B2" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="B2" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="B2" value="4">4 - Extreme, incapacitating<br>
<br>
3. Distress associated with thoughts about Body Defect:<br>
<input type="radio" name="B3" value="1">1 - Mild, not to disturbing<br>
<input type="radio" name="B3" value="2">2 - Moderate, disturbing<br>
<input type="radio" name="B3" value="3">3 - Severe, very disturbing<br>
<input type="radio" name="B3" value="4">4 - Extreme, diasbling distress<br>
<br>
4. Resistane against thoughts of Body Defect:<br>
<input type="radio" name="B4" value="1">1 - No need to actively resist<br>
<input type="radio" name="B4" value="2">2 - Tries to resist most of the time<br>
<input type="radio" name="B4" value="3">3 - Makes some effort to resist<br>
<input type="radio" name="B4" value="4">4 - Yields to thoughts but with some reluctance<br>
<input type="radio" name="B4" value="5">5 - Completely and willingly yields to all thougths<br>
<br>
5. Degree of control over thoughts about Body Defect:<br>
<input type="radio" name="B5" value="1">1 - Complete control<br>
<input type="radio" name="B5" value="2">2 - Much control, usually able to stop<br>
<input type="radio" name="B5" value="3">3 - Moderate control, sometimes able to stop<br>
<input type="radio" name="B5" value="4">4 - Little control, rarely successful in stopping<br>
<input type="radio" name="B5" value="5">5 - No control, completely involuntary<br>
<br>
6. Time spent in activities related to Body Defect:<br>
<input type="radio" name="B6" value="1">1 - Mild, less than 1hr/day<br>
<input type="radio" name="B6" value="2">2 - Moderate, 1-3hrs/day<br>
<input type="radio" name="B6" value="3">3 - Severe, 3-8 hrs/day<br>
<input type="radio" name="B6" value="4">4 - Extreme, over 8hrs/day<br>
<br>
7. Interference due to activities related to Body Defect:<br>
<input type="radio" name="B7" value="1">1 - Mild, slight interference<br>
<input type="radio" name="B7" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="B7" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="B7" value="4">4 - Extreme, incapacitating<br>
<br>
8. Distress associated with activities related to Body Defect:<br>
<input type="radio" name="B8" value="1">1 - Mild, only slightly anxious<br>
<input type="radio" name="B8" value="2">2 - Moderate, manageable anxiety<br>
<input type="radio" name="B8" value="3">3 - Severe, prominent and very disturbing increase in anxiiety<br>
<input type="radio" name="B8" value="4">4 - Extreme, incapacitating annxiety<br>
<br>
9. Resistance against compulsions:<br>
<input type="radio" name="B9" value="1">1 - No need to actively resist<br>
<input type="radio" name="B9" value="2">2 - Tries to resist most of the time<br>
<input type="radio" name="B9" value="3">3 - Makes some effort to resist<br>
<input type="radio" name="B9" value="4">4 - Yields to all behaviours but with some reluctance<br>
<input type="radio" name="B9" value="5">5 - Completely and willingly yields to all behaviours/compulsions<br>
<br>
10. Degree of control over compulsive behaviour:<br>
<input type="radio" name="B10" value="1">1 - Complete control<br>
<input type="radio" name="B10" value="2">2 - Much control, experiences pressure to compulsive behaviour<br>
<input type="radio" name="B10" value="3">3 - Moderate control, strong pressure to compulsive behaviour<br>
<input type="radio" name="B10" value="4">4 - Little control, very strong drive to compulsive behaviour<br>
<input type="radio" name="B10" value="5">5 - No control, completely involuntary drive to compulsive behaviour<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>