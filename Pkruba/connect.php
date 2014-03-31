<?php
//$url=parse_url(getenv("DATABASE_URL"));
//$host=$url['host'];
//$host = "ec2-54-204-40-140.compute-1.amazonaws.com:5432";

$user="ara";
$pass="SHWIy4qG";
$db="prshooters";
//$host="localhost";
$host="tunnel.pagodabox.com:3306";
//$pass=$url['pass'];
//$user=$url['user'];
//$db=substr($url['path'],1);


//$link=pg_connect($host,$user,$pass) or die("couldn't connect the host ".mysql_error());
$link = mysql_connect($host,$user,$pass) or die('Could not connect: ' . mysql_error());
$selcet=mysql_select_db($db,$link) or die("couldn't find the database:". mysql_error());

//$result=mysql_query("INSERT INTO `wikilanka`.`subscriber` SET `name`='Ridwan'",$dbhandle);
//echo ($result);
//echo "PL";

?>
