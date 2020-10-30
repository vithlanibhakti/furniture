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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
       
       <form method="post">
             
             <Tr>
				<Td>name<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
          
            <Tr>
				<Td>qualilfication<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
			
             <Tr>
				<Td>Expiriacns<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
            <tr>
             <Tr>
				<Td>age<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
             <Tr>
				<Td>degree<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
             <Tr>
				<Td>depscrtion<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
             <Tr>
				<Td>location<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
             <Tr>
				<Td>emial<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
			</tr>
             <Tr>
				<Td>website<br /><br /></td>
				<td><input type="text" name="address" size="70"><br /><br /></td>
				
			</tr>
             <Tr>
				<Td>Image<br /><br /></td>
				<td><input type="file" name="address" size="70"><br /><br /></td>
			</tr>
				<th colspan="2"><input type="submit" name="submit" value="Add company"><br /><br /></th>
			</tr>
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
