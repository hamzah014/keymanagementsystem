<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> KEYMANAGEMENTSYSTEM |LOGIN </title>
<style>

body {background-image: url("");}

.login {
	width: 360px;
	height: 450px;
	background-image: url("");
	font-family: "Courier New", Courier, monospace;
	background-color: #CCC;
	   }

h2 {
	font-family: "Courier New", Courier, monospace;
}

.button {padding: 7px 5px 7px 5px;
         background-color:white;}
.button:hover {padding: 6px 5px 6px 5px;
         background-color: #900;}
</style>
</head>

<body><br><br><br><br />
<center>
<br>
<div class="login">

<form name="login" method="post" action="checklogindb.php">
<br />
<?php include('banner.php'); ?>

<br>
<strong>Username : </strong>
      <input type="text" name="username" placeholder="Username" />
<br /><br /><strong>Password&nbsp;:</strong>
      <input type="password" name="password" placeholder="Password"/>
      <label>
      <br /><br />
       
        <input type="submit" name="Submit" id="Submit" value="LOG IN"/>
      </label>
      
</form>
</div>
</center>

</body>
</html>
