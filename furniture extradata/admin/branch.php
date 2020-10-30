
<?php

	include('conn.php');
	
	
	//insert state
	if(isset($_REQUEST['submit']))
	{
		$nm = $_REQUEST['name'];
		$ad = $_REQUEST['address'];
		$in = $_REQUEST['inch'];
		$mbl = $_REQUEST['mbl'];
		$ph = $_REQUEST['phone'];
		$eml = $_REQUEST['email'];
		$fax = $_REQUEST['fax'];
		$ct = $_REQUEST['city'];
		
		
		$ins = "insert into branch_de(br_name,br_address,br_incharge,br_mobile,br_phone,br_email,br_fax,br_city) values('$nm','$ad','$in','$mbl','$ph','$eml','$fax','$ct')";
		$ex = mysql_query($ins);
		
				
	}   
	
	//fetch
	if(isset($_REQUEST['edit_id']))
	{
		$e = $_REQUEST['edit_id'];
		$sel_ed = "select * from cmp where cmp_id='$e'";
		$ex = mysql_query($sel_ed);
		$rd = mysql_fetch_array($ex);
	}
	
	//update
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$u = $_REQUEST['edit_id'];
		$ty = $_REQUEST['typ'];
		$ro = $_REQUEST['rol'];
		$in = $_REQUEST['ind'];
		$lo = $_REQUEST['loc'];
		$mo = $_REQUEST['mon'];
		$ex = $_REQUEST['exp'];
		$va = $_REQUEST['vac'];
		$de = $_REQUEST['deg'];
		$pic = $_FILES['pic']['name'];
		
		$upd = "update cmp set cmp_typ='$ty',cmp_rol='$ro',cmp_ind='$in',cmp_loc='$lo',cmp_mon='$mo',cmp_exp='$ex',cmp_vac='$va',cmp_deg='$de',cmp_img='$pic' where cmp_id='$e'";
		$ex = mysql_query($upd);
		header("location:upcp.php");
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
font-size: 16px;">&nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                       <h5>Welcome Admin panel<br /><br /></h5>
                       
                    </div>
                </div><br /><br />
                 
		  <form method="post" enctype="multipart/form-data" >
          
          
		   <Table width="100%">
			<tr>
				<td> branch name <br /><br /></td>
				<Td><input type="text" name="name" size="40" value="name" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch address <br /><br /></td>
				<Td><input type="text" name="address" size="40" value="address" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch incharge <br /><br /></td>
				<Td><input type="text" name="inch" size="40"value="inch" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch mobile <br /><br /></td>
				<Td><input type="text" name="mbl" size="40" value="mbl" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch phone <br /><br /></td>
				<Td><input type="text" name="phone" size="40"value="phone" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch email <br /><br /></td>
				<Td><input type="text" name="email" size="40"value="email" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch fax<br /><br /></td>
				<Td><input type="text" name="fax" size="40"value="fax" /><br /><br /></td>
			</tr>
            <tr>
				<td> branch city <br /><br /></td>
				<Td><?php
				$sel = "select * from city";
				$ex = mysql_query($sel);
			?>
			<tr>
				<td><select name="city">
				<option value="">Select city</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['city_id']; ?>"><?php echo $r['city_name']; ?></option>
			<?php	
				}
			?>
			</td>
			</tr>
            </tr>
                       
            
			<Tr>
    <?php
		if(isset($_REQUEST['edit_id']))
		{
	?>
    	<th colspan="2"><input type="submit" name="update" value=" update" /></th>
     <?php
		}
		else
		{
	?>
    <th colspan="2"><input type="submit" name="submit" value="Add compny" /></th>
    <?php
		}
	?>
    </Tr>
		   </table>
		   
		   </form>
            
            
                 <!-- /. ROW  -->
                 <hr />
               
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
