<html>
<head>
<style> 
body {font-family:"Verdana";}


.button1 {
	font-family: "Courier New", Courier, monospace;
	background-color: #999;
	border-color: #900;
	color: black;
	width: 150px;
	height: 35px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	cursor: pointer;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}

.button1:hover {
    box-shadow: 0 12px 10px 0 42px rgba(0,0,0,0.24),0 10px 0px 0 rgba(0,0,0,0.19);
}


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #FFD5EA;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	font-family:"Tahoma";
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	background-color: white;;
}

.dropdown-content a:hover {background-color: #FFECF5;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
     background-color: #FFECF5;;
	
}

</style>
</head>

<body>
<center>
<a href="display.php"><Button class="button1">Home</button></a>

<div class="dropdown">
  <button class="button1">Room</button>
  <div class="dropdown-content">
    <a href="levellist.php">List All</a>
    <a href="search.php">Search by Name or Level</a>
  </div>
</div>

<a href="checkin.php"><Button class="button1">Check In</button></a>

<div class="dropdown">
  <button class="button1">Check Out</button>
  <div class="dropdown-content">
    <a href="editcheckinlist.php">Return Key</a>
    <a href="checkoutlist.php">Check Out List</a>
    <a href="search2.php">Search by Name or Level</a>
  </div>
</div>

<div class="dropdown">
  <button class="button1">Staff</button>
  <div class="dropdown-content">
    <a href="stafflist.php">Staff List</a>
    <a href="editstafflist.php">Edit Staff</a>
    <a href="addstaff.php">Add Staff</a>
  </div>
</div>

<div class="dropdown">
  <button class="button1">User</button>
  <div class="dropdown-content">
    <a href="userlist.php">User List</a>
    <a href="edituserlist.php">Edit User</a>
    <a href="adduser.php">Add User</a>
  </div>
</div>

<a href="login.php"><Button class="button1">Logout</button></a>
</center>

</body>
<html>