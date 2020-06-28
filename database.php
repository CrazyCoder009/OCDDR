<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form id="register_form">
<?php 
    session_start(); 
      
	$servername = "localhost/html";
	$username = "root";
	$password = "ocd"; 
	$dbname = "pdb";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}
	$sql_query = 'SELECT * FROM patients';
	
	$n = $_SESSION['name'];
	$e = $_SESSION['email_address'] ;
	$m = $_SESSION['mobile_number'];
	$u = $_SESSION['username'];
	$p = $_SESSION['password'];
	$g = $_POST['gender'];
	
	$o1a=$o1b=$o2=$o3=$o4=$o5=$c1a=$c1b=$c2=$c3=$c4=$c5=$to=$tc='';
	
	if(isset($_POST['Submit']))
	{	if(!isset($_POST['O1A']))
		{	$o1a = 0;
		}else
		{
			$o1a = $_POST['O1A'];
		}
		if(!isset($_POST['O1B']))
		{	$o1b = 0;
		}else
		{
			$o1b = $_POST['O1B'];
		}
		if(!isset($_POST['O2']))
		{	$o2 = 0;
		}else
		{
			$o2 = $_POST['O2'];
		}
		if(!isset($_POST['O3']))
		{	$o3 = 0;
		}else
		{
			$o3 = $_POST['O3'];
		}
		if(!isset($_POST['O4']))
		{	$o4 = 0;
		}else
		{
			$o4 = $_POST['O4'];
		}
		if(!isset($_POST['O5']))
		{	$o5 = 0;
		}else
		{
			$o5 = $_POST['O5'];
		}
		if(!isset($_POST['C1A']))
		{	$c1a = 0;
		}else
		{
			$c1a = $_POST['C1A'];
		}
		if(!isset($_POST['C1B']))
		{	$c1b = 0;
		}else
		{
			$c1b = $_POST['C1B'];
		}
		if(!isset($_POST['C2']))
		{	$c2 = 0;
		}else
		{
			$c2 = $_POST['C2'];
		}
		if(!isset($_POST['C3']))
		{	$c3 = 0;
		}else
		{
			$c3 = $_POST['C3'];
		}
		if(!isset($_POST['C4']))
		{	$c4 = 0;
		}else
		{
			$c4 = $_POST['C4'];
		}
		if(!isset($_POST['C5']))
		{	$c5 = 0;
		}else
		{
			$c5 = $_POST['C5'];
		}
	
	}
	
    $insert_query = "insert into patients ( 
                    name, 
                    email, 
                    mobile, 
                    username, 
                    password,gender,O1A,O1B,O2,O3,O4,O5,C1A,C1B,C2,C3,C4,C5
                    ) values ( '$n','$e','$m','$u','$p','$g','$o1a','$o1b','$o2','$o3','$o4','$o5','$c1a','$c1b','$c2','$c3','$c4','$c5')";

	
	$res1 = mysqli_query($conn, $insert_query); 

echo "<p><b><center>SUCCESSFULLY REGISTERED !!</center></b><br><br></p>";

