<?php

	require_once('connection.php');
	
	if($_SESSION['user']=="")
	{
		header('location:index.php');
	}
	
	if(isset($_REQUEST['submit']))
	{
	$s=mysql_query( "insert into feedback values('$_REQUEST[name]','$_REQUEST[cat]','$_REQUEST[contact]','$_REQUEST[message]','$_REQUEST[radio]')");
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
               
                	<div class="col-md-5 col-md-offset-1 col-sm-12">
                    	
                        <div class="registration">
                        <div class="form-box">
                        <div  class="heading" style="font-size:22px;"><center>Tell Us What You Think</center></div>
                        <hr>
                        	
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                                	
                                    	<div class="input-group margin_botm">
                                   			<div class="input-group-addon ">
                                        		<div class="same"><i class="fa fa-user "></i>
                                        		</div>
                                        	</div>
                                        <input autofocus type="text" name="name" placeholder="Enter Your Name" class="form-control txt" maxlength="25" required pattern="[a-zA-Z]{0,25}$" title="Enter Less Than 25 Alphabets."  onkeypress="return AllowAlphabet(event)">
                              			</div>
                                   		
                                      	
                                        <div >
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-tag"></i></div></div>
                                        <select name="cat" class="form-control" required>
                            	        <option disabled selected value="">---Select Category---</option>
                                        <option value="1">Improve This Page</option>
                                        <option value="2">Suggest New Features/Ideas</option>
                                        <option value="3">Shopping Experience</option>
                                        <option value="4">I Love E-mart</option>
                                        <option value="5">Others/General </option>
                                        <option value="6">Offers </option>
                                        </select>
                                        </div></div>
                                        
                                                                         
                                        
                                        <div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                                            	<div class="same"><i class="fa fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="contact" placeholder="Contact Number" class="form-control txt" maxlength="10" required pattern="[0-9]{10}"  title="Enter 10 Digit Contact Number." onKeyPress="return isNumberKey(event)">
                                        </div>
                                        
                                        <div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                    							<div class="same"><i class="fa fa-commenting-o"></i></div>                        		
										    </div>
                                        <textarea cols="45" rows="4" style="background:white;border:1px solid grey;" name="message" placeholder="Type your Feedback here" required ></textarea>
                                        </div>
                                        
                                          <div style="padding:4px">   
                                           How would You rate  Your Overall Emart Experience ?
                                         </div>
                                        
                                        <div class=" radio-inline" >
    									<div style="margin-left:15px;">
                                        <input type="radio" name="radio" value="Best" required  > Best
                                		</div>
                                        </div>

                                 		<div class=" radio-inline">
                                		<div style="margin-left:15px;">						
    									<input type="radio" name="radio" value="Good" required > Good  
                                		</div>
										</div>

                                 		<div class=" radio-inline" >
                                		<div style="margin-left:15px;">
    									<input type="radio" name="radio" value="Average" required > Average
                                		</div>
                                        </div>

                                 		<div class=" radio-inline">
                                		<div style="margin-left:15px;">
    									<input type="radio" name="radio" value="Bad" required > Bad  
                                		</div>
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