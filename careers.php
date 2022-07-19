<!DOCTYPE html>
<html>
<head>
	<title>Careers</title>
</head>
<body>
	<?php
		$FName=$_REQUEST["FName"];
		$LName=$_REQUEST["LName"];
		$email=$_REQUEST["inputEmail"];
		$address=$_REQUEST["inputAddress"];
		$city=$_REQUEST["inputCity"];
		$zip=$_REQUEST["inputZip"];


		echo "First name is $FName <br>";
		echo "Last name is $LName <br>";
		echo "Email is $email <br>";
		echo "Adress is $address. City is $city. Zip code is $zip."
	?>

</body>
</html>