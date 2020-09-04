<?php

	session_start();
	error_reporting(0);
	$con=mysql_connect("localhost","root","") or die("Connection Failed");//connection established
	mysql_select_db("emart",$con) or die("Databse not Found");//databse selected
	
	?>