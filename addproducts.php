<?php

	require_once('connection.php');
	
	if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}
	
	if(isset($_REQUEST['submit']))
	{
		
		$ex=".".substr($_FILES['pimg']['type'],6);
		$photo=mysql_query("select max(pid) from product");
		$photos=mysql_fetch_array($photo);
		
		if($photos=="")
		{
			$nm="Product0".$ex;
		}
		else
		{
			$nm="Product".$photos[0].$ex;
		}
		
		$path1="\productimg\\".$nm;
		$path2=dirname(__FILE__).$path1;
	
		echo $path2;	
	$s=mysql_query("insert into product values(0,0,'$_REQUEST[pname]','$_REQUEST[weight]','$_REQUEST[mrp]','$_REQUEST[sprice]','$_REQUEST[instock]','$_REQUEST[pdescription]','$nm',0)") or die('product is not registerd');
	move_uploaded_file($_FILES['pimg']['tmp_name'],$path2);
	header('location:adminhome.php');
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
                    <div class="col-md-5 col-md-offset-1">
                        	<div class="form-box">
                             <form action=""  method="post" enctype="multipart/form-data">
                            	<div class="form-group">
                      				                    
                                        <div class=" heading"><center>Add Products</center></div> 
                                        <hr>  
                                                                             
 						      			<div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-shopping-cart"></i></div></div>
                                       	<select name="catname" class="form-control" required>
                                        <option value="" selected disabled>Select Category</option>	
                                        <option value="0">Home Product</option>
                                        <option value="1">Kitchen</option>
                                        <option value="2">Packaged Foods</option>
                                        </select>	
                                    	</div>
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-tag"></i></div></div>
                                       	<input type="text" name="pname" placeholder="Product Name" class="form-control txt" maxlength="50" pattern="[a-zA-Z0-9\s]{0,50}$" title="Enter Only Alphabets/Numbers/Space." required>
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
                                        <input type="number" name="mrp" placeholder="MRP of Product" class="form-control" min="0" max="100000" required>
                                    	</div>
                                        
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-rupee"></i></div></div>
                                       	<input type="number" name="sprice" placeholder="Selling Price on Website" class="form-control" min="0" max="100000" required>
                                    	</div>
                                        	
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-signal"></i></div></div>
	                                       	<input type="number" name="instock" placeholder="Instock Amount" class="form-control" min="0" max="100000" required>
                                    	</div>
										
                                        <div class="input-group margin_botm">
                                   		<div class="input-group-addon "><div class="same"><i class="fa fa-commenting-o "></i></div></div>
                                        <textarea name="pdescription" cols="20" rows="3" style="background:white;color:grey;" class="form-control " placeholder="Product Description" required ></textarea>
                                    	</div>

                                            
                                        <div class="input-group margin_botm">
                                    	<div class="input-group-addon "><div class="same"><i class="fa fa-image "></i></div></div>
                                        <input type="file"  class="form-control file" required name="pimg">
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
        	
        </footer>
        </div>
    	    
 	  
</body>
</html>