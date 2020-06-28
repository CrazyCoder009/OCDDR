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
$sql_query = 'SELECT * FROM kleptomania';

$u = $_SESSION['username'];
$ts1=$ts2=$ts3=$ts4=$ts5=$ts6=$ts7=$ts8=$ts9=$ts10=$ts11=$ts12='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['TS1']))
	{	$ts1 = 0;
	}else
	{
		$ts1 = $_POST['TS1'];
	}
	if(!isset($_POST['TS2']))
	{	$ts2 = 0;
	}else
	{
		$ts2 = $_POST['TS2'];
	}
	if(!isset($_POST['TS3']))
	{	$ts3 = 0;
	}else
	{
		$ts3 = $_POST['TS3'];
	}
	if(!isset($_POST['TS4']))
	{	$ts4 = 0;
	}else
	{
		$ts4 = $_POST['TS4'];
	}
	if(!isset($_POST['TS5']))
	{	$ts5 = 0;
	}else
	{
		$ts5 = $_POST['TS5'];
	}
	if(!isset($_POST['TS6']))
	{	$ts6 = 0;
	}else
	{
		$ts6 = $_POST['TS6'];
	}
	if(!isset($_POST['TS7']))
	{	$ts7 = 0;
	}else
	{
		$ts7 = $_POST['TS7'];
	}
	if(!isset($_POST['TS8']))
	{	$ts8 = 0;
	}else
	{
		$ts8 = $_POST['TS8'];
	}
	if(!isset($_POST['TS9']))
	{	$ts9 = 0;
	}else
	{
		$ts9 = $_POST['TS9'];
	}
	if(!isset($_POST['TS10']))
	{	$ts10 = 0;
	}else
	{
		$ts10 = $_POST['TS10'];
	}
	if(!isset($_POST['TS11']))
	{	$ts11 = 0;
	}else
	{
		$ts11 = $_POST['TS11'];
	}
	if(!isset($_POST['TS12']))
	{	$ts12 = 0;
	}else
	{
		$ts12 = $_POST['TS12'];
	}

$insert_query = "insert into tic ( 
                    username,TS1,TS2,TS3,TS4,TS5,TS6,TS7,TS8,TS9,TS10,TS11,TS12
                    ) values ( '$u','$ts1','$ts2','$ts3','$ts4','$ts5','$ts6','$ts7','$ts8','$ts9','$ts10','$ts11','$ts12')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM tic WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["TS1"] + $row["TS2"] + $row["TS3"] + $row["TS4"] + $row["TS5"] + $row["TS6"] + $row["TS7"] + $row["TS8"] + $row["TS9"] + $row["TS10"] + $row["TS11"] + $row["TS12"];
	
	$qry = "UPDATE tic SET Total_TS = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "tic.php" id="symptom_form">
<h4>QUESTIONS ON TIC / TOURETTE SYNDROME:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Frequency of irritation due to the syndrome during the past week:<br>
<input type="radio" name="TS1" value="1">1 - A little<br>
<input type="radio" name="TS1" value="2">2 - Moderately<br>
<input type="radio" name="TS1" value="3">3 - Markedly<br>
<input type="radio" name="TS1" value="4">4 - Extremely<br>
<br>
2. Frequency of botheration due to motor tics in the past week:<br>
<input type="radio" name="TS2" value="1">1 - A little<br>
<input type="radio" name="TS2" value="2">2 - Moderately<br>
<input type="radio" name="TS2" value="3">3 - Markedly<br>
<input type="radio" name="TS2" value="4">4 - Extremely<br>
<br>
3. Botheration due to argumentative nature symptoms in the past week:<br>
<input type="radio" name="TS3" value="1">1 - A little<br>
<input type="radio" name="TS3" value="2">2 - Moderately<br>
<input type="radio" name="TS3" value="3">3 - Markedly<br>
<input type="radio" name="TS3" value="4">4 - Extremely<br>
<br>
4. Botheration due to sudden mood changes during past week:<br>
<input type="radio" name="TS4" value="1">1 - A little<br>
<input type="radio" name="TS4" value="2">2 - Moderately<br>
<input type="radio" name="TS4" value="3">3 - Markedly<br>
<input type="radio" name="TS4" value="4">4 - Extremely<br>
<br>
5. Frequency in cases of demanding attention in the past week:<br>
<input type="radio" name="TS5" value="1">1 - A little<br>
<input type="radio" name="TS5" value="2">2 - Moderately<br>
<input type="radio" name="TS5" value="3">3 - Markedly<br>
<input type="radio" name="TS5" value="4">4 - Extremely<br>
<br>
6. Frequency of vocal tics in the past week:<br>
<input type="radio" name="TS6" value="1">1 - A little<br>
<input type="radio" name="TS6" value="2">2 - Moderately<br>
<input type="radio" name="TS6" value="3">3 - Markedly<br>
<input type="radio" name="TS6" value="4">4 - Extremely<br>
<br>
7. Number of times of being bothered  by inattention in the past week:<br>
<input type="radio" name="TS7" value="1">1 - A little<br>
<input type="radio" name="TS7" value="2">2 - Moderately<br>
<input type="radio" name="TS7" value="3">3 - Markedly<br>
<input type="radio" name="TS7" value="4">4 - Extremely<br>
<br>
8. Number of times did loud/talkative nature bother in the past week:<br>
<input type="radio" name="TS8" value="1">1 - A little<br>
<input type="radio" name="TS8" value="2">2 - Moderately<br>
<input type="radio" name="TS8" value="3">3 - Markedly<br>
<input type="radio" name="TS8" value="4">4 - Extremely<br>
<br>
9. Frequency of irritation/distraction due to restlessness in the past week:<br>
<input type="radio" name="TS9" value="1">1 - A little<br>
<input type="radio" name="TS9" value="2">2 - Moderately<br>
<input type="radio" name="TS9" value="3">3 - Markedly<br>
<input type="radio" name="TS9" value="4">4 - Extremely<br>
<br>
10. Time occupied by bothering due to being tense, anxious or nervous in the past week:<br>
<input type="radio" name="TS10" value="1">1 - A little<br>
<input type="radio" name="TS10" value="2">2 - Moderately<br>
<input type="radio" name="TS10" value="3">3 - Markedly<br>
<input type="radio" name="TS10" value="4">4 - Extremely<br>
<br>
11. Botheration due to being depressed or uninterested in most things in the past week:<br>
<input type="radio" name="TS11" value="1">1 - A little<br>
<input type="radio" name="TS11" value="2">2 - Moderately<br>
<input type="radio" name="TS11" value="3">3 - Markedly<br>
<input type="radio" name="TS11" value="4">4 - Extremely<br>
<br>
12. Botheration due to impulsiveness during the past week:<br>
<input type="radio" name="TS12" value="1">1 - A little<br>
<input type="radio" name="TS12" value="2">2 - Moderately<br>
<input type="radio" name="TS12" value="3">3 - Markedly<br>
<input type="radio" name="TS12" value="4">4 - Extremely<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>