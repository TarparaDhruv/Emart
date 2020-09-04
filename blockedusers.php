<?php
	require_once('connection.php');

	if($_SESSION['user']!='admin')
	{
		header('location:index.php');
	}
	
	$s=mysql_query("select * from buyer where blocked='1'");
	

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
                    <div class="col-md-9 col-sm-12">
							<div class="form-box">
                        	<form action="" method="post" enctype="multipart/form-data">
                            	<center><div class="heading">Blocked Users</div></center>
                                <hr>
                                <center><table class="table-bordered table-hover tabledata" >
                                	<thead>
                                    	<tr>
                                        	<th>CID</th>
                                            <th>FNAME</th>
                                            <th>LNAME</th>
                                            <th>CMAIL</th>
                                            <th>CNAME</th>
                                            <th>CONTACT</th>
                                            <th>CONTACT2</th>
                                            <th>GENDER</th>
                                            <th>CIMG</th>
                                            <th>Birthdate</th>
                                            <th>Block ?</th>
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
                                            <td><?php echo $ss[4]?></td>
                                            <td><?php echo $ss[6]?></td>
                                            <td><?php echo $ss[7]?></td>
                                            <td><?php echo $ss[8]?></td>
                                            <td><img src=userprofile/<?php echo $ss[9]?> class="displayprofilepic"></td>
                                            <td><?php echo $ss[10]?></td>
                                            
        		                            <td class="error"><a href="blockuser.php?id=<?php echo $ss[0];?>&type=unblock"><center><i class="fa fa-check " ></i></center></a></td>
        
                                        </tr>
                                    </tbody>    
                                    		<?php
												}
											?>
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
</html>