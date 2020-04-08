<html>
<head>
<title> Edit Staff List </title>

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
<p><strong> Edit List of Staff </strong></p>
<br>
<table width="80%" height="30%" border=1>
<tr>
	<th width="100" bgcolor="#C33" class="word"><div align="center">
    	Staff ID </div></th>
    <th width="150" bgcolor="#C33" class="word"><div align="center">
    	Staff Name </div></th>
    <th width="140" bgcolor="#C33" class="word"><div align="center">
    	Phone No </div></th>
        <th width="100" bgcolor="#C33" class="word"><div align="center">
    	Address </div></th>
    <th width="150" bgcolor="#C33" class="word"><div align="center">
    	Position </div></th>
    <th width="150" bgcolor="#C33" class="word"><div align="center">
    	Manipulate Action </div></th>
    </tr>
    
 <?php
	include ('dbcon.php');
	
	$sql = "SELECT * FROM staff";
	
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

	?>

      	<tr border=1 style="background: white;">
      		<td align=left><?php echo $row["StaffID"]; $id = $row["StaffID"];?></td>
      		<td align=left><?php echo $row["StaffName"]; ?></td>
      		<td align=center><?php echo $row["PhoneNo"]; ?></td>
      		<td align=left><?php echo $row["Address"];?></td>
      		<td align=left><?php echo $row["Position"]; ?></td>
      		<td align=center><?php echo "<a href='editstaff.php?StaffId=".$id."'>Edit</a>"; ?></td>
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