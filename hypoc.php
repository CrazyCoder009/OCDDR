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
$sql_query = 'SELECT * FROM hypoc';

$u = $_SESSION['username'];
$hy1=$hy2=$hy3=$hy4=$hy5=$hy6=$hy7=$hy8=$hy9=$hy10=$hy11=$hy12='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['HY1']))
	{	$hy1 = 0;
	}else
	{
		$hy1 = $_POST['HY1'];
	}
	if(!isset($_POST['HY2']))
	{	$hy2 = 0;
	}else
	{
		$hy2 = $_POST['HY2'];
	}
	if(!isset($_POST['HY3']))
	{	$hy3 = 0;
	}else
	{
		$hy3 = $_POST['HY3'];
	}
	if(!isset($_POST['HY4']))
	{	$hy4 = 0;
	}else
	{
		$hy4 = $_POST['HY4'];
	}
	if(!isset($_POST['HY5']))
	{	$hy5 = 0;
	}else
	{
		$hy5 = $_POST['HY5'];
	}
	if(!isset($_POST['HY6']))
	{	$hy6 = 0;
	}else
	{
		$hy6 = $_POST['HY6'];
	}
	if(!isset($_POST['HY7']))
	{	$hy7 = 0;
	}else
	{
		$hy7 = $_POST['HY7'];
	}
	if(!isset($_POST['HY8']))
	{	$hy8 = 0;
	}else
	{
		$hy8 = $_POST['HY8'];
	}
	if(!isset($_POST['HY9']))
	{	$hy9 = 0;
	}else
	{
		$hy9 = $_POST['HY9'];
	}
	if(!isset($_POST['HY10']))
	{	$hy10 = 0;
	}else
	{
		$hy10 = $_POST['HY10'];
	}
	if(!isset($_POST['HY11']))
	{	$hy11 = 0;
	}else
	{
		$hy11 = $_POST['HY11'];
	}
	if(!isset($_POST['HY12']))
	{	$hy12 = 0;
	}else
	{
		$hy12 = $_POST['HY12'];
	}


$insert_query = "insert into hypoc ( 
                    username,HY1,HY2,HY3,HY4,HY5,HY6,HY7,HY8,HY9,HY10,HY11,HY12
                    ) values ( '$u','$hy1','$hy2','$hy3','$hy4','$hy5','$hy6','$hy7','$hy8','$hy9','$hy10','$hy11','$hy12')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM hypoc WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["HY1"] + $row["HY2"] + $row["HY3"] + $row["HY4"] + $row["HY5"] + $row["HY6"] + $row["HY7"] + $row["HY8"] + $row["HY9"] + $row["HY10"] + $row["HY11"] + $row["HY12"];
	
	$qry = "UPDATE hypoc SET Total_HY = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "hypoc.php" id="symptom_form">
