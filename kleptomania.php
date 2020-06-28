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
$k1=$k2=$k3=$k4=$k5=$k6=$k7=$k8=$k9=$k10=$k11=$k12='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['K1']))
	{	$k1 = 0;
	}else
	{
		$k1 = $_POST['K1'];
	}
	if(!isset($_POST['K2']))
	{	$k2 = 0;
	}else
	{
		$k2 = $_POST['K2'];
	}
	if(!isset($_POST['K3']))
	{	$k3 = 1;
	}else
	{
		$k3 = $_POST['K3'];
	}
	if(!isset($_POST['K4']))
	{	$k4 = 0;
	}else
	{
		$k4 = $_POST['K4'];
	}
	if(!isset($_POST['K5']))
	{	$k5 = 0;
	}else
	{
		$k5 = $_POST['K5'];
	}
	if(!isset($_POST['K6']))
	{	$k6 = 0;
	}else
	{
		$k6 = $_POST['K6'];
	}
	if(!isset($_POST['K7']))
	{	$k7 = 0;
	}else
	{
		$k7 = $_POST['K7'];
	}
	if(!isset($_POST['K8']))
	{	$k8 = 0;
	}else
	{
		$k8 = $_POST['K8'];
	}
	if(!isset($_POST['K9']))
	{	$k9 = 0;
	}else
	{
		$k9 = $_POST['K9'];
	}
	if(!isset($_POST['K10']))
	{	$k10 = 0;
	}else
	{
		$k10 = $_POST['K10'];
	}
	if(!isset($_POST['K11']))
	{	$k11 = 0;
	}else
	{
		$k11 = $_POST['K11'];
	}
	if(!isset($_POST['K12']))
	{	$k12 = 0;
	}else
	{
		$k12 = $_POST['K12'];
	}

$insert_query = "insert into kleptomania ( 
                    username,K1,K2,K3,K4,K5,K6,K7,K8,K9,K10,K11,K12
                    ) values ( '$u','$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$k9','$k10','$k11','$k12')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM kleptomania WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["K1"] + $row["K2"] + $row["K3"] + $row["K4"] + $row["K5"] + $row["K6"] + $row["K7"] + $row["K8"] + $row["K9"] + $row["K10"] + $row["K11"] + $row["K12"];
	
	$qry = "UPDATE kleptomania SET Total_K = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}
?>

<br>
<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "kleptomania.php" id="symptom_form">
<h4>QUESTIONS ON KLEPTOMANIA:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. If you had urges to steal during the past week, on average, how strong were your urges? Please select the most appropriate number:<br>
<input type="radio" name="K1" value="1">1 - Mild<br>
<input type="radio" name="K1" value="2">2 - Moderate<br>
<input type="radio" name="K1" value="3">3 - Severe<br>
<input type="radio" name="K1" value="4">4 - Extreme<br>
<br>
2. During the past week, how many times did you experience urges to steal? Please select the most appropriate number.<br>
<input type="radio" name="K2" value="1">1 - Once<br>
<input type="radio" name="K2" value="2">2 - Two to Three times<br>
<input type="radio" name="K2" value="3">3 - Several to many times<br>
<input type="radio" name="K2" value="4">4 - Constant or near constant<br>
<br>
3. During the past week, how many hours (add up hours) were you preoccupied with your urges to steal? Please select the most appropriate number.<br>
<input type="radio" name="K3" value="1">1 - 1 hr or less<br>
<input type="radio" name="K3" value="2">2 - 1 to 4 hrs<br>
<input type="radio" name="K3" value="3">3 - 4 to 10 hrs<br>
<input type="radio" name="K3" value="4">4 - over 10 hrs<br>
<br>
4. During the past week, how much were you able to control your urges? Please select the most appropriate number.<br>
<input type="radio" name="K4" value="1">1 - Very much<br>
<input type="radio" name="K4" value="2">2 - Much<br>
<input type="radio" name="K4" value="3">3 - Moderate<br>
<input type="radio" name="K4" value="4">4 - Minimal<br>
<input type="radio" name="K4" value="5">5 - No control<br>
<br>
5. During the past week, how often did thoughts about stealing come up? Please select the most appropriate number.<br>
<input type="radio" name="K5" value="1">1 - Once<br>
<input type="radio" name="K5" value="2">2 - Two to Four times<br>
<input type="radio" name="K5" value="3">3 - Several to many times<br>
<input type="radio" name="K5" value="4">4 - Constant or near constant<br>
<br>
6. During the past week, approximately how many hours (add up hours) did you spend thinking about stealing? Please select the most appropriate number.<br>
<input type="radio" name="K6" value="1">1 - 1 hr or less<br>
<input type="radio" name="K6" value="2">2 - 1 to 4 hrs<br>
<input type="radio" name="K6" value="3">3 - 4 to 10 hrs<br>
<input type="radio" name="K6" value="4">4 - over 10 hrs<br>
<br>
7. During the past week, how much were you able to control your thoughts of stealing? Please select the most appropriate number.<br>
<input type="radio" name="K7" value="1">1 - Very much<br>
<input type="radio" name="K7" value="2">2 - Much<br>
<input type="radio" name="K7" value="3">3 - Moderate<br>
<input type="radio" name="K7" value="4">4 - Minimal<br>
<input type="radio" name="K7" value="5">5 - No control<br>
<br>
8. During the past week, on average, how much tension or excitement did you have shortly before you committed a theft? If you did not actually steal anything, please estimate how much anticipatory tension or excitement you believe you would have experienced, if you had committed a theft. Please select the most appropriate number.<br>
<input type="radio" name="K8" value="1">1 - Minimal<br>
<input type="radio" name="K8" value="2">2 - Moderate<br>
<input type="radio" name="K8" value="3">3 - Much<br>
<input type="radio" name="K8" value="4">4 - Very much<br>
<br>
9. During the past week, on average, how much excitement and pleasure did you feel when you successfully committed a theft? If you did not actually steal, please estimate how much excitement and pleasure you believe you would have experienced if you had committed a theft. Please select the most appropriate number<br>
<input type="radio" name="K9" value="1">1 - Minimal<br>
<input type="radio" name="K9" value="2">2 - Moderate<br>
<input type="radio" name="K9" value="3">3 - Much<br>
<input type="radio" name="K9" value="4">4 - Very much<br>
<br>
10. During the past week, how much emotional distress (mental pain or anguish, shame, guilt, embarrassment) has your stealing caused you? Please select the most appropriate number.<br>
<input type="radio" name="K10" value="1">1 - Minimal<br>
<input type="radio" name="K10" value="2">2 - Moderate<br>
<input type="radio" name="K10" value="3">3 - Much<br>
<input type="radio" name="K10" value="4">4 - Very much<br>
<br>
11. During the past week, how much personal trouble (relationship, financial, legal, job, medical or health) has your stealing caused you? Please select the most appropriate number.<br>
<input type="radio" name="K11" value="1">1 - Minimal<br>
<input type="radio" name="K11" value="2">2 - Moderate<br>
<input type="radio" name="K11" value="3">3 - Much<br>
<input type="radio" name="K11" value="4">4 - Very much<br>
<br>
12. During the past week, how many times did you steal? Please select the most appropriate number.<br>
<input type="radio" name="K12" value="1">1 - Once<br>
<input type="radio" name="K12" value="2">2 - Two to Three times<br>
<input type="radio" name="K12" value="3">3 - Several to many times<br>
<input type="radio" name="K12" value="4">4 - Daily or almost daily<br>
<br>	
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>	
</body>
</html>