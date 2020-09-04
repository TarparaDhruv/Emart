 <?php
	require_once('connection.php');
	
	if($_SESSION["user"]=="")
	header('location:login.php?');
	
						echo $_SESSION["user"]."user<br>";
						echo $_REQUEST["quantity"]."quantity<br>";
						echo $_REQUEST["pid"]."productid";
						$spricefetch = mysql_query("select sprice from product where pid='$_REQUEST[pid]'");
						$sprice =mysql_fetch_array($spricefetch);
						$total=$_REQUEST["quantity"]*$sprice[0];
						$s=mysql_query("insert into cart set cart_prim=0,uid='$_SESSION[user]',pid='$_REQUEST[pid]',quantity='$_REQUEST[quantity]',sprice='$sprice[0]',total='$total'") or die("Oops Something went wrong.");
					
					
					?>
