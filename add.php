<html>
<head>
	<title>Add Booking</title>
</head>

<body style="background-color:rgb(115, 196, 196)">
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$numberofrooms = mysqli_real_escape_string($mysqli, $_POST['rooms']);
	$price = mysqli_real_escape_string($mysqli, $_POST['price']);
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,rooms,price,email) VALUES('$name','$age','$numberofrooms','$price','$email')");
		
		//display success message
		echo "<style='color=white;font-weight:900'>Booking added successfully.";
		echo "<br/><a href='main.php' style='color:white;font-weight:900'>View Result</a>";
	}
}
?>
</body>
</html>
