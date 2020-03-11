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
	float: right;
	padding: 30px 20px;
	height: 100%;
}
 
label{
	font-size: 14px;
	font-family: calibri;
	color: white;
    margin-top: 20px;	
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
 
.sign { font-size: 20px; 
	font-family: calibri;}
	
.signini { text-decoration: none; color: white; font-family: calibri;}

</style>
<script>
var scrl = "+| Sign Up |+";
function scrlsts() {
 scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
 document.title = scrl;
 setTimeout("scrlsts()", 300);
 }

</script>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body onLoad="scrlsts()">
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           Header("Location: login.php");
        }
    }else{
?>
<div class="kotak_login">
<form name="registration" action="" method="post">
<center><label class="sign">Sign Up</label></center>
<br>
<left><label>Username</label></left>
<br>
<input type="text" name="username" class="form_login"placeholder="Username" required />
<left><label>Email</label></left>
<br>
<input type="email" name="email" class="form_login"placeholder="Email" required />
<left><label>Password</label></left>
<br>
<input type="password" name="password" class="form_login"placeholder="Password" required />
<input type="submit" name="submit" class="tombol_login" value="Register" />
<br><br>
<left><label>Already have an Account?</label> <a class="signini" href='login.php'>Login Here</a></p>
</form>
</div>
<?php } ?>
</body>
</html>