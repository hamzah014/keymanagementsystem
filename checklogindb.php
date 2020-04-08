<?php

include'dbcon.php';

//sql query to retrive contents of tbllogin

if (isset($_POST['Submit']))
{
	$username = $_POST['username'];
    $password= $_POST['password'];
	//$result = mysql_query("SELECT * FROM tbllogin where Username='$username' and Password='$password'");
	
	$sql = "SELECT * FROM tbllogin where Username='$username' and Password='$password'";
    $result = $con->query($sql);

	//if(!$data=mysql_fetch_assoc ($result)){
	//	echo ("<br /><br /><center><div class='logfail'><br /><font color='red'><strong>UNAUTHORIZED LOGIN</strong><hr /><br /></font><strong>Please make sure your username and password is correct.</strong><br /><br /><a href='login.php'><button class='err'>Back to Login</button></a></div></center>");
	//	}
	//else{
	//	header("location:display.php?id=$username");
	//	
    //    //header("location:display.php");
	//}

	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
			
			
    		//header("location:display.php");

		}

		header("location:display.php?id=$username");


	} else {
		echo ("<br /><br /><center><div class='logfail'><br /><font color='red'><strong>UNAUTHORIZED LOGIN</strong><hr /><br /></font><strong>Please make sure your username and password is correct.</strong><br /><br /><a href='login.php'><button class='err'>Back to Login</button></a></div></center>");
	}





}
?>
