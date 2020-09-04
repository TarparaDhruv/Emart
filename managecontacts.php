<?php
	require_once('connection.php');

	if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}
	$s=mysql_query("select * from contact ");
	

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
                    <div class="col-md-7 col-md-offset-1 ">
							<div class="form-box">
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<center><div class="heading">All Contacts</div></center>
                                <hr>
                                <center><table class=" table-responsive table-bordered tabledata tablestyle" >
                                	<thead>
                                    	<tr>
                                        	<th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Message</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                      		<?php
												while($ss=mysql_fetch_array($s))
												{
											?>
                                        <tr>
                                        	<td><?php echo $ss[0]?></td>
                                            <td><?php echo $ss[1]?></td>
                                            <td><?php echo $ss[2]?></td>
                                            <td><?php echo $ss[3]?></td>
                                          </tr>
                                          <?php
												}
										?>
                                    </tbody>    
                                    		
                                </table>
								</center>
                    		</form>	
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
</html>>