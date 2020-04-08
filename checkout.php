<html>
<head><title> Check Out Confirmation </title>
<style>
body {background-image: url("");}
.edit {
	width: 400px;
	height: 590px;
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

<br><br>
<center>
<div class="edit" align="center"><br />
<?php
if(isset($_GET['StudId']))
{
	$id = $_GET['StudId'];
	$sql = "Select * From checkin Where StudID = '$id'";
	$result = $con->query($sql);

	$row = $result->fetch_assoc();

}
?>

<form name="frmeditstudent" method="post" action="" style="background-color: #CCC;">

  <br><h1>Check Out</h1>
  <br />

<table>
<tr>
	<td> Student ID </td>
    <td> : <input name="id" type="text" Value="<?php echo $row['StudID'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Student Name </td>
    <td> : <input name= "name" type=""  Value="<?php echo $row['StudName'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Contact No </td>
    <td> : <input name="no" type="text"  Value="<?php echo $row['ContactNo'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Address </td>
    <!-- <td> : <input name="addr" type="" Value="<?php echo $row['Address'];?>" required><br /><br /></td> -->
    <td> : <textarea name="addr" required cols="30" rows="10"><?php echo $row['Address'];?></textarea><br /><br /></td>
</tr>
<tr>
	<td> Date Borrow </td>
    <td> : <input name="dateborrow" type="text" Value="<?php echo $row['DateBorrow'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Date Return </td>
    <td> : <input name="datereturn" type="text" Value="<?php echo date('y-m-d');?>" required><br /><br /></td>
</tr>
<tr>
	<td> Room Key </td>
    <td> : <input name="rk" type="text" Value="<?php echo $row['RoomKey'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Student Name </td>
    <td> : <input name= "name" type=""  Value="<?php echo $row['StudName'];?>" required><br /><br /></td>
</tr>
<tr>
	<td> Level </td>
    <td> : <Select name="lvl" required>
    		<?php
				 if($row['Level'] <> ' ')
 				{ echo "<option value=".$row['Level'].">".$row['Level']."</option>";}?>
									 
					<option>[Choose Level]</option>
					<option value="G">Level G</option>
					<option value="1">Level 1</option>
					<option value="2">Level 2</option></select></td>
</tr>
</table>

<br /><br />                  

  <input type="submit" name = "delete" value="Check Out" class="button">
  
	</form>

<?php
 include('dbcon.php');
 if(isset($_POST['delete'])) //will be execute if button Add New clicked 
 {
	 //get all the needed information from the 
	 $a = $_POST['id'];
	 
	 //get all the needed information from the 
	 $a = $_POST['id'];
	 $b = $_POST['name']; 
	 $c = $_POST['no'];
	 $d = $_POST['addr'];
	 $e = $_POST['dateborrow']; 
	 $e2 = $_POST['datereturn'];
	 $f = $_POST['rk'];
	 $g = $_POST['lvl'];
	 //Make the query to insert into the table.
	 $query = "INSERT INTO checkout (StudID,StudName,ContactNo,Address,DateBorrow,DateReturn,RoomKey,Level)VALUES('$a','$b',$c,'$d','$e','$e2','$f','$g')";
	 
	//run the query to insert the person.
    if ($con->query($query) === TRUE) {
		//echo "yessss done";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
		echo '<script>window.history.back()";</script>';
		exit;
    }
	
	 
	 
	 //Make the query to insert into the table.
	 $query2 = "DELETE FROM checkin WHERE StudID='$a'";
	 
	//run the query to insert the person.
    if ($con->query($query2) === TRUE) {
		//echo "yessss done";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
		echo '<script>window.history.back()";</script>';
		exit;
    }
	
	//let them know the person has been added.
	echo '<script>alert("The checkout has successfully added.");</script>';
	echo '<script>window.history.back()";</script>';
 }
?>
</div>
</center>