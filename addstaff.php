<html>
<head><title> Add Staff </title>
<style>


.edit {
	width: 400px;
	height: 440px;
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
<form name="frmeditstaff" method="post" action="" style="background-color: #CCC;">

  <h1> STAFF <br /></h1>
  <br />

<table>
<tr>
	<td> Staff ID </td>
	<td> : <input name="id2" type="text" placeholder="" required><br /><br /></td> 
</tr>
<tr>
<td> Staff Name </td>
<td> : <input name= "name2" type="" placeholder="" required><br /><br /></td>
</tr>
<tr>
	<td> Phone No </td>
    <td> : <input name="no2" type="text" placeholder="" required><br /><br /></td>
</tr>
<tr>
	<td> Address </td>
	<td> : <textarea name="addr2" id="addr" cols="30" rows="10" required></textarea><br /><br /></td>
</tr>
<tr>
	<td> Position </td> 
    <td> : <Select name="pst" required>

		<option value="">Choose Position</option>
		<option value="Warden">Warden</option>
		<option value="Admin">Admin</option>
		<option value="Staff">Staff</option>
		<option value="Others">Others</option></select>
	
	</td>
</tr>
</table>
        
<br /><br />                  
 <input type="submit" name = "addstaff" value="Add new" class="button">
  
	</form>
 <?php
 include('dbcon.php');
 if(isset($_POST['addstaff'])) //will be execute if button Add New clicked 
 {
	 //get all the needed information from the 
	 $a = $_POST['id2'];
	 $b = $_POST['name2']; 
	 $c = $_POST['no2'];
	 $d = $_POST['addr2'];
	 $e = $_POST['pst'];
	 //Make the query to insert into the table.
	 $query = "INSERT INTO staff(StaffID,StaffName,PhoneNo,Address,Position) VALUES('$a','$b',$c,'$d','$e')";
	 
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
	echo '<script>alert("The staff has been successfully added.");</script>';
	echo '<script>window.location.href = "stafflist.php";</script>';
 }
?>
</div>
</center>