<?php
	
	require_once('connection.php');
	
	if($_SESSION['user']=="")
	{
		header('location:index.php');
	}

	$x=$_SESSION[user];
	
	$img=mysql_query("select * from buyer where cname='$x' ") or die("imgaes is missing".mysql_errno());
	$ckimg=mysql_fetch_array($img);
?>

				<div class="side-home">
                        	  <a href="userhome.php"><div class="sidemain">
                            	<center>
                                	<div>
                                    	<img src="userprofile/<?php echo $ckimg[9]; ?>" class="user img-circle">
                                    </div>
                                    <p>Hello <?php echo $ckimg[1]; ?></p>
                                </center>
                            </div></a>
                            
                            
                            	  <a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-user"></i>&nbsp; &nbsp; See Profile
								</div></a>
                                 <a href="updateprofile.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-user-plus"></i>&nbsp; &nbsp; Update Profile
								</div></a>
                            	<a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-file"></i> &nbsp; &nbsp;Manage Bills
								</div>	</a>
                            
                            	<a href="contact.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-phone"></i> &nbsp; &nbsp;Contact Us
								</div>	</a>
                            
                                
                                <a href="underdevelopment.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-shopping-cart"></i>&nbsp; &nbsp; Manage Orders
								</div></a>
                               <a href="feedback.php"><div class="sidemenutxt">
                                	&nbsp; &nbsp;<i class="fa fa-commenting"></i>&nbsp; &nbsp; Feedback
								</div></a> 
                              
                            
                              
                            
                        </div>   