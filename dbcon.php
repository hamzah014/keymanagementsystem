<?php

//$con = mysql_connect("localhost","root","") or die("unable to create connection");
//mysql_select_db("keymanagementsystem", $con) or die("database cannot viewed");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keymanagementsystem";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else{
    //die("Connection good ");
}


?>