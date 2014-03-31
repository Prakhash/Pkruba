<?php

	
	require("email.php");



if(isset($_GET['mail']))
{
	$mail=$_GET['mail'];
	
	
	echo send($mail);
	

}
else
{
	header('Location:index.php');
}
?>
