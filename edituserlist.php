<html>
<head>
<title> Edit User List </title>

<style>
.word {
	color: white;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}
</style>
</head>

<body>
<?php 
include('banner.php');
include('menu.php');
?>

<br><br>
<center>
<form name="frmUserList" action="edituser1.php" method="POST">
<p><strong> Edit List of User </strong></p>
<br>
<table width="70%" height="30%" border=1>
<tr>
	<th width="100" bgcolor="#C33" class="word"><div align="center">
    	Username </div></th>
    <th width="100" bgcolor="#C33" class="word"><div align="center">
    	Password </div></th>
    <th width="100" bgcolor="#C33" class="word"><div align="center">
    	Manipulate Action </div></th>
    </tr>
    
 <?php
	include ('dbcon.php');
	
	$sql = "SELECT * FROM tbllogin";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

	?>
      <tr border=1 style="background :white;">
      <td align=center><?php echo $row["username"]; $username = $row["username"];?></td>
      <td align=center><?php echo $row["password"]; ?></td>
      <td align=center><?php echo "<a href='edituser.php?username=".$username."'>Edit</a>"; ?></td>
     </tr>
    <?php
	
		}	

	} else {
	echo ('<tr border=1 style="background :white;text-align:center;"><td colspan="20">Sorry, there is not data found.</td></tr>');
	}


	
?>
    
</table>
</form>
</center>
</html>