<!DOCTYPE html>
<html>
<head>
<title>Login with Validation PHP, MySQLi</title>
<style>
.message {color: #FF0000;}
</style>
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

		.center {
  			margin-left: auto;
  			margin-right: auto;
		}

    form{
	margin-top: 50px;
}
		</style>



<?php
// define variables and set to empty values
$Message = $ErrorUname = $ErrorPass ="";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = check_input($_POST["username"]);
 
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      $ErrorUname = "Space and special characters not allowed but you can use underscore(_)."; 
    }
    else{
        $fusername=$username;
    }
 
    $fpassword = check_input($_POST["password"]);
 
  if ($ErrorUname!=""){
    $Message = "Login failed! Errors found";
  }
  else{
  include('config.php');
 
  $query=mysqli_query($mysqli,"select * from `login_user` where username='$fusername' && password='$fpassword'");
  $Message = $query;
  //$num_rows=mysqli_num_rows($query);
  //$row=mysqli_fetch_array($query,true);
 
   //if ($num_rows>0){
   if ($query){
      $Message = "Login Successful!";
        header("Location: main.php");
     
  }
  else{
    $Message = "Login Failed! User not found";
  }
 
  }
}
 
function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<div class="container"> 

<img src="img_girl.jpg" alt="Notebook" style="width:100%;">
		<div class="content">
    <h2 style="color:white;font-weight:900">Signin Form</h2>
<p><span class="message">* required field.</span></p>
  Username: <input type="text" name="username" required>
  <span class="message">* <?php echo $ErrorUname;?></span>
  <br><br>
  Password: <input type="password" name="password" required>
  <span class="message">* <?php echo $ErrorPass;?></span>
  <br><br>
  <input type="submit" name="login">
  <br><br>
</div>
</div>
</form>
 
<span class="message">
<?php
    if ($Message=="Login Successful!"){
        echo $Message;
        echo 'Welcome, '.$row['fullname'];
    }
    else{
        echo $Message;
    }
 
?>
</span>
 
</body>
</html>