$sql_query = "SELECT * FROM patients WHERE username='$u'";
	$field2name=$field3name=$str='';
	if ($result = $conn->query($sql_query)) {
 
		$row = $result->fetch_assoc();
        $field5name = (($row["O1A"] + $row["O1B"])/2) + $row["O2"]+ $row["O3"]+ $row["O4"]+ $row["O5"];
		$field4name = (($row["C1A"] + $row["C1B"])/2) + $row["C2"]+ $row["C3"]+ $row["C4"]+ $row["C5"];
		
		$qry = "UPDATE patients SET Total_O = '$field5name', Total_C = '$field4name' WHERE username='$u'";
		$exc = mysqli_query($conn, $qry);
		
		$field3name = $field5name + $field4name;
		if($field3name == 0)
		{
			$field2name = 0;
			$str = "NONE";
		}
		else if($field3name>=1 && $field3name<=8)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($field3name>=9 && $field3name<=16)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($field3name>=17 && $field3name<=24)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($field3name>=25 && $field3name<=32)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($field3name>=33 && $field3name<=40)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
        echo '<b><u>YOUR DETAILS:</u></b><br><br><b>Name:</b> '.$row["name"].'<br><b>Email:</b> '.$row["email"].'<br><b>Mobile:</b> '.$row["mobile"].'<br><b>Gender:</b> '.$row["gender"].'<br><br>';
		echo '<b><u>YOUR DIAGNOSIS:</u></b><br><br><b>Total Obsession Score:</b> '.$field5name.'<br><b>Total Compulsions Score:</b> '.$field4name.'<br><b>Total OCD Score:</b> '.$field3name.'<br><b>Your OCD Severity Level:</b> '.$field2name.' ('.$str.')<br><br>';
		
	}
	echo '<b><u>OCD Subtype Diagnosis:</u></b><br><br>';
	
	$query1 = "SELECT * FROM hoarding WHERE username='$u'";
	if ($result = $conn->query($query1)) {
		$row1 = $result->fetch_assoc();
		
		if($row1["Total_H"] == 0 || $row1["Total_H"] == NULL)
		{
			$row1["Total_H"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row1["Total_H"]>=1 && $row1["Total_H"]<=8)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row1["Total_H"]>=9 && $row1["Total_H"]<=16)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row1["Total_H"]>=17 && $row1["Total_H"]<=24)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row1["Total_H"]>=25 && $row1["Total_H"]<=32)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row1["Total_H"]>=33 && $row1["Total_H"]<=40)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Hoarding</b><br>Total Score: '.$row1["Total_H"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query2 = "SELECT * FROM kleptomania WHERE username='$u'";
	if ($result = $conn->query($query2)) {
		$row2 = $result->fetch_assoc();
		
		if($row2["Total_K"] == 0 || $row2["Total_K"] == NULL)
		{
			$row2["Total_K"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row2["Total_K"]>=1 && $row2["Total_K"]<=10)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row2["Total_K"]>=11 && $row2["Total_K"]<=20)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row2["Total_K"]>=21 && $row2["Total_K"]<=30)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row2["Total_K"]>=31 && $row2["Total_K"]<=40)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row2["Total_K"]>=41 && $row2["Total_K"]<=50)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Kleptomania</b><br>Total Score: '.$row2["Total_K"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query3 = "SELECT * FROM ttm WHERE username='$u'";
	if ($result = $conn->query($query3)) {
		$row3 = $result->fetch_assoc();
		
		if($row3["Total_T"] == 0 || $row3["Total_T"] == NULL)
		{
			$row3["Total_T"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row3["Total_T"]>=1 && $row3["Total_T"]<=6)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row3["Total_T"]>=7 && $row3["Total_T"]<=12)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row3["Total_T"]>=13 && $row3["Total_T"]<=18)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row3["Total_T"]>=19 && $row3["Total_T"]<=23)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row3["Total_T"]>=24 && $row3["Total_T"]<=28)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Trichotillomania</b><br>Total Score: '.$row3["Total_T"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query4 = "SELECT * FROM bdd WHERE username='$u'";
	if ($result = $conn->query($query4)) {
		$row4 = $result->fetch_assoc();
		
		if($row4["Total_B"] == 0 || $row4["Total_B"] == NULL)
		{
			$row4["Total_B"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row4["Total_B"]>=1 && $row4["Total_B"]<=9)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row4["Total_B"]>=10 && $row4["Total_B"]<=18)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row4["Total_B"]>=19 && $row4["Total_B"]<=27)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row4["Total_B"]>=28 && $row4["Total_B"]<=36)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row4["Total_B"]>=37 && $row4["Total_B"]<=44)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Body Dysmorphic</b><br>Total Score: '.$row4["Total_B"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query5 = "SELECT * FROM skinp WHERE username='$u'";
	if ($result = $conn->query($query5)) {
		$row5 = $result->fetch_assoc();
		
		if($row5["Total_E"] == 0 || $row5["Total_E"] == NULL)
		{
			$row5["Total_E"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row5["Total_E"]>=1 && $row5["Total_E"]<=9)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row5["Total_E"]>=10 && $row5["Total_E"]<=18)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row5["Total_E"]>=19 && $row5["Total_E"]<=27)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row5["Total_E"]>=28 && $row5["Total_E"]<=36)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row5["Total_E"]>=37 && $row5["Total_E"]<=44)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Excoriation</b><br>Total Score: '.$row5["Total_E"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query6 = "SELECT * FROM hypoc WHERE username='$u'";
	if ($result = $conn->query($query6)) {
		$row6 = $result->fetch_assoc();
		
		if($row6["Total_HY"] == 0 || $row6["Total_HY"] == NULL)
		{
			$row6["Total_HY"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row6["Total_HY"]>=1 && $row6["Total_HY"]<=10)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row6["Total_HY"]>=11 && $row6["Total_HY"]<=20)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row6["Total_HY"]>=21 && $row6["Total_HY"]<=30)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row6["Total_HY"]>=31 && $row6["Total_HY"]<=40)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row6["Total_HY"]>=41 && $row6["Total_HY"]<=50)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Hypochondriasis</b><br>Total Score: '.$row6["Total_HY"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query7 = "SELECT * FROM tic WHERE username='$u'";
	if ($result = $conn->query($query7)) {
		$row7 = $result->fetch_assoc();
		
		if($row7["Total_TS"] == 0 || $row7["Total_TS"] == NULL)
		{
			$row7["Total_TS"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row7["Total_TS"]>=1 && $row7["Total_TS"]<=9)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row7["Total_TS"]>=10 && $row7["Total_TS"]<=18)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row7["Total_TS"]>=19 && $row7["Total_TS"]<=28)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row7["Total_TS"]>=29 && $row7["Total_TS"]<=38)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row7["Total_TS"]>=39 && $row7["Total_TS"]<=48)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Tic/Tourette Syndrome</b><br>Total Score: '.$row7["Total_TS"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
	
	$query8 = "SELECT * FROM anxiety WHERE username='$u'";
	if ($result = $conn->query($query8)) {
		$row8 = $result->fetch_assoc();
		
		if($row8["Total_A"] == 0 || $row8["Total_A"] == NULL)
		{
			$row8["Total_A"] = 0;
			$field2name = 0;
			$str = "NONE";
		}
		else if($row8["Total_A"]>=1 && $row8["Total_A"]<=8)
		{
			$field2name = 1;
			$str = "SLIGHT";
		}
		else if($row8["Total_A"]>=9 && $row8["Total_A"]<=16)
		{
			$field2name = 2;
			$str = "MILD";
		}
		else if($row8["Total_A"]>=17 && $row8["Total_A"]<=24)
		{
			$field2name = 3;
			$str = "MODERATE";
		}
		else if($row8["Total_A"]>=25 && $row8["Total_A"]<=32)
		{
			$field2name = 4;
			$str = "SEVERE";
		}
		else if($row8["Total_A"]>=33 && $row8["Total_A"]<=40)
		{
			$field2name = 5;
			$str = "EXTREME";
		}
		else
			echo 'Invalid Details !!';
		
		echo '<b>Anxiety</b><br>Total Score: '.$row8["Total_A"].'&ensp;&emsp;Severity: '.$field2name.' ('.$str.')<br>';
	}
?>
</form>
</body>
</html>
