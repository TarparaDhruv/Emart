<?php
	require_once('connection.php');
?>

			<header class="navbar-fixed-top" style="border-bottom:2px solid black;">
        	<div class="row header" >
            	<div class="col-md-4 " style="margin-top:15px;">
                	<a href="index.php"><img src="Images/logo copy copy.jpg" title="E-mart" ></a>
               	</div>
                
                <div class="col-md-4 top">
                	<form action="" method="post">
                    	<div class="form-group search">
                			<div class="input-group">
                        	<input type="search" name="search" title="Search here" placeholder="Search Here" class="form-control inputsearch" >			
                            	<div class="input-group-addon"><i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
                <center>
                <div class="col-md-4 ">
                	<div class="row " >
                    	<div class="social" >
                           
                           <center>
                            <div class="col-md-3 col-sm-3  float">
                           		<a href="https://www.facebook.com" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                           
                            <div class="col-md-3 col-sm-3  float">
                                  <a href="https://mail.google.com" target="_blank" title="Google mail"><i class="fa fa-google"></i></a>
                             </div>
                           
                            <div class="col-md-3 col-sm-3  float">
                                  <a href="https://www.twitter.com" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                             </div>
                           
                           <a href="cart.php" target="_self" title="Cart">
                             <div class="col-md-3 col-sm-3 float">
                                  <i class="fa fa-shopping-cart"></i>
                             </div></a>
                             
                           </center>
                             <div class="clear none"></div>
                         </div>      
                    </div>
					
                    <div class="row">

                        <div class="col-md-2 col-md-offset-8 col-sm-offset-8 col-sm-1 col-xs-offset-7 col-xs-1 col-lg-offset-3 col-lg-2 links">

  							<?php
								if($_SESSION['user']=="")
								{
							?>
                           <a href="login.php" role="button"  class="btn"  title="Login"><i class="fa fa-lock"></i> Login</a> 
                           <?php
								}
								else
								{
						   ?>
                           <a href="logout.php" role="button"  class="btn" title="Login"><i class="fa fa-lock"></i> Logout</a>
                           <?php
								}
						   ?> 
                        </div>
                       
                        <div class="col-md-2 col-sm-2 col-xs-offset-1 col-xs-3 col-lg-1 links">
                     		<?php
							if($_SESSION['user']=="")
							{
							?>
                        	<a href="registration.php" title="Registration" role="button"   class="btn"><i class="fa fa-users"></i> Registration</a>						
                            <?php
                            	}
								else
								{
									if($_SESSION['user']=='admin')
									{
							?>
			             	<a href="adminhome.php" title="Registration" role="button"  class="btn"><i class="fa fa-users"></i> Profile</a> 
							<?php
									}
									else
									{
							?>	
                            <a href="userhome.php" role="button" title="Registration"  class="btn"><i class="fa fa-users"></i> Profile</a> 
                            <?php	
                              	  	}
								}
							?>
								
                        </div>

                    </div>
                </div>
                </center>
            </div>
</header>