<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',rooms='$numberofrooms',price='$price'WHERE name='$name'");
		
		//redirectig to the display page. In our case, it is main.php
		header("Location: main.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id= $id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body  style="background-color:rgb(115, 196, 196)">

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

		.center {
  			margin-left: auto;
  			margin-right: auto;
		}
		.left
		{
			float: left;
		}
		.right
		{
			float: right;
		}

		.alignment
		{
			align-items: left;

		}
</style>

	
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
	
	<div class="container">
	<a class="right" href="index.php" style="color:white;font-weight:900">Logout</a>
	<img src="img_girl.jpg" alt="Notebook" style="width:100%;">
	<div class="content">
	<a href="main.php" style="color:white;font-weight:900">Home</a>
	
		<table class="center" width="100%" border="2">
		<tbody style="background-color: white; box-shadow: 110px black;border: 1px solid white;padding: 10px;box-shadow: 5px 10px #888888;">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"size="90"></td>
			</tr>
			<tr> 
				<td>No of people</td>
				<!-- <td><input type="text" name="age" id="Numberofpeople" value="<?php echo $age;?>"size="90"></td> -->
				<td>
				<input type="number" name="age" id="Numberofpeople" value="<?php echo $age;?>" size="20">
				<button type="button" name="Calculate" onclick="getInputValue();" onclick="rm();">Calculate</button>
				<script type="text/javascript">
					function getInputValue(){
					var n1 = document.getElementById("Numberofpeople").value;
					n1=parseInt(n1/2);
					var price;
					price = n1 * 500;
					document.getElementById("sm").value = n1;
					document.getElementById("fn").value = price;
					
					}
				</script>
				
				</td>  
			</tr>
			<tr>
				<td>No of Rooms</td>
				<td>
				<input id="sm" name="rooms">
				</td>
				
			</tr>
			<tr>
				<td>Final Price</td>
				<td><input id="fn" name="price">
				</td>  
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?> size="90" readonly></td>
				
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>size="90"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
</tbody>
		</table>
	</div>
	</div>
	</form>
</body>
</html>
