<html>
<heah>
<title> Check Out List </title>

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

<?php
include('banner.php');
include('menu.php');
?>

<center><br><br>
<form name="frmStudentList" action="" method="POST">
<p><strong> List of Check Out Students </strong></p>
<br>
<table width="80%" height="20%" border=1>
<tr>
		<th width="125" bgcolor="#C33" class="word"><div align="center">
    	Student ID </div></th>
    	<th width="180" bgcolor="#C33" class="word"><div align="center">
    	Student Name </div></th>
    	<th width="125" bgcolor="#C33" class="word"><div align="center">
    	Contact No </div></th>
        <th width="180" bgcolor="#C33" class="word"><div align="center">
    	Address </div></th>
        <th width="125" bgcolor="#C33" class="word"><div align="center">
    	Date Borrow </div></th>
        <th width="100" bgcolor="#C33" class="word"><div align="center">
    	Room Key </div></th>
        <th width="100" bgcolor="#C33" class="word"><div align="center">
    	Level </div></th>
    </tr>
    
<?php
	include('checklogindb.php');
	
	$sql = "SELECT * FROM checkout";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {


	?>

    	<tr style="background: white;">
    	 	<td align=center><?php echo $row['StudID'];?> </td>
    	 	<td align=center><?php echo $row['StudName']; ?></td>
    	 	<td align=center><?php echo $row['ContactNo']; ?></td>
    	 	<td align=left><?php echo $row['Address'];?> </td>
    	 	<td align=center><?php echo $row['DateBorrow']; ?></td>
    	 	<td align=center><?php echo $row['RoomKey']; ?></td>
    	 	<td align=center><?php echo $row['Level']; ?></td>
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