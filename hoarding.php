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
	if($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}

$u = $_SESSION['username'];
$h1=$h2=$h3=$h4=$h5='';

if (isset($_POST['Submit'])) 
{
	if(!isset($_POST['H1']))
	{	$h1 = 0;
	}else
	{
		$h1 = $_POST['H1'];
	}
	if(!isset($_POST['H2']))
	{	$h2 = 0;
	}else
	{
		$h2 = $_POST['H2'];
	}
	if(!isset($_POST['H3']))
	{	$h3 = 0;
	}else
	{
		$h3 = $_POST['H3'];
	}
	if(!isset($_POST['H4']))
	{	$h4 = 0;
	}else
	{
		$h4 = $_POST['H4'];
	}
	if(!isset($_POST['H5']))
	{	$h5 = 0;
	}else
	{
		$h5 = $_POST['H5'];
	}

$insert_query = "insert into hoarding ( 
                    username,H1,H2,H3,H4,H5
                    ) values ( '$u','$h1','$h2','$h3','$h4','$h5')";
					
$conn->query($insert_query); 

$sql_query = "SELECT * FROM hoarding WHERE username='$u'";

if ($result = $conn->query($sql_query)) {
	$row = $result->fetch_assoc();
	$field5name = $row["H1"] + $row["H2"] + $row["H3"]+ $row["H4"]+ $row["H5"];
	
	$qry = "UPDATE hoarding SET Total_H = '$field5name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
}

$conn->close();
}

?>

<br>
<input type="button" value="Go Back" id="sub_btn" onClick="javascript:history.go(-2)" />
<form method = "POST" action = "hoarding.php" id="symptom_form">
<h4>QUESTIONS ON HOARDING DISORDER:</h4>
<i>
Instructions:<br>1. If the answer to the question is "None", please ignore the question and continue with other questions.<br>
2. After attempting all the questions, click on the "Submit" button followed by "Go Back" button to return to the previous page in order to fill the remaining questions.<br>
<br>
</i>
1. Because of the clutter or number of possessions, how difficult is it for you to use the rooms in your home?<br>
<input type="radio" name="H1" value="1">1<br>
<input type="radio" name="H1" value="2">2 - Mild<br>
<input type="radio" name="H1" value="3">3<br>
<input type="radio" name="H1" value="4">4 - Moderate<br>
<input type="radio" name="H1" value="5">5<br>
<input type="radio" name="H1" value="6">6 - Severe<br>
<input type="radio" name="H1" value="7">7<br>
<input type="radio" name="H1" value="8">8 - Extremely difficult<br>
<br>
2. To what extent do you have difficulty discarding (or recycling, selling, giving away) ordinary things that other people would get rid of?<br>
<input type="radio" name="H2" value="1">1<br>
<input type="radio" name="H2" value="2">2 - Mild<br>
<input type="radio" name="H2" value="3">3<br>
<input type="radio" name="H2" value="4">4 - Moderate<br>
<input type="radio" name="H2" value="5">5<br>
<input type="radio" name="H2" value="6">6 - Severe<br>
<input type="radio" name="H2" value="7">7<br>
<input type="radio" name="H2" value="8">8 - Extreme difficulty<br>
<br>
3. To what extent do you currently have a problem with collecting free things or buying more things than you need or can use or can afford?<br>
<input type="radio" name="H3" value="1">1<br>
<input type="radio" name="H3" value="2">2 - Mild<br>
<input type="radio" name="H3" value="3">3<br>
<input type="radio" name="H3" value="4">4 - Moderate<br>
<input type="radio" name="H3" value="5">5<br>
<input type="radio" name="H3" value="6">6 - Severe<br>
<input type="radio" name="H3" value="7">7<br>
<input type="radio" name="H3" value="8">8 - Extreme<br>
<br>
4. To what extent do you experience emotional distress because of clutter, difficulty discarding or problems with buying or acquiring things?<br>
<input type="radio" name="H4" value="1">1<br>
<input type="radio" name="H4" value="2">2 - Mild<br>
<input type="radio" name="H4" value="3">3<br>
<input type="radio" name="H4" value="4">4 - Moderate<br>
<input type="radio" name="H4" value="5">5<br>
<input type="radio" name="H4" value="6">6 - Severe<br>
<input type="radio" name="H4" value="7">7<br>
<input type="radio" name="H4" value="8">8 - Extreme<br>
<br>
5. To what extent do you experience impairment in your life (daily routine, job / school, social activities, family activities, financial difficulties) because of clutter, difficulty discarding, or problems with buying or acquiring things?<br>
<input type="radio" name="H5" value="1">1<br>
<input type="radio" name="H5" value="2">2 - Mild<br>
<input type="radio" name="H5" value="3">3<br>
<input type="radio" name="H5" value="4">4 - Moderate<br>
<input type="radio" name="H5" value="5">5<br>
<input type="radio" name="H5" value="6">6 - Severe<br>
<input type="radio" name="H5" value="7">7<br>
<input type="radio" name="H5" value="8">8 - Extreme<br>
<br>
<br>	
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>	
</body>
</html>