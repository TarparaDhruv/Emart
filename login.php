<?php

	require_once('connection.php');
	$w=0;
	$hiii=0;
	
	if($_SESSION['user']!="")
	{
		header('location:index.php');	
	}
	
	if(isset($_REQUEST['submit']))
	{
		$s=mysql_query("select * from buyer where (BINARY cname=BINARY '$_REQUEST[cname]' and BINARY cpass=BINARY '$_REQUEST[cpass]') and blocked='0' ");
		$ss=mysql_fetch_array($s);
		$blocked=$ss[11];
		if($ss[0]!="" && $ss[11]=='1')
		{
			$hiii=1;
		}
		else if($ss[0]!="")
		{
			$_SESSION['user']=$ss[4];
			
			if($_REQUEST['cname']=='admin' and $_REQUEST['cpass']=='adminjdv')
			{
				header('location:adminhome.php');
			}
			else
			{
				header('location:index.php');
			}
		}
		else
		{
			$w=1;
		}
	}
		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device:width,intial-scale=1">
<script type="text/javascript" src="jquery-1.3.2.min.js" ></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="Fa fa/css/font-awesome.min.css" rel="stylesheet">
<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<title>:: E-MART :: - No Confusion Great Deal </title>
<link href="Images/titlelogo.png" rel="icon">

</head>

<body>

    	<div class="container-fluid">
        <header>
        	<?php
				require_once('header.php');
			?>
        </header>
            <hr> 
         
         <section>
         	<article>
            	<div class="row">
                	<div class="col-md-4 col-md-offset-4 ">
                    	
                        <div class="registration">
                        <div class="form-box">
                        <div  class="heading" style="font-size:22px;"><center>Signin with your E-mart Account</center></div>
                        <hr>
                        	
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                                	
                                    	<div class="error">
                                        	<?php
												if($w==1)
												{
													echo "Username and Password does not match!..";
												}
												
											?>
                                        </div>
                                        <div class="error">
                                        	<?php
												
												if($hiii==1)
												{
													echo "You are Blocked";
												}
											?>
                                        </div>
                                      <div class="input-group margin_botm">
                                   			<div class="input-group-addon ">
                                        		<div class="same"><i class="fa fa-user "></i>
                                        		</div>
                                        	</div>
                                        <input autofocus type="text" name="cname" pattern="[a-zA-Z0-9]{0,30}$" placeholder="User Name" class="form-control txt" required title="Enter Your Username." maxlength="30">
                              			</div>
                                        
          				      			<div class="input-group margin_botm">
                                    		<div class="input-group-addon ">
                                           	 	<div class="same"><i class="fa fa-lock "></i>
                                            	</div>
                                            </div>
                                        <input type="password" name="cpass" placeholder="Password" class="form-control txt" required  title="Enter Your Password " pattern=".{6,15}" maxlength="15" >
                                    	</div>
                                    	<a style="float:right; color:grey; text-decoration:none;" href="forgotpass.php">Forgot Password ?</a>
                                    	<div class="margin_top" style="clear:both;">
                       	      	 	    <center><input type="submit" value="Sign in" class="form-control btn allbtn" name="submit"></center>
                                    	</div>
                                    
                                 </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
         </section>
        <footer>
        	<?php
				require_once('footer.php');
			?>
        </footer>
        </div>
        
   
</body>
</html>