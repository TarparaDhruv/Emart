<?php

	require_once('connection.php');
		if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}


	if($_REQUEST['type']=='block')
	{
		$s=mysql_query("update buyer set blocked='1' where cid='$_REQUEST[id]'");
		header('location:allusers.php');
	}
	else
	{
		$s=mysql_query("update buyer set blocked='0' where cid='$_REQUEST[id]'");
		header('location:blockedusers.php');	
	}
?>