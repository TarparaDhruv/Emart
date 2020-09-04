<?php

	require_once('connection.php');
	
	if($_SESSION['user']=="")
	{
		header('location:index.php');
	}
	
	if(isset($_REQUEST['submit']))
	{
		$s=mysql_query("insert into contact values('$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[contact]','$_REQUEST[message]')");
		header('location:userhome.php');
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
<script src="function.js"></script>
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
               		<div class="col-md-3">
                    		<?php
								require_once('sidemenuuser.php');
							?>
                    </div>
               
                	<div class="col-md-4 col-md-offset-1 col-sm-12">
                    	
                        <div class="registration">
                        <div class="form-box">
                        <div  class="heading" style="font-size:22px;"><center>Contact Us</center></div>
                        <hr>
                        	
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                                	
                                    	<div class="input-group margin_botm">
                                   			<div class="input-group-addon ">
                                        		<div class="same"><i class="fa fa-user "></i>
                                        		</div>
                                        	</div>
                                        <input autofocus type="text" name="name" placeholder="Enter Your Name" class="form-control txt" maxlength="25" required pattern="[a-zA-Z]+[a-zA-Z]+{0,25}$" title="Enter Less than 25 Alphabets"  onkeypress="return AllowAlphabet(event)">
                              			</div>
                                   		
                                        <div class="input-group margin_botm">
                                   			<div class="input-group-addon ">
                                        		<div class="same"><i class="fa fa-envelope "></i>
                                        		</div>
                                        	</div>
                                        <input type="email" name="email" readonly value="support@emart.com" class="form-control txt" required>
                              			</div>
                                        
                                        <div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                                            	<div class="same"><i class="fa fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="contact" placeholder="Contact Number" class="form-control txt" maxlength="10" required pattern="[0-9]{10}"  title="Enter Correct Contact number(0-9)" onKeyPress="return isNumberKey(event)">
                                        </div>
                                        
                                        <div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                    							<div class="same"><i class="fa fa-commenting-o"></i></div>                        		
										    </div>
                                        <textarea cols="46" rows="4" style="background:white;" name="message" placeholder="Type your Problem here" required class="form-control"></textarea>
                                        </div>
                                        
          				      			<div class="margin_top" style="clear:both;">
                       	      	 	    <center><input type="submit" value="Submit" class="form-control btn allbtn" name="submit"></center>
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