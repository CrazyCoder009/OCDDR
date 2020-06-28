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
$sql_query = 'SELECT * FROM skinp';

$u = $_SESSION['username'];
$e1=$e2=$e3=$e4=$e5=$e6=$e7=$e8=$e9=$e10='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['E1']))
	{	$e1 = 0;
	}else
	{
		$e1 = $_POST['E1'];
	}
	if(!isset($_POST['E2']))
	{	$e2 = 0;
	}else
	{
		$e2 = $_POST['E2'];
	}
	if(!isset($_POST['E3']))
	{	$e3 = 0;
	}else
	{
		$e3 = $_POST['E3'];
	}
	if(!isset($_POST['E4']))
	{	$e4 = 0;
	}else
	{
		$e4 = $_POST['E4'];
	}
	if(!isset($_POST['E5']))
	{	$e5 = 0;
	}else
	{
		$e5 = $_POST['E5'];
	}
	if(!isset($_POST['E6']))
	{	$e6 = 0;
	}else
	{
		$e6 = $_POST['E6'];
	}
	if(!isset($_POST['E7']))
	{	$e7 = 0;
	}else
	{
		$e7 = $_POST['E7'];
	}
	if(!isset($_POST['E8']))
	{	$e8 = 0;
	}else
	{
		$e8 = $_POST['E8'];
	}
	if(!isset($_POST['E9']))
	{	$e9 = 0;
	}else
	{
		$e9 = $_POST['E9'];
	}
	if(!isset($_POST['E10']))
	{	$e10 = 0;
	}else
	{
		$e10 = $_POST['E10'];
	}

$insert_query = "insert into skinp ( 
                    username,E1,E2,E3,E4,E5,E6,E7,E8,E9,E10
                    ) values ( '$u','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM skinp WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["E1"] + $row["E2"] + $row["E3"] + $row["E4"] + $row["E5"] + $row["E6"] + $row["E7"] + $row["E8"] + $row["E9"] + $row["E10"];
	
	$qry = "UPDATE skinp SET Total_E = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "skinp.php" id="symptom_form">
<h4>QUESTIONS ON EXCORIATION / SKIN PICKING:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Time occupied by urges/thougths about skin picking:<br>
<input type="radio" name="E1" value="1">1 - Mild, less than 1hr/day<br>
<input type="radio" name="E1" value="2">2 - Moderate, 1-3hrs/day<br>
<input type="radio" name="E1" value="3">3 - Severe, 3-8 hrs/day<br>
<input type="radio" name="E1" value="4">4 - Extreme, over 8hrs/day<br>
<br>
2. Interference due to urges/thougths about skin picking:<br>
<input type="radio" name="E2" value="1">1 - Mild, slight interference<br>
<input type="radio" name="E2" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="E2" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="E2" value="4">4 - Extreme, incapacitating<br>
<br>
3. Distress associated with urges/thougths about skin picking:<br>
<input type="radio" name="E3" value="1">1 - Mild, infrequent<br>
<input type="radio" name="E3" value="2">2 - Moderate, frequent and disturbing<br>
<input type="radio" name="E3" value="3">3 - Severe, very frequent and very disturbing<br>
<input type="radio" name="E3" value="4">4 - Extreme, near constant and disabling<br>
<br>
4. Resistance against urges/thougths about skin picking:<br>
<input type="radio" name="E4" value="1">1 - No need to actively resist<br>
<input type="radio" name="E4" value="2">2 - Tries to resist most of the time<br>
<input type="radio" name="E4" value="3">3 - Makes some effort to resist<br>
<input type="radio" name="E4" value="4">4 - Yields to urges/thoughts but with some reluctance<br>
<input type="radio" name="E4" value="5">5 - Completely and willingly yields to urges/thougths<br>
<br>
5. Degree of control over urges/thougths about skin picking:<br>
<input type="radio" name="E5" value="1">1 - Complete control<br>
<input type="radio" name="E5" value="2">2 - Much control, usually able to stop<br>
<input type="radio" name="E5" value="3">3 - Moderate control, sometimes able to stop<br>
<input type="radio" name="E5" value="4">4 - Little control, rarely successful in stopping<br>
<input type="radio" name="E5" value="5">5 - No control, completely involuntary<br>
<br>
6. Time spent in activities related to skin picking:<br>
<input type="radio" name="E6" value="1">1 - Mild, less than 1hr/day<br>
<input type="radio" name="E6" value="2">2 - Moderate, 1-3hrs/day<br>
<input type="radio" name="E6" value="3">3 - Severe, 3-8 hrs/day<br>
<input type="radio" name="E6" value="4">4 - Extreme, over 8hrs/day<br>
<br>
7. Interference due to activities related to skin picking:<br>
<input type="radio" name="E7" value="1">1 - Mild, slight interference<br>
<input type="radio" name="E7" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="E7" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="E7" value="4">4 - Extreme, incapacitating<br>
<br>
8. Distress associated with beahviour related to skin picking:<br>
<input type="radio" name="E8" value="1">1 - Mild, only slightly anxious<br>
<input type="radio" name="E8" value="2">2 - Moderate, manageable anxiety<br>
<input type="radio" name="E8" value="3">3 - Severe, prominent and very disturbing increase in anxiiety<br>
<input type="radio" name="E8" value="4">4 - Extreme, incapacitating annxiety<br>
<br>
9. Resistance against actual skin picking:<br>
<input type="radio" name="E9" value="1">1 - No need to actively resist<br>
<input type="radio" name="E9" value="2">2 - Tries to resist most of the time<br>
<input type="radio" name="E9" value="3">3 - Makes some effort to resist<br>
<input type="radio" name="E9" value="4">4 - Yields to urges/thoughts but with some reluctance<br>
<input type="radio" name="E9" value="5">5 - Completely and willingly yields to urges/thougths<br>
<br>
10. Degree of control over acutal skin picking behaviour:<br>
<input type="radio" name="E10" value="1">1 - Complete control<br>
<input type="radio" name="E10" value="2">2 - Much control, experiences pressure to pick<br>
<input type="radio" name="E10" value="3">3 - Moderate control, strong pressure to pick<br>
<input type="radio" name="E10" value="4">4 - Little control, very strong drive to pick<br>
<input type="radio" name="E10" value="5">5 - No control, completely involuntary drive to pick<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>