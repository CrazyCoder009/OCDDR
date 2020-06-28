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
$sql_query = 'SELECT * FROM anxiety';

$u = $_SESSION['username'];
$a1=$a2=$a3=$a4=$a5=$a6=$a7=$a8=$a9=$a10='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['A1']))
	{	$a1 = 0;
	}else
	{
		$a1 = $_POST['A1'];
	}
	if(!isset($_POST['A2']))
	{	$a2 = 0;
	}else
	{
		$a2 = $_POST['A2'];
	}
	if(!isset($_POST['A3']))
	{	$a3 = 0;
	}else
	{
		$a3 = $_POST['A3'];
	}
	if(!isset($_POST['A4']))
	{	$a4 = 0;
	}else
	{
		$a4 = $_POST['A4'];
	}
	if(!isset($_POST['A5']))
	{	$a5 = 0;
	}else
	{
		$a5 = $_POST['A5'];
	}
	if(!isset($_POST['A6']))
	{	$a6 = 0;
	}else
	{
		$a6 = $_POST['A6'];
	}
	if(!isset($_POST['A7']))
	{	$a7 = 0;
	}else
	{
		$a7 = $_POST['A7'];
	}
	if(!isset($_POST['A8']))
	{	$a8 = 0;
	}else
	{
		$a8 = $_POST['A8'];
	}
	if(!isset($_POST['A9']))
	{	$a9 = 0;
	}else
	{
		$a9 = $_POST['A9'];
	}
	if(!isset($_POST['A10']))
	{	$a10 = 0;
	}else
	{
		$a10 = $_POST['A10'];
	}

$insert_query = "insert into anxiety ( 
                    username,A1,A2,A3,A4,A5,A6,A7,A8,A9,A10
                    ) values ( '$u','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM anxiety WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["A1"] + $row["A2"] + $row["A3"] + $row["A4"] + $row["A5"] + $row["A6"] + $row["A7"] + $row["A8"] + $row["A9"] + $row["A10"];
	
	$qry = "UPDATE anxiety SET Total_A = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "anxiety.php" id="symptom_form">
<h4>QUESTIONS ON ANXIETY:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. During past week, have you felt moments of sudden terror, fear or fright?<br>
<input type="radio" name="A1" value="1">1 - Occasionally<br>
<input type="radio" name="A1" value="2">2 - Half of the time<br>
<input type="radio" name="A1" value="3">3 - Most of the time<br>
<input type="radio" name="A1" value="4">4 - All of the time<br>
<br>
2. During past week, have you felt anxious, worried or nervous?<br>
<input type="radio" name="A2" value="1">1 - Occasionally<br>
<input type="radio" name="A2" value="2">2 - Half of the time<br>
<input type="radio" name="A2" value="3">3 - Most of the time<br>
<input type="radio" name="A2" value="4">4 - All of the time<br>
<br>
3. During past week, have you had thoughts of bad things happening, such as family tragedy, ill health, loss of a job, or accidents?<br>
<input type="radio" name="A3" value="1">1 - Occasionally<br>
<input type="radio" name="A3" value="2">2 - Half of the time<br>
<input type="radio" name="A3" value="3">3 - Most of the time<br>
<input type="radio" name="A3" value="4">4 - All of the time<br>
<br>
4. During past week, have you felt a racing heart, sweaty, trouble breathing, faint, or shaky?<br>
<input type="radio" name="A4" value="1">1 - Occasionally<br>
<input type="radio" name="A4" value="2">2 - Half of the time<br>
<input type="radio" name="A4" value="3">3 - Most of the time<br>
<input type="radio" name="A4" value="4">4 - All of the time<br>
<br>
5. During past week, have you felt tense muscles, felt on edge or restless, or had trouble relaxing or trouble sleeping?<br>
<input type="radio" name="A5" value="1">1 - Occasionally<br>
<input type="radio" name="A5" value="2">2 - Half of the time<br>
<input type="radio" name="A5" value="3">3 - Most of the time<br>
<input type="radio" name="A5" value="4">4 - All of the time<br>
<br>
6. During past week, have you avoided, or did not approach or enter situations about which you worry?<br>
<input type="radio" name="A6" value="1">1 - Occasionally<br>
<input type="radio" name="A6" value="2">2 - Half of the time<br>
<input type="radio" name="A6" value="3">3 - Most of the time<br>
<input type="radio" name="A6" value="4">4 - All of the time<br>
<br>
7. During past week, have you left situations early or participated only minimally due to worries?<br>
<input type="radio" name="A7" value="1">1 - Occasionally<br>
<input type="radio" name="A7" value="2">2 - Half of the time<br>
<input type="radio" name="A7" value="3">3 - Most of the time<br>
<input type="radio" name="A7" value="4">4 - All of the time<br>
<br>
8. During past week, have you spent lots of time making decisions, putting off making decisions, or preparing for situations, due to worries?<br>
<input type="radio" name="A8" value="1">1 - Occasionally<br>
<input type="radio" name="A8" value="2">2 - Half of the time<br>
<input type="radio" name="A8" value="3">3 - Most of the time<br>
<input type="radio" name="A8" value="4">4 - All of the time<br>
<br>
9. During past week, have you sought reassurance from others due to worries?<br>
<input type="radio" name="A9" value="1">1 - Occasionally<br>
<input type="radio" name="A9" value="2">2 - Half of the time<br>
<input type="radio" name="A9" value="3">3 - Most of the time<br>
<input type="radio" name="A9" value="4">4 - All of the time<br>
<br>
10. During past week, have you needed help to cope with anxiety (e.g., alcohol or medication, superstitious objects, or other people)?<br>
<input type="radio" name="A10" value="1">1 - Occasionally<br>
<input type="radio" name="A10" value="2">2 - Half of the time<br>
<input type="radio" name="A10" value="3">3 - Most of the time<br>
<input type="radio" name="A10" value="4">4 - All of the time<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>