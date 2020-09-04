<?php
require_once('connection.php');

if( $_SERVER['REQUEST_METHOD'] == "POST") 
	{
		$ex=".".substr($_FILES[$_POST['cimg']]['type'],6);
		$photo=mysql_query("select max(cid) from buyer");
		$photos=mysql_fetch_array( $photo );
		
		if($photos == "")
		{ 
			$nm="User0".$ex;
		}
		else
		{
			$nm="User".$photos[0].$ex;
		}
		
		
		
		$path1="\userprofile\\".$nm;
		$path2=dirname(__FILE__).$path1;
		
		$check=mysql_query("select * from buyer where cname=$_POST[cname] or cmail=$_POST[cmail]");
		$checking=mysql_fetch_array($check);
		if($checking[0] == "" )
		{ 
				$s=mysql_query("insert into buyer values(0,$_POST[fname],$_POST[lname],$_POST[cmail],$_POST[cname],$_POST[cpass],$_POST[contact],$_POST[contact2],$_POST[gender],$nm,$_POST[birthdate],0)");
			
			
				
				move_uploaded_file($_FILES[$_POST['cimg']]['tmp_name'],$path2);
				$a=mysql_query("insert into address values(0,$_POST[add1],$_POST[add2],$_POST[landmark],$_POST[area],$_POST[city],$_POST[state],$_POST[pincode])");
			
			header('location:login.php');
		
		}
	}
	
?>