<h4>QUESTIONS ON HYPOCHONDRIASIS / ILLNESS ANXIETY DISORDER:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Time occupied by worries related to illness or disease:<br>
<input type="radio" name="HY1" value="1">1 - Mild, less than 1 hr/day<br>
<input type="radio" name="HY1" value="2">2 - Moderate, 1 to 3 hr/day<br>
<input type="radio" name="HY1" value="3">3 - Severe, greater than 3 and up to 8 hr/day<br>
<input type="radio" name="HY1" value="4">4 - Extreme, greater than 8 hr/day <br>
<br>
2. Frequency of worries related to illness or disease:<br>
<input type="radio" name="HY2" value="1">1 - Seldom, less than 1× week<br>
<input type="radio" name="HY2" value="2">2 - Sometimes, 1–3× week<br>
<input type="radio" name="HY2" value="3">3 - Often, 4–6× week<br>
<input type="radio" name="HY2" value="4">4 - Very often, Daily <br>
<br>
3. Interference due to thoughts related to illness or disease:<br>
<input type="radio" name="HY3" value="1">1 - Mild, slight interference<br>
<input type="radio" name="HY3" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="HY3" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="HY3" value="4">4 - Extreme, incapacitating<br>
<br>
4. Distress associated with thoughts related to illness or disease:<br>
<input type="radio" name="HY4" value="1">1 - Mild, not too disturbing<br>
<input type="radio" name="HY4" value="2">2 - Moderate, disturbing, but still manageable<br>
<input type="radio" name="HY4" value="3">3 - Severe, very disturbing<br>
<input type="radio" name="HY4" value="4">4 - Extreme, near constant and disabling distress<br>
<br>
5. Resistance against thoughts related to illness or disease:<br>
<input type="radio" name="HY5" value="1">1 - Tries to resist most of the time<br>
<input type="radio" name="HY5" value="2">2 - Makes some effort to resist the thoughts<br>
<input type="radio" name="HY5" value="3">3 - Yields to almost all thoughts with some reluctance<br>
<input type="radio" name="HY5" value="4">4 - Completely and willingly yielding<br>
<br>
6. Degree of control over thoughts related to illness or disease:<br>
<input type="radio" name="HY6" value="1">1 - Complete control<br>
<input type="radio" name="HY6" value="2">2 - Much control, usually able to stop<br>
<input type="radio" name="HY6" value="3">3 - Moderate control, sometimes able to stop<br>
<input type="radio" name="HY6" value="4">4 - Little control, rarely successful in stopping<br>
<input type="radio" name="HY6" value="5">5 - No control, completely involuntary<br>
<br>
7. Time occupied by behaviors related to illness concerns:<br>
<input type="radio" name="HY7" value="1">1 - Mild, less than 1 hr/day<br>
<input type="radio" name="HY7" value="2">2 - Moderate, 1 to 3 hr/day<br>
<input type="radio" name="HY7" value="3">3 - Severe, greater than 3 and up to 8 hr/day<br>
<input type="radio" name="HY7" value="4">4 - Extreme, greater than 8 hr/day <br>
<br>
8. Frequency of behaviors related to your illness concerns:<br>
<input type="radio" name="HY8" value="1">1 - Seldom, less than 1× week<br>
<input type="radio" name="HY8" value="2">2 - Sometimes, 1–3× week<br>
<input type="radio" name="HY8" value="3">3 - Often, 4–6× week<br>
<input type="radio" name="HY8" value="4">4 - Very often, Daily <br>
<br>
9. Interference due to behaviors in response to illness concerns:<br>
<input type="radio" name="HY9" value="1">1 - Mild, slight interference<br>
<input type="radio" name="HY9" value="2">2 - Moderate, definite interference<br>
<input type="radio" name="HY9" value="3">3 - Severe, causes substantial impairment in performance<br>
<input type="radio" name="HY9" value="4">4 - Extreme, incapacitating<br>
<br>
10. Distress associated with behaviors in response to illness concerns:<br>
<input type="radio" name="HY10" value="1">1 - Mild, slightly anxious<br>
<input type="radio" name="HY10" value="2">2 - Moderate, manageable anxity<br>
<input type="radio" name="HY10" value="3">3 - Severe, very disturbing increase in anxiety<br>
<input type="radio" name="HY10" value="4">4 - Extreme, incapacitating anxiety<br>
<br>
11. Resistance against behaviors related to illness concerns:<br>
<input type="radio" name="HY11" value="1">1 - Tries to resist most of the time<br>
<input type="radio" name="HY11" value="2">2 - Makes some effort to resist<br>
<input type="radio" name="HY11" value="3">3 - Yields to almost all behaviours with some reluctance<br>
<input type="radio" name="HY11" value="4">4 - Completely and willingly yielding to behaviours<br>
<br>
12. Degree of control over behaviors related to illness concerns:<br>
<input type="radio" name="HY12" value="1">1 - Complete control<br>
<input type="radio" name="HY12" value="2">2 - Much control, experiences pressure to perform behavior<br>
<input type="radio" name="HY12" value="3">3 - Moderate control, strong pressure to perform behavior<br>
<input type="radio" name="HY12" value="4">4 - Little control, very strong drive to perform the behavior<br>
<input type="radio" name="HY12" value="5">5 - No control, experienced as completely involuntary<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>