<html>
<head>
<title> User List </title>

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
<form name="frmUserList" action="" method="POST">
<p><strong> List of User </strong></p>
<br>
<table width="50%" height="25%" border=1>
	<tr>
		<th width="10" bgcolor="#C33" class="word"><div align="center">
    		No. </div></th>
		<th width="100" bgcolor="#C33" class="word"><div align="center">
    		Username </div></th>
    	<th width="100" bgcolor="#C33" class="word"><div align="center">
    		Password </div></th>
    </tr>
    
<?php
	include('checklogindb.php');
	
	$count = 0;

	$sql = "SELECT * FROM tbllogin";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$count++;
	?>
     <tr border=1 style="background :white;">
      <td align=center><?php echo $count;?> </td>
      <td align=center><?php echo $row['username'];?> </td>
      <td align=center><?php echo $row['password']; ?></td>
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