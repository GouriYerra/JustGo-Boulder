<!DOCTYPE HTML>
<html>

<body>
<h1> Remove Attraction Page </h1>
<form action = "rematt.php#" method = "POST">
	Attraction Name:
	<br>
	<input type = "text" name = "attractionName" required>
	<br><br>
	<input type = "submit">
	<br><br>
	<?php
		include_once("../config.php");
		if(!empty($_POST)){
			if( $db -> connect_error){
					die("connect error: ".$db->connect_errno.": ".$db->connect_error);
			}
			echo "connected!!!!";
			$atName = $_POST['attractionName'];
			$sql = "DELETE FROM attractions WHERE attractionName = '$atName'";
			$ret = mysqli_query($db,$sql);
			if($ret){
				echo "Successful Deletetion!";
			}
			else{
				echo "Uh Oh, something went wrong!";
			}
		}
	?>
</form>
<br><br>
<a href = "dash.php"> Back to Tables </a>

</body>