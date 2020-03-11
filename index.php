<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="cav2.png" />
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #171a21;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: grey;
  color: black;
}

.topnav a.active {
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

font {  
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 17px 16px;
  font-size: 14px;
  color: white;
  }
  
.untuk { margin-right: 10px;}
.iniaja { height: 32px;}
</style>
</head>
<title> Home </title>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="">About</a>
  <a class="active" href="">Contact</a>
  <a class="active" href="login.php">Log Out?</a>
  <font>Welcome <?php echo $_SESSION['username']; ?>!</font>
  
  <div class="search-container">
    <form action="login.php">
	  <button class="iniaja" type="submit"><i class="fa fa-search"></i></button>
      <input class="untuk" type="text" placeholder="Search.." name="search">
    </form>
  </div>
</div>



</body>
</html>
