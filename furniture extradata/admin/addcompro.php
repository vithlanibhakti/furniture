<?php
session_start();
	include('conn.php');
if(isset($_SESSION['admin']))
 {
  $username=$_SESSION['admin'];
 //echo "Admin name :".$username;
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  window.location='adlogin.php';
 </script>
 <?php
	//insert Company Profile
	if(isset($_REQUEST['submit']))
	{
		$pn = $_REQUEST['cmp_name'];
		$ci = $_REQUEST['cmp_address'];
		$si = $_REQUEST['cmp_email'];
		$bi = $_REQUEST['cmp_fax'];
		$mn = $_REQUEST['cmp_head'];
		$pi = $_REQUEST['cmp_mob'];
		$pp = $_REQUEST['cmp_phn'];
	
		$ins = "insert into comp(cmp_name','cmp_address','cmp_email','cmp_fax','cmp_head','cmp_mob','cmp_phn') 
				values('$pn','$ci','$si','$bi','$mn','$pi','$pp')";
		
		$ex = mysql_query($ins);
		header("location:upcompro.php");
	}
	if(isset($_REQUEST['edit_id']))
	{
			$id = $_REQUEST['edit_id'];
			$sel = "select * from cpmp where cmp_id='$id'";
			$ex = mysql_query($sel);
			$rw = mysql_fetch_array($ex);
	}
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$id = $_REQUEST['edit_id'];
		$pn = $_REQUEST['cmp_name'];
		$ci = $_REQUEST['cmp_address'];
		$si = $_REQUEST['cmp_email'];
		$bi = $_REQUEST['cmp_fax'];
		$mn = $_REQUEST['cmp_head'];
		$pi = $_REQUEST['cmp_mob'];
		$pp = $_REQUEST['cmp_phn'];
		
		
$ins = "update product set cmp_name='$pn' cmp_address='$ci' cmp_email='$si' cmp_fax='$bi' cmp_head='$mn' cmp_mob='$pi' cmp_phn='$pp' where cmp_id='$id' ";
		$ex = mysql_query($up);
		header("location:upcompro.php");
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
    <?php
  include "Header.php";
  ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin panel</h2>   
                        <h5>Welcome $username panel</h5>
                       
                    </div>
                </div>
                 
		   <form method="post">
		   <Table width="100%">
			<tr>
				<td>Enter Company name</td>
				<Td><input type="text" name="cmp_name" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_name'];
				}
			?>
			</tr>
			<Tr>
				<td>Enter Company Address</td>
				<td><input type="Text" name="cmp_address" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_address'];
				}
			?>
			</tr>
			<tr>
				<Td>Company Head</td>
                <td><input type="file" name="cmp_head" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_head'];
				}
			?>
            <Tr>
				<td>Enter Company Mobile No.</td>
				<td><input type="Text" name="cmp_mob" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_mob'];
				}
			?>
			</tr>
            <Tr>
				<td>Enter Company Fax No.</td>
				<td><input type="Text" name="cmp_fax" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_fax'];
				}
			?>
			</tr>
            <Tr>
				<td>Enter Company Phone No.</td>
				<td><input type="Text" name="cmp_phn" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_phn'];
				}
			?>
			</Tr>
			   <Tr>
				<td>Enter Company Email</td>
				<td><input type="Text" name="cmp_email" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cmp_email'];
				}
			?>
			</Tr>
			<tr>
				<th colspan="2"><input type="submit" name="submit" value="Add company"></th>
			</tr>
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
