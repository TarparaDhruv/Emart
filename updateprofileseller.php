<?php

	require_once('connection.php');
	if($_SESSION['user']=="")
	{
		header('location:index.php');
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device:width,intial-scale=1">
<script type="text/javascript" src="jquery-1.3.2.min.js" ></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="Fa fa/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
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
                	<div class="col-md-3 ">
                    	<?php
							require_once('sidemenuseller.php');
							
						?>
                    </div>
                    <div class="col-md-7 col-md-offset-1">	
                           <div class="form-box">
                        <div class="heading"><center>Update Profile</center></div>
                        <hr>

                    
                        	<form onSubmit="" action="" method="post"  enctype="multipart/form-data" name="form">
                            	<div class="form-group">
                      				
                                    	<div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-user"></i></div></div>
                                        <input autofocus type="text" width="25" name="fname" placeholder="First Name" class="form-control txt" maxlength="25" required pattern="[a-zA-Z]{0,25}$" title="Enter Less Than 25 Alphabets."  onkeypress="return AllowAlphabet(event)">
                            	        </div></div>
                                    	   
                                                                                
                                    	<div style="float:right;width:49%;">                                        
                               			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-user icon"></i></div></div>
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control txt" maxlength="25" required pattern="[a-zA-Z]{0,25}$" title="Enter Less Than 25 Alphabets." onkeypress="return AllowAlphabet(event)">
                                    	</div></div>
                                        
                                                                                
                                        <div class="clear"></div>
                                                                                
 						      			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-envelope"></i></div></div>
                                       	<input onChange="check()" type="email" name="cmail" id="cmail" placeholder="abc@example.com" class="form-control txt" required pattern="^\S+@\S+\.\S+$" title="Enter Correct E-mail Format">
                                    	</div>        
  										
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-user "></i></div></div>
                                        <input type="text" name="cname" id="uname"  placeholder="User Name" class="form-control txt" maxlength="30" required pattern="[a-zA-Z0-9]{0,30}$" title="Only Alphabets and Numbers.">
                                    	</div>
										
                                    	
                                        <div style="float:left;width:49%;display:inline;">
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-lock"></i></div></div>
                                        <input type="password" name="pass" id="password" min="8" placeholder="Password" class="form-control txt" required  pattern=".{6,15}" maxlength="15" title="Password Must be between 6 to 15 Characters">
                                    	</div></div>
                                        
										<div style="float:right;width:49%;display:inline;">                	      
	                                    <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-lock "></i></div></div>
                                     
                                        <input type="password" name="cpass" id="confirm_password" placeholder="Confirm Password" class="form-control txt" required maxlength="15" title="Password Don't Match.!">
                                    	<script>
											var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");

											function validatePassword(){
												  if(password.value != confirm_password.value) {
													confirm_password.setCustomValidity("Passwords Don't Match");
												  } else {
													confirm_password.setCustomValidity('');
												  }
												}
												
												password.onchange = validatePassword;
												confirm_password.onkeyup = validatePassword;
										</script>
          				      			
                                        </div></div>
      									
                                        
                                        <div style="float:left;width:49%;display:inline;">
                                        <div class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-mobile "></i></div></div>
                                        <input type="text" name="contact" maxlength="10" placeholder="Contact Number" class="form-control txt" required pattern="[0-9]{10}" title="Enter 10 Digit Number" onKeyPress="return isNumberKey(event)">
                                    	</div></div>
                                        
                                        <div style="float:right;width:49%;display:inline;">
                                        <div class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-phone "></i></div></div>
                                        <input type="text" name="contact2" maxlength="10" placeholder="Optional Contact Number" class="form-control txt" pattern="[0-9]{10}" title="Enter 10 Digit Number" onKeyPress="return isNumberKey(event)">
                                    	</div></div>

										<div style="float:left;width:25%;">                	      
                                		<div class="input-group margin_botm">
                                		<div class="input-group-addon"><div class="same"><i class="fa fa-male"></i></div></div>							
                                 		<div class="regradio radio-inline" >
    									<input type="radio" name="gender" value="male" required title="Male" > Male
                                		</div></div>
                                		</div>
    									
                                        <div class="input-group margin_botm">
                                		<div class="input-group-addon"><div class="same"><i class="fa fa-female"></i></div></div>						
                                 		<div class="regradio radio-inline">
    									<input type="radio" name="gender" value="female" required title="Male"> Female  
                                		</div>
                                		</div>
    
                              			<div class="input-group margin_botm ">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-image "></i></div></div>
                                    	<input type="file" name="cimg"  class="form-control file" required title="Profile Picture">
                                    	</div>
                                        
                                        <div style="width:49%;" class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-birthday-cake "></i></div></div>
                                        <input type="date" name="birthdate" class="form-control txt" required title="Birthdate">
                                    	</div>
     									                                   
                                        
                                        <label>Address:</label>
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-home"></i></div></div>
                                        <input type="text" width="25" name="add1" placeholder="Address Line 1" class="form-control txt" required title="Address Line 1">
                            	        </div>
                                        
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-home"></i></div></div>
                                        <input type="text" width="25" name="add2" placeholder="Address Line 2 " class="form-control txt" title="Address Line 2">
                            	        </div>
										
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-bank"></i></div></div>
                                        <input type="text" width="25" name="landmark" placeholder="Landmark" class="form-control txt" required title="Landmark">
                            	        </div></div>
										
                                        <div style="float:right;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-map-signs"></i></div></div>
                                        <input type="text" width="25" name="area" placeholder="Area Name" class="form-control txt" required title="Area Name">
                            	        </div></div>
										
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-globe"></i></div></div>
                                        <select name="city" class="form-control" required>
                            	        <option disabled>---Select City---</option>
                                        <option selected value="surat">Surat</option>
                                        <option value="ahemdabad">Ahemdabad</option>
                                        <option value="baroda">Baroda</option>
                                        </select>
                                        </div></div>
                                        
                                        <div style="float:right;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-globe"></i></div></div>
                                        <select name="state" class="form-control" required>
                                        <option  disabled>---State Name---</option>
                                        <option selected value="gujarat" sele>Gujarat</option>
                                        <option disabled value="">Maharastra</option>
                                        <option disabled value="">Rajsthan</option>
                                        </select>
                            	        </div></div>
                                        
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-pencil"></i></div></div>
                                        <input type="text" width="25" name="pincode" maxlength="6" placeholder="Pincode" class="form-control " required pattern="\d{6}" title="Exact 6 Digits" onKeyPress="return isNumberKey(event)">
                            	        </div></div>

                                    	<div class="margin_top" style="clear:both;">
                                    	<center><input type="submit" value="Submit" class="form-control btn allbtn" name="submit"></center>
                                    	</div>
                                    
								</div>
                            </form>

                        </div>
                        <div class="col-md-2">
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

</html>>