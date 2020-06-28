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
$sql_query = 'SELECT * FROM ttm';

$u = $_SESSION['username'];
$t1=$t2=$t3=$t4=$t5=$t6=$t7='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['T1']))
	{	$t1 = 0;
	}else
	{
		$t1 = $_POST['T1'];
	}
	if(!isset($_POST['T2']))
	{	$t2 = 0;
	}else
	{
		$t2 = $_POST['T2'];
	}
	if(!isset($_POST['T3']))
	{	$t3 = 0;
	}else
	{
		$t3 = $_POST['T3'];
	}
	if(!isset($_POST['T4']))
	{	$t4 = 0;
	}else
	{
		$t4 = $_POST['T4'];
	}
	if(!isset($_POST['T5']))
	{	$t5 = 0;
	}else
	{
		$t5 = $_POST['T5'];
	}
	if(!isset($_POST['T6']))
	{	$t6 = 0;
	}else
	{
		$t6 = $_POST['T6'];
	}
	if(!isset($_POST['T7']))
	{	$t7 = 0;
	}else
	{
		$t7 = $_POST['T7'];
	}


$insert_query = "insert into ttm ( 
                    username,T1,T2,T3,T4,T5,T6,T7
                    ) values ( '$u','$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM ttm WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["T1"] + $row["T2"] + $row["T3"] + $row["T4"] + $row["T5"] + $row["T6"] + $row["T7"];
	
	$qry = "UPDATE ttm SET Total_T = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "ttm.php" id="symptom_form">
<h4>QUESTIONS ON TRICHOTILLOMANIA:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Frequency of urges to pull hair on an average day basis this week:<br>
<input type="radio" name="T1" value="1">1 - Occasional<br>
<input type="radio" name="T1" value="2">2 - Often<br>
<input type="radio" name="T1" value="3">3 - Very often<br>
<input type="radio" name="T1" value="4">4 - Near constant<br>
<br>
2. Intensity of urges to pull hair on an average day basis this week:<br>
<input type="radio" name="T2" value="1">1 - Mild<br>
<input type="radio" name="T2" value="2">2 - Moderate<br>
<input type="radio" name="T2" value="3">3 - Severe<br>
<input type="radio" name="T2" value="4">4 - Extreme<br>
<br>
3. Ability to control the urges to pull hair on an average day basis this week:<br>
<input type="radio" name="T3" value="1">1 - Could always control<br>
<input type="radio" name="T3" value="2">2 - Most of the time<br>
<input type="radio" name="T3" value="3">3 - Some of the time<br>
<input type="radio" name="T3" value="4">4 - Rarely<br>
<input type="radio" name="T3" value="5">5 - Never able to distract from the urges<br>
<br>
4. Frequency of actual hairpulling on an average day basis this week:<br>
<input type="radio" name="T4" value="1">1 - Occasionally<br>
<input type="radio" name="T4" value="2">2 - Often<br>
<input type="radio" name="T4" value="3">3 - Very often<br>
<input type="radio" name="T4" value="4">4 - Always<br>
<br>
5. Attempts to resist hairpulling on an average day basis this week:<br>
<input type="radio" name="T5" value="1">1 - Almost all of the time<br>
<input type="radio" name="T5" value="2">2 - Some of the time<br>
<input type="radio" name="T5" value="3">3 - Rarely<br>
<input type="radio" name="T5" value="4">4 - Never<br>
<br>
6. Control over hairpulling on an average day basis this week:<br>
<input type="radio" name="T6" value="1">1 - Almost all of the time<br>
<input type="radio" name="T6" value="2">2 - Most of the time<br>
<input type="radio" name="T6" value="3">3 - Some of the time<br>
<input type="radio" name="T6" value="4">4 - Rarely<br>
<br>
7. Associated distress ,for example: moody, sad, etc., due to hairpulling during the past week:<br>
<input type="radio" name="T7" value="1">1 - Vaguely uncomfortable<br>
<input type="radio" name="T7" value="2">2 - Noticeably uncomfortable<br>
<input type="radio" name="T7" value="3">3 - Significantly uncomfortable<br>
<input type="radio" name="T7" value="4">4 - Intensely uncomfortable<br>
<br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>
</body>
</html>