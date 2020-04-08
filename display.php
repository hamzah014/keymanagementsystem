<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Home Page </title>
<style>
body {background-image: url(".jpg");}
</style>
</head>

<body>
<?php include ('banner.php'); ?> <br>
<?php include ('menu.php'); ?> </br>


<center>
<img src="icon.png" width="10%" height="5%">

<!-- logged in user information -->
<?php include ('dbcon.php');
$username = (isset($_GET["id"]) ? $_GET['id'] : null);  


?>
	<h2>Welcome <strong><?php echo $username;?></strong></h2>

<br>
<center>
<script language="Javascript">
var i = 0;
var path = new Array();

//list of images
path[0] = "1.jpg";
path[1] = "2.jpg";
path[2] = "3.jpg";
path[3] = "4.jpg";
path[4] = "5.jpg";
path[5] = "6.jpg";
path[6] = "7.jpg";
path[7] = "8.jpg";

function swapImage()
{
	document.slide.src = path[i];
	if(i < path.length - 1) i++; else i = 0;
	setTimeout("swapImage()",3000);
}
window.onload=swapImage;
</script>
<img name="slide"/>
</center>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#facebook {
    top: 280px;
    background-color: #006;
}

#twitter {
    top: 340px;
    background-color: #06F;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="https://www.facebook.com/kptmbp/" id="facebook">Facebook</a>
  <a href="https://twitter.com/KPTMBatuPahat" id="twitter">Twitter</a>
</div>

</body>
</html>