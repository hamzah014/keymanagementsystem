<html>
<head><title> Add User </title>
<style>


.edit {
	width: 400px;
	height: 280px;
	background-color: #CCC;
	font-family: "Courier New", Courier, monospace;
	   }
	   
.button {padding:7px 5px 7px 5px;
         background-color:white;}
.button:hover {background-color: #ff3333;}
</style>
</head>

<body>

<?php
//session_start();
?>
<?php 
include('banner.php');
include('menu.php');
?>
<?php
include('dbcon.php');
?>
<br /><br />
<center>
<div class="edit" align="center">
<br />
<form name="frmadduser" method="post" action="">

  <h1> SIGN UP <br /></h1>
  <br />

<table>
<tr>
	<td> Username </td>
	<td> : <input name="id3" type="text" placeholder=""><br /><br /></td>
</tr>
<tr>
	<td> Password </td>
    <td> : <input name="pswd3" type="password" placeholder=""><br /><br /></td>
</tr>
</table>
 
<br /><br />                  
 <input type="submit" name = "adduser" value="Add new" class="button">
  
	</form>
 <?php
 include('dbcon.php');
 if(isset($_POST['adduser'])) //will be execute if button Add New clicked 
 {
	 //get all the needed information from the 
	 $a = $_POST['id3'];
	 $b = $_POST['pswd3'];
	 //Make the query to insert into the table.
	 $query = "INSERT INTO tbllogin(username,password) VALUES('$a','$b')";
	 
	//run the query to insert the person.
	$result = mysql_query($query) OR die (mysql_error());
	
	//let them know the person has been added.
	echo "You have successfully Sign Up";
 }
?>
</div>
</center>