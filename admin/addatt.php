<!DOCTYPE HTML>
<html>

<body>
<h1> Add Attraction Page </h1>
<form action = "addatt.php#" method = "POST">
	Attraction Name:
	<br>
	<input type = "text" name = "attractionName" required>
	<br>
	Category:
	<br>
	<input type = "text" name = "category" required>
	<br>
	Description:
	<br>
	<input type = "text" name = "description" required>
	<br>
	Picture URL:
	<br>
	<input type = "text" name = "picture">
	<br>
	Phone Number:
	<br>
	<input type = "text" name = "phoneNumber">
	<br>
	Pricing:
	<br>
	<input type = "text" name = "pricing">
	<br>
	Street Number:
	<br>
	<input type = "text" name = "stNum">
	<br>
	Street Name:
	<br>
	<input type = "text" name = "stName">
	<br>
	Unit Number:
	<br>
	<input type = "text" name = "unitNum">
	<br>
	City:
	<br>
	<input type = "text" name = "city">
	<br>
	State:
	<br>
	<input type = "text" name = "state">
	<br>
	Zip Code:
	<br>
	<input type = "text" name = "zip">
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
			$cat = $_POST['category'];
			$des = $_POST['description'];
			$pic = $_POST['picture'];
			$phone = $_POST['phoneNumber'];
			$price = $_POST['pricing'];
			$stNum = $_POST['stNum'];
			$stName = $_POST['stName'];
			$unitNum = $_POST['unitNum'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$sql = "INSERT INTO attractions (attractionName, category,
			description, picture, phoneNumber, pricing, streetNumber, StreetName, unitNumber, city, state, zip) VALUES('$atName', '$cat', '$des', 
			'$pic', '$phone', $price, '$stNum', '$stName', '$unitNum', '$city', '$state', '$zip')";
			$ret = mysqli_query($db, $sql); 
			if($ret){
				echo "Insertion success!!";
			}
			else{
				echo "Please try again!";
			}
		}
	?>
</form>
<br><br>
<a href = "dash.php"> Back to Tables </a>
</body>
