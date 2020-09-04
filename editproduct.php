
<?php

	require_once('connection.php');
	
	$flag=0;
	if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}
	
	if(isset($_REQUEST['search']))
	{
	$s=mysql_query("select * from product where pname='$_REQUEST[search]'");
	$ss=mysql_fetch_array($s);
	
	if($ss[0]=="")
	{
		$flag=1;
	}
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
                    <div class="col-md-5 col-md-offset-1 product">
                        	<div class="form-box">
                            <form action=""  method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                      				                    
                                        <div class=" heading"><center>Edit Products</center></div> 
                                        <hr>  
                                        
                            <!--    		<div class="input-group margin_botm">
                                        	<div class="input-group-addon">
                                            <div class="same"><i class="fa fa-search"></i>
                                            </div>
                                            </div>
                                            <input  type="search" name="search here" placeholder="Search Here" class="form-control txt"/>
                                        </div>        
                        		                        
								      									
                                    	<div class="margin_top margin_botm">
                                    	<center><input type="submit" value="Search" class="form-control btn allbtn" name="search"></center>
                                    	</div>
-->
										<div class="error">
                                        	<?php
												if($flag==1)
												echo "Entered Product is not available ";
											?>
                                        </div>
    
 						      			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-shopping-cart"></i></div></div>
                                       	<select name="catname" class="form-control" required >
                                        <option value="" selected disabled>Select Category</option>	
                                        <option value="0">Home Product</option>
                                        <option value="1">Kitchen</option>
                                        <option value="2">Packaged Foods</option>
                                        </select>	
                                    	</div>
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-tag"></i></div></div>
                                       	<input type="text" name="pname" placeholder="Product Name" class="form-control txt" maxlength="50" pattern="[a-zA-Z0-9]{0,50}$" title="Enter Less Than 50 Alphabets/Numbers." required value="<?php echo $ss[2]; ?>">
                                    	</div>
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-balance-scale"></i></div></div>
                                       	<select name="weight" class="form-control" required>
                                        <option value="" disabled selected>Select Weight</option>	
                                        <option value="1">100 gms</option>
                                        <option value="2">250 gms</option>
                                        <option value="3">500 gms</option>
                                        <option value="4">1 kg</option>
                                        <option value="5">5 kg</option>
                                         <option value="2">250 ml</option>
                                        <option value="3">500 ml</option>
                                        <option value="4">750 ml</option>
                                        <option value="5">1 lt</option>
         								<option value="5">2 lt</option>
                                        <option value="5">2.25 lt</option>
                                       
                                        </select>
                                    	</div>        
              							
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-rupee"></i></div></div>
                                        <input type="number" name="mrp" placeholder="MRP of Product" class="form-control" min="0" max="100000" required value="<?php echo $ss[4]; ?>">
                                    	</div>
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-rupee"></i></div></div>
                                       	<input type="number" name="sprice" placeholder="Selling Price on Website" class="form-control" min="0" max="100000" required value="<?php echo $ss[5]; ?>">
                                    	</div>
                                        	
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-signal"></i></div></div>
	                                       	<input type="number" name="instock" placeholder="Instock Amount" class="form-control" min="0" max="100000" required value="<?php echo $ss[6]; ?>">
                                    	</div>
										
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-commenting-o "></i></div></div>
                                        <textarea name="pdescription" cols="20" rows="3" style="background:white;color:grey;" class="form-control " placeholder="Product Description" required ><?php  echo $ss[7];?></textarea>
                                    	</div>

                                            
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-image "></i></div></div>
                                        <input type="file"  class="form-control file" required title="Only JPEG/JPG Allowed" name="pimg" value="<?php  echo $ss[8];?>">
                                    	</div>
      									
                                    	<div class="margin_top">
                                    	<center><input type="submit" value="Submit" class="form-control btn allbtn" name="submit"></center>
                                    	</div>
                                    
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