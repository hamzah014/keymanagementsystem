<html>
<head><title> Edit Staff </title>
<style>
.edit {
	width: 400px;
	height: 460px;
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
if(isset($_GET['StaffId']))
{
	$id = $_GET['StaffId'];
	$sql = "Select * From staff Where StaffID = '$id'";
	$result = $con->query($sql);

	$row = $result->fetch_assoc();
}
?>

<form name="frmeditstaff" method="post" action="" style="background-color: #CCC;">

  <br><h1>Staff</h1>
  <br />

<table>
<tr> 
	<td> Staff ID </td>
    <td> : <input name="id" type="text" Value="<?php echo $row['StaffID'];?>"><br /><br /></td>
</tr>
<tr>
	<td> Staff Name </td>
    <td> : <input name= "name" type=""  Value="<?php echo $row['StaffName'];?>"><br /><br /></td>
<tr>
	<td> Phone No </td>
	<td> : <input name="no" type="text"  Value="<?php echo $row['PhoneNo'];?>"><br /><br /></td>
</tr>
<tr>
	<td> Address </td>
	<td> : <textarea name="addr" id="addr" cols="30" rows="10" required><?php echo $row['Address'];?></textarea><br /><br /></td>
</tr>
<tr>
	<td> Position </td>
	<td> : <Select name="pst">

		<option <?php if($row['Position']==""){echo 'selected';} ?>>Choose Position</option>
		<option <?php if($row['Position']=="Warden"){echo 'selected';} ?> value="Warden">Warden</option>
		<option <?php if($row['Position']=="Admin")	{echo 'selected';} ?> value="Admin">Admin</option>
		<option <?php if($row['Position']=="Staff")	{echo 'selected';} ?> value="Staff">Staff</option>
		<option <?php if($row['Position']=="Others"){echo 'selected';} ?> value="Others">Others</option></select>
	
	</td>
</tr>
</table>
        
<br /><br />                  

  <input type="submit" name = "update" value="Update Record" class="button">
  
  <input type="submit" name = "delete" value="Delete Record" class="button">
  
	</form>

<?php
	
 	if(isset($_POST['update'])) //will be execute if button Add New clicked 
 	{	
		 //get all the needed information from the 
		 $a = $_POST['id'];
		 $b = $_POST['name']; 
		 $c = $_POST['no'];
		 $d = $_POST['addr'];
		 $e = $_POST['pst'];

		 //Make the query to insert into the table.
		$query = "UPDATE staff SET StaffName='$b', PhoneNo='$c', Address='$d', Position='$e' WHERE StaffID='$a'";

		//run the query to insert the person.
		//run the query to insert the person.
 	   if ($con->query($query) === TRUE) {
			//echo "yessss done";
 	   } else {
 	       //echo "Error: " . $sql . "<br>" . $conn->error;
 	       echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
			echo '<script>window.history.back()";</script>';
			exit;
 	   }

		//let them know the person has been added.
		echo '<script>alert("The staff has been successfully updated.");</script>';
		echo '<script>window.location.href = "stafflist.php";</script>';

 	}

?>

<?php


 if(isset($_POST['delete'])) //will be execute if button Add New clicked 
 {
	 
	 //get all the needed information from the 
	 $a = $_POST['id'];
	 
	 //Make the query to insert into the table.
	 $query = "DELETE FROM staff WHERE StaffID='$a'";
	 
	//run the query to insert the person.
    if ($con->query($query) === TRUE) {
		//echo "yessss done";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
		echo '<script>window.history.back()";</script>';
		exit;
    }
	
	//let them know the person has been added.
	echo '<script>alert("The staff has been successfully deleted.");</script>';
	echo '<script>window.location.href = "stafflist.php";</script>';
 }
?>
</div>
</center>