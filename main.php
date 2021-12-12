<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>HomePage</title>
</head>

<body style="background-color:rgb(115, 196, 196)">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Monaco;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

form{
	margin-top: 50px;
}
.right
		{
			float: right;
		}
</style>


<!-- <a href="add.html" style="color:white;font-weight:900">Add New Booking</a><br/><br/> -->
<!-- <form name="form1"> -->
<form action="main.php" method="post" name="form1">

<div class="container">
<a class="right" href="index.php" style="color:white;font-weight:900">Logout</a>
  <img src="img_girl.jpg" alt="Notebook" style="width:100%;">
  
  <div class="content">
  <a href="add.html" style="color:white;font-weight:900">Add New Booking</a>
  

	<table width='80%' border=0>
    <tbody style="background-color: white; box-shadow: 110px black;border: 1px solid white;padding: 10px;box-shadow: 5px 10px #888888;">
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Number of people</td>  
		<td>Rooms</td>  
		<td>Price</td>   
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['rooms']."</td>";
		echo "<td>".$res['price']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</tbody>
	</table>
	</div>

</div>
</form>
</body>
</html>
