<html>
<body>
<?php
$con = mysqli_connect("localhost","root","password");

if (!$con)

{  die('Could not connect: ' . mysql_error()); }

 

mysqli_select_db($con,'database');

//if (isset($_POST['ownerName']) && isset($_POST['petName']) && isset($_POST['petAge'])  && isset($_POST['ownerEmail']) && isset($_POST['petDescription']) )

	// Instructions if $_POST['value'] exist

	$sql = "INSERT INTO `database`.`formdata` (ownerName, petName,inDate,outDate,kennelName ) VALUES ('$_POST[ownerName]','$_POST[petName]','$_POST[inDate]','$_POST[outDate]','$_POST[kennelName]')"; 

	if(mysqli_query($con, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}


 
mysqli_close($con)

?>

</body>

</html>