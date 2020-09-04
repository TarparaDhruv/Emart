
<?php
	
	require_once('connection.php');
	
	if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}
	
	$img=mysql_query("select * from buyer where cname='admin' ");
	$ckimg=mysql_fetch_array($img);
?>


<div class="side-home">
                        	
                            <a href="adminhome.php"><div class="sidemain">
                            	<center>
                                	<div>
                                    	<img src="userprofile/ben.png" class="user img-circle">
                                    </div>
                                    <p>Hello Admin</p>
                                </center>
                            </div></a>
                            	<!--<a href="manageusers.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-users"></i> &nbsp; &nbsp;Manage Users
								</div>	</a>
                            	
-->                                <a href="allusers.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-users"></i> &nbsp; &nbsp;All Users
								</div>	</a>
                            
                           	    <a href="blockedusers.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-user-times"></i> &nbsp; &nbsp;Blocked User
								</div>	</a>
                            
                            
                                <a href="addproducts.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-cutlery"></i>&nbsp; &nbsp; Add Products
								</div></a>
                                
                                <a href="editproduct.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-spoon"></i>&nbsp; &nbsp; Edit Products
								</div></a>
                                
                                  <a href="allproducts.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-tags"></i> &nbsp; &nbsp;All Products
								</div>	</a>
                            
                            	<a href="blockedproduct.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-ban "></i>&nbsp; &nbsp; Blocked Products
								</div></a>
                                
                            
                                <a href="managefeedback.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-pencil"></i>&nbsp; &nbsp; All Feedback
								</div></a>
                            
                                <a href="managecontacts.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-phone"></i>&nbsp; &nbsp; All Contact
								</div></a>
                            
                                <a href="underdevelopment.php"><div class="sidemenutxt">
									&nbsp; &nbsp;<i class="fa fa-info"></i>&nbsp; &nbsp; Manage Inquiry
								</div></a>
                            
                        </div>