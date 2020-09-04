
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
                    <div class="col-md-5 col-md-offset-1" >
                    		<div class="form-group">
                        	<form action="" method="post" enctype="multipart/form-data">
                            	
                      				                    
                                        <div class="heading"><center>Add Products</center></div> 
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-table"></i></div></div>
                                       	<input type="text" name="proname" placeholder="Product Name" class="form-control txt" required>
                                    	</div>        
              				
                               			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-pencil "></i></div></div>
                                        <textarea cols="20" rows=10"" class="form-control " placeholder="Product Description" style="background:#202121;color:white;"></textarea>
                                    	</div>
          				      			
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-rupee"></i></div></div>
                                        <input type="text" name="proprice" placeholder="Price" class="form-control txt" required>
                                    	</div>
                                        	
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-image "></i></div></div>
                                        <input type="file"  class="form-control file" required>
                                    	</div>
      									
                                    	<div class="margin_top">
                                    	<center><input type="submit" value="Submit" class="form-control btn allbtn"></center>
                                    	</div>
                                    
                            </form>
                            </div>
                        </div>
                    	<div class="col-md-2">
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