<html>
<head><title> Edit Login Authentication </title>
<style>
.edit {
	width: 400px;
	height: 330px;
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
if(isset($_GET['username']))
{
	$id = $_GET['username'];
	$sql = "Select * From tbllogin Where username = '$id'";
	$result = $con->query($sql);

	$row = $result->fetch_assoc();
}
?>

<form name="frmedituser" method="post" action="">

  <br><h1> Login <br> Authentication </h1>
  <br />

<table>
<tr> 
	<td> Username </td>
    <td> : <input name="name" disabled type="text" Value="<?php echo $row['username'];?>"><br /><br /></td>
</tr>
<tr>
	<td> Password </td>
	<td> : <input name="pswd" type="text" Value="<?php echo $row['password'];?>"><br /><br /></td>
</tr>
</table>
        
<br /><br />                  

  <input type="submit" name = "update" value="Update Record" class="button">
  
  <input type="submit" name = "delete" value="Delete Record" class="button">
  
	</form>

<?php
 include('dbcon.php');
 if(isset($_POST['update'])) //will be execute if button Add New clicked 
 {
	//get all the needed information from the 
	$a = $_POST['name'];
	$b = $_POST['pswd'];
	 
	//Make the query to insert into the table.
	$query = "UPDATE tbllogin SET password='$b' WHERE username='$a'";
	 
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
	echo '<script>alert("The user has successfully updated.");</script>';
	echo '<script>window.location.href="edituserlist.php";</script>';
 }
?>

<?php
 include('dbcon.php');
 if(isset($_POST['delete'])) //will be execute if button Add New clicked 
 {
	 //get all the needed information from the 
	 $a = $_POST['name'];
	 
	 //Make the query to insert into the table.
	 $query2 = "DELETE FROM tbllogin WHERE username='$a'";
	 
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
	echo '<script>alert("The user has successfully deleted.");</script>';
	echo '<script>window.history.back()";</script>';
 }
?>
</div>
</center>