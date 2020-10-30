
<?php

	include('conn.php');
	
	
	//insert state
	if(isset($_REQUEST['submit']))
	{
		$nm = $_REQUEST['name'];
		$cd = $_REQUEST['code'];
		$pr = $_REQUEST['price'];
		$de = $_REQUEST['desc'];
		$qu = $_REQUEST['qua'];
		$st = $_REQUEST['subcat'];
		
		
		
		$ins = "insert into product_detail(product_name,product_code,product_price,product_desc,min_quantity,product_cat)values('$nm','$cd','$pr','$de','$qu','$st')";
		$ex = mysql_query($ins);
		
			
	}   
	
	//update
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$e = $_REQUEST['edit_id'];
		$nm = $_REQUEST['name'];
		$cd = $_REQUEST['code'];
		$pr = $_REQUEST['price'];
		$de = $_REQUEST['desc'];
		$co = $_REQUEST['color'];
		$qu = $_REQUEST['qua'];
		$ct = $_REQUEST['cat'];
		$ze = $_REQUEST['size'];
		$pc = $_REQUEST['pic'];
		
		$upd = "update product_detail set product_name='$nm',product_code='$cd',product_price='$pr',product_desc='$de',product_color='$co',min_quantity='$qu',product_cat='$ct',product_size='$ze',product_img='$pc'  where product_id='$e'";
	
		
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
                       <h5>Welcome Admin panel<br /><br /></h5>
                       
                    </div>
                </div><br /><br />
                 
		  <form method="post">
          
		   <Table width="100%">
			<tr>
				<td> product name <br /><br /></td>
				<Td><input type="text" name="name" size="40" value="name" ><br /><br /></td>
			</tr>
           <tr>
				<td> product code <br /><br /></td>
				<Td><input type="text" name="code" size="40" value="code" ><br /><br /></td>
			</tr>
           
                           <tr>
				<td> product price <br /><br /></td>
				<Td><input type="text" name="price" size="40" value="price" ><br /><br /></td>
			</tr>
           <tr>
				<td> product desc <br /><br /></td>
				<Td><input type="text" name="desc" size="40" value="desc" ><br /><br /></td>
			</tr>
            <tr>
				<td> product quantity <br /><br /></td>
				<Td><input type="text" name="qua" size="40" value="qua" ><br /><br /></td>
			</tr>

           <tr>
				<td> product subcatgory <br /><br /></td>
				<?php
				$sel = "select * from subcat_detail";
				$ex = mysql_query($sel);
			?>
			<tr>
				<td><select name="subcat">
				<option value="">Select catgory</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['subcat_id']; ?>"><?php echo $r['subcat_name']; ?></option>
			<?php	
				}
			?>
			</tr>
                                  
			<Tr>
    <?php
		if(isset($_REQUEST['edit_id']))
		{
	?>
    	<th colspan="2"><input type="submit" name="update" value=" update" ></th>
     <?php
		}
		else
		{
	?>
    <th colspan="2"><input type="submit" name="submit" value="Add product" ></th>
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
