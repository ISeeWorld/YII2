<?php  
require("config.php") ;
$db=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatebase,$db);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $config_blogname;?>
	</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div id="header">
<h1><?php echo $config_blogname ?></h1>
<a href="index.php">home</a>
<a href="index.php">categories</a>
<a href="index.php">logins</a>
</div>

<div id="main">
