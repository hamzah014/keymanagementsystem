<html>
<head>
<title> Staff List </title>

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
<center>
<head>

</head>
<br><br>
<form name="frmStaffList" action="" method="POST">
<p><strong> List of Staff </strong></p>
<br>
<table width="80%" height="30%" border=1>
<tr>
		<th width="100" bgcolor="#C33" class="word"><div align="center">
    	Staff ID </div></th>
    	<th width="150" bgcolor="#C33" class="word"><div align="center">
    	Staff Name </div></th>
    	<th width="150" bgcolor="#C33" class="word"><div align="center">
    	Phone No </div></th>
        <th width="150" bgcolor="#C33" class="word"><div align="center">
    	Address </div></th>
        <th width="150" bgcolor="#C33" class="word"><div align="center">
    	Position </div></th>
    </tr>
    
<?php
	include('checklogindb.php');
	
	$sql = "SELECT * FROM staff";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

	?>

     	<tr border=1 style="background: white;">
     		<td align=center><?php echo $row['StaffID'];?> </td>
     		<td align=center><?php echo $row['StaffName']; ?></td>
     		<td align=center><?php echo $row['PhoneNo']; ?></td>
     		<td align=left><?php echo $row['Address'];?> </td>
     		<td align=center><?php echo $row['Position']; ?></td>
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