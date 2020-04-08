<html>
<head>
<title> Search </title>

<style>
.word {
	color: white;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}
.but {padding:5px 10px 5px 10px;
      background-color: #ff3333;}
	  
.but:hover {padding:5px 10px 5px 10px;
      background-color:#ff3333;}
</style>
</head>

<body>
<?php 
include('dbcon.php'); 
include('banner.php');
include('menu.php');
?>

<center><br><br>
<form name="student" method="POST" action="">
	<input type="text" id="search" name="search1" value="" placeholder=" StudentName">
    &nbsp;<input type="submit" name="namebtn" Value="Search" class="but">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<Select name="lvl">
    
<?php
	 if($row['Level'] <> ' ')
 { echo"<option value=".$row['Level'].">".$row['Level']."</option>";}?>

<option value=' ' selected>Select Level</option>
<option value='G'>Level G</option>
<option value= '1'>Level 1</option>
<option value= '2'>Level 2</option></select>

&nbsp;<input type="submit" name="levelbtn" Value="Search" class="but">
</form>
</br></center>

<center>
<table width="80%" height="10%" border=1>
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
</center>

<?php 
if(isset($_POST['levelbtn'])){
$e = $_POST['lvl'];

if($e <> ''){
	$sql= "Select * FROM checkin Where Level LIKE '%$e%'";

	$result = $con->query($sql);
	
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {

	?>

		<tr style="background:white;">
		<td height="36" align="center"><?php echo $row["StudID"]; $id=$row["StudID"]; ?></td>
			<td align="center"><?php echo $row["StudName"]; ?></td>
			<td align="center"><?php echo $row["ContactNo"]; ?></td>
			<td align="left"><?php echo $row["Address"]; ?></td>
			<td align="center"><?php echo $row["DateBorrow"]; ?></td>
			<td align="center"><?php echo $row["RoomKey"]; ?></td>
			<td align="center"><?php echo $row["Level"]; ?></td>
		</tr>

<?php	}	//end while
	//end if result row
	}else{
		echo ('<tr border=1 style="background :white;text-align:center;"><td colspan="20">Sorry, there is not data found.</td></tr>');
	}

} //end if
} //end if isset
?>


<?php 
if(isset($_POST['namebtn'])){
$n = $_POST['search1'];

if($n <> ''){
	$sql2= "Select * FROM checkin Where StudName LIKE '%$n%'";
	$result2 = $con->query($sql2);
	
	if ($result2->num_rows > 0) {
		// output data of each row
		while($row = $result2->fetch_assoc()) {

	?>

		<tr style="background:white;">
		<td height="36" align="center"><?php echo $row["StudID"]; $id=$row["StudID"]; ?></td>
			<td align="center"><?php echo $row["StudName"]; ?></td>
			<td align="center"><?php echo $row["ContactNo"]; ?></td>
			<td align="left"><?php echo $row["Address"]; ?></td>
			<td align="center"><?php echo $row["DateBorrow"]; ?></td>
			<td align="center"><?php echo $row["RoomKey"]; ?></td>
			<td align="center"><?php echo $row["Level"]; ?></td>
		</tr>

<?php	}//end while
	//end if result row
	}else{
		echo ('<tr border=1 style="background :white;text-align:center;"><td colspan="20">Sorry, there is not data found.</td></tr>');
	}

} //end if
} //end if isset
?>

</table>
</html>
