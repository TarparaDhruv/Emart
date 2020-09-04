<?php

	if($_SESSION['user']=="")
	{
		header('location:index.php');
	}
    ?>

				<div class="side-home">
                        	
                            <a href="sellerhome.php"><div class="sidemain">
                            			<center>
                                	 	<div>
                                    		<img src="Images/jon.png" class="user img-circle">
                                    	</div>
                                    	<p>Hello Seller</p>
                                		</center>
                              
                            </div>
                            </a>
                            	  <a href="updateprofileseller.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-user-plus"></i>&nbsp; &nbsp; Update Profile
								</div></a>
                                 <a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-opencart"></i>&nbsp; &nbsp; See Current Orders
								</div></a>
                            	<a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-shopping-cart"></i> &nbsp; &nbsp; All Orders 
								</div>	</a>
                            
                                <a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-rupee"></i>&nbsp; &nbsp; Monthly Revunue
								</div></a>
                               
                              
                            
                              
                            
                        </div>   