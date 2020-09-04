<?php

	require_once('connection.php');
		
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
                	<div class="col-md-4 col-md-offset-4 ">
                    	
                        <div class="registration">
                        <div class="form-box">
                        <div  class="heading" style="font-size:22px;"><center>Forgot Password?</center></div>
                        <hr>
                        	
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                                	
                                   		<div class="input-group margin_botm">
                                   			<div class="input-group-addon ">
                                        		<div class="same"><i class="fa fa-envelope "></i>
                                        		</div>
                                        	</div>
                                        <input type="email" autofocus name="" placeholder="abc@example.com" class="form-control txt"  pattern="^\S+@\S+\.\S+$">
                              			</div>
                                        
                                       
                                            
                                        <div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                                            	<div class="same"><i class="fa fa-phone"></i>
                                                </div>
                                            </div>
										<input type="text" name="" maxlength="10" placeholder="Contact Number (Required)" class="form-control txt" pattern="[0-9]{10}" title="Enter 10 Digit Number" onKeyPress="return isNumberKey(event)" required>
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