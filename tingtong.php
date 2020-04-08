<html>
<head><title> Check In </title>
<style>


.edit {
	width: 400px;
	height: 570px;
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
<form name="frmeditstudent" method="post" action="">

  <h1>CHECK IN</h1>
  <br />
<table>
<tr>
	<td> Student ID </td>
	<td> : <input name="id1" type="text" placeholder=""><br /><br /></td>
</tr>
<tr>	
    <td> Student Name </td>
    <td> : <input name= "name1" type="" placeholder=""><br /><br /></td>
</tr>
<tr>	
    <td> Contact No </td>
    <td> : <input name="no1" type="text" placeholder=""><br /><br /></td>
</tr>
<tr>	
    <td> Address </td>
    <td> : <textarea rows="4" cols="30" name="addr1" form="addrform"></textarea><br /><br /><br /><br /></td>
</tr>
<tr>	
    <td> Date Borrow </td>
    <td> : <input name= "datebor" type="" placeholder="" value="<?php echo date('y-m-d');?>"><br /><br /></td>
</tr>
<tr>	
    <td> Level </td>
    <td>  : <input name="lvl" type="text" placeholder=""><br /><br /></td>
</tr>
<tr>	
    <td> Room Key </td>
    <td> : <Select name="rk">
         <?php
	 		$sql = mysql_query("SELECT roomno FROM tblroom WHERE status=''");
			if (mysql_num_rows($sql)){
				$select = '<select name="rk">';
				while($rs = mysql_fetch_array($sql)){
					$select = '<option value="'.$row['roomkey'].'">"'.$row['roomkey'].'"</option>';
				}
			}
			$select.='</select>';
			echo $select;
			?>
			</td>
</tr>
</table>
        
<br /><br />                  
 <input type="submit" name = "addname" value="Add new" class="button">
  
	</form>
 <?php
 include('dbcon.php');
 if(isset($_POST['addname'])) //will be execute if button Add New clicked 
 {
	 //get all the needed information from the 
	 $a = $_POST['id1'];
	 $b = $_POST['name1']; 
	 $c = $_POST['no1'];
	 $d = $_POST['addr1'];
	 $e = $_POST['datebor']; 
	 $f = $_POST['rk'];
	 $g = $_POST['lvl'];
	 //Make the query to insert into the table.
	 $query = "INSERT INTO checkin (StudID,StudName,ContactNo,Address,DateBorrow,RoomKey,Level)VALUES('$a','$b',$c,'$d','$e','$f','$g')";
	 
	//run the query to insert the person.
	$result = mysql_query($query) OR die (mysql_error());
	
	
	
	//Make the query to insert into the table.
	$query = "UPDATE tblroom WHERE status='no'";
	
	//run the query to insert the person.
	$result = mysql_query($query) OR die (mysql_error());
	
	//let them know the person has been added.
	echo "You have successfully added ";
 }
?>
</div>
</center>