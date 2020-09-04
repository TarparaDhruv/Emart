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
							require_once('sidemenu.php');
						?>    
                    </div>
                   
                    <div class="col-md-5 col-md-offset-1 ">
							 <div class="form-box">
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<center><div class="heading">Manage Users</div></center>
                                <hr>
					
                    		<div class="input-group margin_botm">
                            	<div class="input-group-addon"><div class="same"><i class="fa fa-user"></i></div></div>
                                <input style="height:40px;" type="number" name="cid" placeholder="Enter Customer ID" class="form-control" required>
                            </div>

							<div class="input-group margin_botm">
                            	<div class="input-group-addon "><div class="same"><i class="fa fa-user"></i></div></div>
                                <input type="text" name="cname" placeholder="Enter Customer Name" class="form-control txt" required>
                            </div>


							<div class="margin_top">
								<center><input type="submit" name="Search" value="Search" class="btn allbtn form-control"></center>
                            </div>
                            
                            <hr>

                        	<div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-user"></i></div></div>
                                        <input type="text" width="25" name="fname" placeholder="First Name" class="form-control txt" required>
                            	        </div></div>
                                    	                                        
                                    	<div style="float:right;width:49%;">                                        
                               			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-user icon"></i></div></div>
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control txt" required>
                                    	</div></div>
                                        
                                        <div class="clear"></div>
                                                                                
 						      			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-envelope"></i></div></div>
                                       	<input type="email" name="email" placeholder="abc@example.com" class="form-control txt" required>
                                    	</div>        
              				
                               			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-user "></i></div></div>
                                        <input type="text" name="uname" placeholder="User Name" class="form-control txt" required>
                                    	</div>
          				      			
                                        <div style="float:left;width:49%;display:inline;">
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-lock"></i></div></div>
                                        <input type="password" name="password" id="pass" placeholder="Password" class="form-control txt" required>
                                    	</div></div>
                                        
										<div style="float:right;width:49%;display:inline;">                	      
	                                    <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-lock "></i></div></div>
                                        <input type="password" name="cpassword" id="pass" placeholder="Confirm Password" class="form-control txt" required>
                                    	</div></div>
      									
                                        <div style="float:left;width:49%;display:inline;">
                                        <div class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-phone "></i></div></div>
                                        <input type="text" name="contact" placeholder="Contact Number" maxlength="10" class="form-control txt" required>
                                    	</div></div>
										
                                        <div style="float:right;width:49%;display:inline;">
                                        <div class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-phone "></i></div></div>
                                        <input type="text" name="ocontact" placeholder="Optional Contact Number" maxlength="10" class="form-control txt" required>
                                    	</div></div>

                                        <div style="float:left;width:25%;">                	      
                                		<div class="input-group margin_botm">
                                		<div class="input-group-addon"><div class="same"><i class="fa fa-male"></i></div></div>							
                                 		<div class="regradio radio-inline" >
    									<input type="radio" name="gender" value="male" required> Male
                                		</div></div>
                                		</div>
    									
                                        <div class="input-group margin_botm">
                                		<div class="input-group-addon"><div class="same"><i class="fa fa-female"></i></div></div>						
                                 		<div class="regradio radio-inline">
    									<input type="radio" name="gender" value="female" required> Female  
                                		</div>
                                		</div>
    
                              			<div class="input-group margin_botm ">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-image "></i></div></div>
                                    	<input type="file" name="profile" required class="form-control file">
                                    	</div>
                                        
                                        <div style="width:49%;" class="input-group margin_botm" >
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-birthday-cake "></i></div></div>
                                        <input type="date" name="bdate" class="form-control txt" required>
                                    	</div>
     									                                   
                                        
                                        <label>Address:</label>
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-bookmark"></i></div></div>
                                        <input type="text" width="25" name="ad_line1" placeholder="Address Line 1" class="form-control txt" required>
                            	        </div>
                                        
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-bookmark"></i></div></div>
                                        <input type="text" width="25" name="ad_line2" placeholder="Address Line 2 " class="form-control txt" required>
                            	        </div>
										
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-bookmark"></i></div></div>
                                        <input type="text" width="25" name="landmark" placeholder="Landmark" class="form-control txt" required>
                            	        </div></div>
										
                                        <div style="float:right;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-globe"></i></div></div>
                                        <input type="text" width="25" name="area" placeholder="Area Name" class="form-control txt" required>
                            	        </div></div>
										
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-globe"></i></div></div>
                                        <select name="city" class="form-control" required>
                            	        <option selected disabled>---Select City---</option>
                                        <option value="surat">Surat</option>
                                        <option value="ahemdabad">Ahemdabad</option>
                                        <option value="baroda">Baroda</option>
                                        </select>
                                        </div></div>
                                        
                                        <div style="float:right;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-globe"></i></div></div>
                                        <select name="state" class="form-control" required>
                                        <option selected disabled>---State Name---</option>
                                        <option value="gujarat">Gujarat</option>
                                        <option disabled value="">Maharastra</option>
                                        <option disabled value="">Rajsthan</option>
                                        </select>
                            	        </div></div>
                                        
                                        <div style="float:left;width:49%;">
                                      	<div class="input-group margin_botm">
                                    	<div class="input-group-addon"><div class="same"><i class="fa fa-pencil"></i></div></div>
                                        <input type="text" width="25" name="pincode" placeholder="Pincode" class="form-control txt" required>
                            	        </div></div>

                            
							<div style="float:left;clear:both;" class="margin_left">
							<div class="margin_top " >
								<input type="submit" name="" value="Block" class="btn allbtn form-control">
                            </div>
							</div>

							<div style="float:right;" class="margin_right">
							<div class="margin_top">
								<input type="submit" name="" value="Unblock" class="btn allbtn form-control">
                            </div>
                            </div>

							<div class="clear">
                            </div>
                            </form>	
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