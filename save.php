<!DOCTYPE html>
<html>
<head>
	<title>saving data</title>
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "swap";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=reg_form", $username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connection successfully</br>";
			echo "REGISTERED USER DETAILS:</br>";
			$username = $_POST["username"];
			$email = $_POST["email"];
			$enr_no = $_POST["enr_no"];
			$event = $_POST["event"];
			$branch = $_POST["branch"];

			echo $username . "</br>" . $email . "</br>" . $enr_no . "</br>" . $event . "</br>" . $branch;

			$sql = "insert into candi (name,email,enr_no,event,branch) values ('$username','$email','$enr_no','$event','$branch')";
			$conn->exec($sql);
			echo "</br>inserted successfully!";

		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

	?>
	
</body>
</html>
