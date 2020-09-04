<?php
	error_reporting(0);
	require_once('connection.php');
	
	mysql_query("delete  from cart where cart_prim='$_REQUEST[delcartid]' and uid='$_SESSION[user]' ");
	header('location:cart.php');
?>