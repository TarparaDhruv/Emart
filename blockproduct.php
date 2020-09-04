<?php

	require_once('connection.php');
	
	if($_REQUEST['type']=='unblock')
	{
		$s=mysql_query("update product set visible=0 where pid='$_REQUEST[id]'");
		header('location:blockedproduct.php');
	}
	else
	{
		$s=mysql_query("update product set visible=1 where pid='$_REQUEST[id]'");
		header('location:allproducts.php');
	}
?>