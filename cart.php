<?php
	require_once('connection.php');
	 if($_SESSION["user"]=="")
	 header("location:registration.php");

	

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

</head>
<body>
	

         
            <header style="border-bottom:3px solid black;">
                <?php
                    require_once('header.php');
                ?>
        
            </header>
    
            <section>
            	<article>
                <div class="row">
                <div class="col-md-offset-5 col-md-2">
               
                	<table cellpadding="5px" cellspacing="15px" class="table-striped table-hover">
                    	<thead>
							<td>Product Name</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td>Total</td>
                        	<td>Delete</td>
                        </thead>
                		 <?php
                			$s=mysql_query("select *from cart where uid='$_SESSION[user]'") or die ("error is found ");
								
							while($ss=mysql_fetch_array($s))
							{
						?>
                       	
                        <tbody>
                        	<td>
							<?php
								$que=mysql_query("select * from product where pid='$ss[2]'");
								$quee=mysql_fetch_array($que);
								echo $quee[2];
							  ?>
                            </td>
                            
                            <td><?php echo $ss[quantity];?></td>
                            <td><?php  echo $ss[sprice];?></td>
                            <td>
							<?php 
								 echo $ss[total];
								 $gtotal+=$ss[total];
							 ?>
                             </td>
        				<td><a href="deletefromcart.php?delcartid=<?php  echo $ss[0];?>"><i class="fa fa-bitbucket"></i></a></td>
                        </tbody>
                    	<?php
							}
						?>
 
                    </table>
            		
                </div>

                </div>
				</article>
                
                <article>
                	<div class="row">
                    	<div class="col-md-offset-9 col-md-2">
                    	<p >Grand total :<?php  echo $gtotal;?>

                        </div>
                    </div>
                </article>

                <article>
                	<div class="row">
                    	<div class="col-md-offset-9 col-md-2">
                            <a href="buynow.php" role="button" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </article>
            </section>
        </div>
</body>
</html>