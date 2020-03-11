<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="cav2.png" />
<style>
html { 
  background: url(gaming2.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.cav { width: 200px; height: 200px; margin-bottom: 50px;}
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 400px;
	background: #171a21;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 14px;
	font-family: calibri;
	color: white;
	
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #5c7e10;
	color: white;
	font-size: 11pt;
	width: 100%;
    font-family: calibri;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 

.signini { text-decoration: none; color: white; font-family: calibri;}

</style>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
	 header("Location: login.php");
 }
    }
?>
<div class="kotak_login">
<form action="" method="post" name="login">
<center><img class="cav" src="cav2.png"></center>
<left><label>Username</label></left>
		<br>
<input type="text" name="username" class="form_login"placeholder="Username" required />
<left><label>Password</label></left>
		<br>
<input type="password" name="password" class="form_login"placeholder="Password" required />
<input name="submit" type="submit" class="tombol_login"value="Login" />
</form>
<br>
<left><label>Dont Have an Account?</label> <a class="signini" href='registration.php'>Register Here</a></p>
</div>
<?php  ?>
</body>
</html>