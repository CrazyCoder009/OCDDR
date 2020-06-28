<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<form method = "POST" action = "database.php" id = "symptom_form">
<p class="error">* required field</p><br>
<span class="error">*</span>Gender: <input type="radio" name="gender" value="male"> MALE 
<input type="radio" name="gender" value="female"> FEMALE
<br><br>
<h4>QUESTIONS ON OBSESSIONS:</h4>
1A. Time occupied by Obsessive Thoughts:<br>
<input type="radio" name="O1A" value="1">Less than 1hr/day<br>
<input type="radio" name="O1A" value="2">1 to 3hrs/day<br>
<input type="radio" name="O1A" value="3">3 to 8hrs/day<br>
<input type="radio" name="O1A" value="4">Greater than 8hrs/day<br>
<br>
1B. Obsession-free interval:<br>
<input type="radio" name="O1B" value="1">Greater than 8hrs/day<br>
<input type="radio" name="O1B" value="2">3 to 8hrs/day<br>
<input type="radio" name="O1B" value="3">1 to 3hrs/day<br>
<input type="radio" name="O1B" value="4">Less than 1hr/day<br>
<br>
2. Interference due to Obsessive Thoughts:<br>
<input type="radio" name="O2" value="1">slight interference with activities<br>
<input type="radio" name="O2" value="2">definite interference with performance<br>
<input type="radio" name="O2" value="3">substantial impairment in performance<br>
<input type="radio" name="O2" value="4">Incapacitating impairment<br>
<br>
3. Distress associated with Obsessive Thoughts:<br>
<input type="radio" name="O3" value="1">infrequent & not too disturbing<br>
<input type="radio" name="O3" value="2">frequent and disturbing but manageable<br>
<input type="radio" name="O3" value="3">very frequent and very disturbing<br>
<input type="radio" name="O3" value="4">near constant - disabling distress/frustration<br>
<br>
4. Resistance against Obsessions:<br>
<input type="radio" name="O4" value="1">try to resist most of the time<br>
<input type="radio" name="O4" value="2">need some effort to resist<br>
<input type="radio" name="O4" value="3">minimal resistance to all obsessions<br>
<input type="radio" name="O4" value="4">yields to obsession with no resistance<br>
<br>
5. Degree of control over Obsessive Thoughts:<br>
<input type="radio" name="O5" value="1">much control to divert/stop obsessions<br>
<input type="radio" name="O5" value="2">Moderate control with difficulty<br>
<input type="radio" name="O5" value="3">Little control - rarely successful in stopping obsessions,<br>
<input type="radio" name="O5" value="4">No control - completely involuntary<br>
<br>
<br>

<h4>QUESTIONS ON COMPULSIONS:</h4>
1A. Time occupied on Compulsive Behaviours:<br>
<input type="radio" name="C1A" value="1">Less than 1hr/day<br>
<input type="radio" name="C1A" value="2">1 to 3hrs/day<br>
<input type="radio" name="C1A" value="3">3 to 8hrs/day<br>
<input type="radio" name="C1A" value="4">Greater than 8hrs/day<br>
<br>
1B. Compulsion-free interval:<br>
<input type="radio" name="C1B" value="1">Greater than 8hrs/day<br>
<input type="radio" name="C1B" value="2">3 to 8hrs/day<br>
<input type="radio" name="C1B" value="3">1 to 3hrs/day<br>
<input type="radio" name="C1B" value="4">Less than 1hr/day<br>
<br>
2. Interference due to Compulsive Behaviours:<br>
<input type="radio" name="C2" value="1">Slight interference with activities<br>
<input type="radio" name="C2" value="2">Definite interference with performance<br>
<input type="radio" name="C2" value="3">Substantial impairment in performance<br>
<input type="radio" name="C2" value="4">Incapacitating impairment<br>
<br>
3. Distress associated with Compulsive Behaviours:<br>
<input type="radio" name="C3" value="1">slight anxiety/frustration during enacting/prevention<br>
<input type="radio" name="C3" value="2">moderately anxious/frustrating but manageable<br>
<input type="radio" name="C3" value="3">very prominent/disturbing increase in anxiety/frustration<br>
<input type="radio" name="C3" value="4">incapacitating anxiety/frustration<br>
<br>
4. Resistance against Conpulsion:<br>
<input type="radio" name="C4" value="1">Trying to resist most of the time<br>
<input type="radio" name="C4" value="2">Makes some effort to resist<br>
<input type="radio" name="C4" value="3">Minimal resistance to all compulsions<br>
<input type="radio" name="C4" value="4">Yields to compulsions with no resistance<br>
<br>
5. Degree of control over Obsessive Thoughts:<br>
<input type="radio" name="C5" value="1">Much/voluntary control to divert/stop compulsions<br>
<input type="radio" name="C5" value="2">Moderate control with difficulty<br>
<input type="radio" name="C5" value="3">Little control - only delay with difficulty<br>
<input type="radio" name="C5" value="4">No control - overpowering drive to compulsive behaviour<br>

				
<h4>Can you relate to any of the following OCD related disorders?</h4>
<i>Note: If the following disorder(s) are relevant then click on the button below the respective disorder(s) else ignore.</i><br><br>
HOARDING: Excessive accumulation of items regardless of their value.<br>
<input type="button" name="S1" value="Click here" onClick="window.location = 'hoarding.php'" /><br><br>
KLEPTOMANIA: Urge to steal regardless of need or profit.<br>
<input type="button" name="s2" value="Click here" onClick="window.location = 'kleptomania.php'" /><br><br>
TRICHOTILLOMANIA: Urge to pull out hair from scalp, eyebrows and other body areas.<br>
<input type="button" name="s3" value="Click here" onClick="window.location = 'ttm.php'" /><br><br>
BODY DYSMORPHIC: Obsessive focus on a defect/flaw in your appearance.<br>
<input type="button" name="s4" value="Click here" onClick="window.location = 'bdd.php'" /><br><br>
EXCORIATION: Urge to pick at one's own skin that may cause physical damage.<br>
<input type="button" name="s5" value="Click here" onClick="window.location = 'skinp.php'" /><br><br>
TIC/TOURETTE SYNDROME: Experiencing repetitive movements or unwanted sounds.<br>
<input type="button" name="s6" value="Click here" onClick="window.location = 'tic.php'" /><br><br>
HYPOCHONDRIA: Fear of having a serious medical condition even if symptoms are minor.<br>
<input type="button" name="s7" value="Click here" onClick="window.location = 'hypoc.php'" /><br><br>
ANXIETY: Feeling nervous, restless or stressed which might interfere with daily activities.<br>
<input type="button" name="s8" value="Click here" onClick="window.location = 'anxiety.php'" />


<br> <br>
<button type="submit" name="Submit" id="sub_btn"> SUBMIT </button>
</form>	
</body>
</html>