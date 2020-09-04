<?php
	require_once('connection.php');
	if($_SESSION['user']!='admin')
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
                    <div class="col-md-9">
                  	  <div class="row">	
                       	 <div class="col-md-4">
                       	 	<a href="allusers.php" style="text-decoration:none;">
                            <div class="box">
                            	<center>
                            	<div class="counter">
                                	<?php
										$s=mysql_query("select count(cid) from buyer where blocked='0' ");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>
                                </div>
                                </center>

                                <p> All Users</p>
                            </div>	
                            </a>
                         </div>
                       	 <div class="col-md-4">
                         		<a href="blockedusers.php" style="text-decoration:none;"><div class="box">
                            	<center>
                            	<div class="counter">
                                	<?php
										$s=mysql_query("select count(cid) from buyer where blocked='1' ");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>

                                </div>
                                </center>

                                <p>Blocked Users</p>
                            </div>
                            </a>	
                       	 </div>
                       	 <div class="col-md-4">
                         		<a href="allproducts.php" style="text-decoration:none;"><div class="box">
                            	<center>
                            	<div class="counter">
                                	<?php
										$s=mysql_query("select count(pid) from product where visible='0' ");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>

                                </div>
                                </center>

                                <p>Products</p>
                            </div>
                            </a>	
                        </div>
                        </div>
                        
                        <div class="row">
								<div class="col-md-4">  
								<a href="blockedproduct.php" style="text-decoration:none;">
                                 <div class="box">
                            	<center>
                            	<div class="counter">
                                	<?php  
									
										$s=mysql_query("select count(pid) from product where visible='1' ");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>
                                </div>
                                </center>

                                <p>Blocked Products</p>
                            </div>	        
                            </a>               		
                         </div>
      					
                        	<div class="col-md-4">
                         		<a href="managecontacts.php" style="text-decoration:none;"><div class="box">
                            	<center>
                            	<div class="counter">
                          			<?php
									
										$s=mysql_query("select count(name) from contact");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>
                                </div>
                                </center>

                                <p>Contact</p>
                            </div>	
                    		</a>        	
                            </div>
                            <div class="col-md-4">
								<a href="managefeedback.php" style="text-decoration:none;">
                                 <div class="box">
                            	<center>
                            	<div class="counter">
                                	<?php  
									
										$s=mysql_query("select count(name) from feedback");
										$ss=mysql_fetch_array($s);
										echo $ss[0];
									?>
                                </div>
                                </center>

                                <p>Feedback</p>
                            </div>	        
                            </a>               		
							</div>
							</div>

							<div class="row" >
                            	  <div class="col-md-4">
                         		<a href="underdevelopment.php" style="text-decoration:none;"><div class="box">
                            	<center>
                            	<div class="counter">
                                	0
                                </div>
                                </center>

                                <p>Inquiry</p>
                            </div>	
                            </a>
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