<?php

	require_once('connection.php');
        
                    
	$suppliedid = $_GET["pid"];	

	$s=mysql_query("select * from product where pid=$suppliedid")or die("error");
	$ss=mysql_fetch_array($s);

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
	
    	<div class="container-fluid">
        <header style="border-bottom:3px solid black;">
        	<?php
				require_once('header.php');
				
			?>
    
        </header>        
        <section>
        
        	<article>
            	
                <div class="row">
            	<div class="col-md-2">
                </div>
                
                <div class="col-md-8" style="background:#E9E9E9;height:1000px;">
                
                	<div class="row">
                	<div class="col-md-5" style="padding:20px;">
                    <img src=productimg/<?php echo $ss[8]; ?> class="img-responsive" title="<?php echo $ss[7];  ?>">
                    </div>
                    <div class="col-md-7">
                    <span style="font-size:18px;"><center><?php echo $ss[2]; ?></center></span>
                    <div class=""><?php echo $ss[7]; ?></div>
					<?php echo $ss[5];?>
                    <form method="post" action="addtocart.php">
                    <input type="text" style="display:none;" name="pid" value="<?php echo $ss[0];?>" >
                    <select name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                    	
                    <input type="submit" value="Add to Cart" class="btn btn-info" id="add">
                    </form>
					<p><p>
                    <form method="post" action="buynow.php">
                    	<input type="text" style="display:none">             
                    	<input type="submit" value="Buy Now" class="btn btn-info">
                    </form>
                    </div>
                	</div>
                </div>
                
                <div class="col-md-2">
                </div>
                </div>
        	</article>
        </section>
        
</div>




</body>
</html>