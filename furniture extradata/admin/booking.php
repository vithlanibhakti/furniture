﻿ <?php
	include('conn.php');
	
	
	
	
	if(isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		$del = "delete from  booking where user_id='$id'";
		$ex = mysql_query($del);
		header("location:booking.php");
	}

	


?>
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin panel </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin panel</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/logo.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      
                    
						 
                                      
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Add items<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addcat.php">Add catgory</a>
                            </li>
                            <li>
                                <a href="addcatsub.php">Add subcatgory</a>
                            </li>
                            <li>
                                <a href="addcity.php">Add city</a>
                               
                               
                            </li>
                            <li>
                                <a href="addstate.php">Add state</a>
                               
                               
                            </li>
                            <li>
                                <a href="addcon.php">Add country</a>
                               
                               
                            </li>
                            <li>
                                <a href="addcompro.php">Add company profile</a>
                               
                               
                            </li>
                            <li>
                                <a href="addemp.php">Add employe</a>
                               
                               
                            </li>
                        </ul>
                      </li>  
                 	 
                                        
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> update items<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="upcp.php">update company profile</a>
                            </li>
                            <li>
                                <a href="upem.php">update employe</a>
                            </li>
                            
                        </ul>
                      </li>  
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> user detail</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin panel</h2>   
                        <h5>Welcome Admin panel</h5>
                       
                    </div>
                </div>
                
                
            
            
    
                 <!-- /. ROW  -->
                 <hr />
               <form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%"> ID</th>
                                    <th style="width:10%">name</th>
                                    <th style="width:10%">date</th>
									<th style="width:10%">item</th>
                           
                                     
                                    <th style="width:10%">address</th>         
                                   <th style="width:10%">contect</th>
                             
                                         
                                      <th style="width:%15">Delete</th>         
                                </tr>
                            </thead>
                            <tbody>
						<?php
							$sel_br = "select * from booking";
							$ex_br = mysql_query($sel_br);
							while($r = mysql_fetch_array($ex_br))
							{
						?>
                                <tr>
                                    <td><?php echo $r['user_id']; ?></td>
                                    <td><?php echo $r['customer_name']; ?></td>
                                    <td><?php echo $r['order_date']; ?></td>
                                    <td><?php echo $r['item_id']; ?></td>
                                    <td><?php echo $r['user_address']; ?></td>
                                    <td><?php echo $r['contect']; ?></td>
                                    
                                    
                                    
                             
                         
                 
                                    <Td><A href="booking.php?del_id=<?php echo $r['user_id']; ?>">delete</A></Td>
                                </tr>
						<?php
							}
						?>
                            </tbody>
                        </table>
                        </form>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
