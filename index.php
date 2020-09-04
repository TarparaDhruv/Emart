<?php

	require_once('connection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device:width,intial-scale=1">

<link href="style.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="Fa fa/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script src="jquery-1.3.2.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  
<title>:: E-MART :: - No Confusion Great Deal </title>
<link href="Images/titlelogo.png" rel="icon">

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: auto;
	  height: 400px;
      margin: auto;
  }
  </style>

</head>

<body>
	
    	<div class="container-fluid">
        <header style="border-bottom:3px solid black;">
        	<?php
				require_once('header.php');
			?>
    
        </header>

		    <section>
                <article>
                	<div class="row">
                    	
                        <div class="col-md-2 ">
     							<ul class="list-unstyled" >                   	
 					             	<li class="menu margin_botm"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                   
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-cutlery"></i> Grocery</a>
                                	</li>
                                    
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-beer"></i> Drinks</a></li>
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-slack"></i> Dairy Products</a></li>
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-male"></i> Personal Care</a></li>
                                    
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-tag"></i> Grains & Pulses</a></li>
                                    
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-beer"></i> Beverages </a></li>
                                    
                                    <li class="menu margin_botm"><a href=""><i class="fa fa-spoon"></i> House Hold</a></li>
                                </ul>
                        </div>
                        
                        <div class="col-md-9">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Images/Product10.jpeg" alt="">
    </div>

    <div class="item">
      <img src="Images/2.jpg" alt=""> 
    </div>

    <div class="item">
      <img src="Images/11.jpg" alt="">
    </div>
    
    <div class="item">
      <img src="Images/9.jpg" alt="">
    </div>

      <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                        </div>
                    
                    </div>
              		</div>
              	<div class="row">
                
                	<div class="col-md-offset-2">
                    
                    	<div class="showproduct">
                    	  <?php   
								
								$s=mysql_query("select * from product where visible='0' order by pid desc");								
$i=0;								while($ss=mysql_fetch_array($s))
								{
if($i==11)
break;
$i++;							?>
                        
                        <div class="productdisplay float">
                        		<a href="productshow.php?pid=<?php echo $ss[0]; ?>">
                            <div class="productimgdisplay">
                            	<img src=productimg/<?php echo $ss[8]; ?> width="226px" height="500px" class="img-responsive" title="<?php
								echo $ss[7];  ?>">
                            </div>
                      		
                            
                            <div class="productinfo">

                            <div class=" productnamedisplay float">
                            	<font style="font-size:15px;"><?php echo $ss[2]; ?></font>
                            </div>
                            
                            <div class="productpricedisplay">
                            	<font style="font-size:12px;">M.R.P. <strike> <?php  echo  $ss[4]; ?></strike></font>
                            	<br><font style="font-size:12px;">Our Price <?php  echo $ss[5]; ?></font>
                            </div>
                            
                            <div class="clear">
                            </div>
                            
                            </div>
                           
                            <div class="productaddtocart">
                            	<span>
                                	<i class="fa fa-shopping-cart"></i>
                                </span>
                            	
                                <span>
                               		<i class="fa fa-pencil"></i>
                                </span>
                            
                            	<span>
                                   	<i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </span>
                           
                                <div class="clear">
                                </div>
                          		
                            </div>
  							</a>
                          </div>
                          
                         <?php
								}
							?>
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