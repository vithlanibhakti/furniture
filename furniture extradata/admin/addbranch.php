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
		$nm = $_REQUEST['br_name'];
		$ad = $_REQUEST['br_address'];
		$in = $_REQUEST['br_incharge'];
		$mbl = $_REQUEST['br_mobile'];
		$phn = $_REQUEST['br_phone'];
		$eml = $_REQUEST['br_email'];
		$fx = $_REQUEST['br_fax'];
		$ct = $_REQUEST['br_city'];
	
		$ins = "insert into branch_de('br_id','br_name','br_address','br_incharge','br_mobile','br_phone','br_email','br_fax','br_city')" ;
				values('$nm','$ad','$in','$mbl','$phn','$eml','$fx','$ct')";
		
		$ex = mysql_query($ins);
		header("location:upcompro.php");
	}
	if(isset($_REQUEST['edit_id']))
	{
			$id = $_REQUEST['edit_id'];
			$sel = "select * from branch_de where br_id='$id'";
			$ex = mysql_query($sel);
			$rw = mysql_fetch_array($ex);
	}
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$id = $_REQUEST['edit_id'];
		$pn = $_REQUEST['br_name'];
		$ci = $_REQUEST['br_address'];
		$si = $_REQUEST['br_incharge'];
		$bi = $_REQUEST['br_mobile'];
		$mn = $_REQUEST['br_phone'];
		$pi = $_REQUEST['br_email'];
		$pp = $_REQUEST['br_fax'];
		$ct = $_REQUEST['br_city'];
		
		
$ins = "update product set br_name='$pn' br_address='$ci' br_incharge='$si' br_mobile='$bi' br_phone='$mn' br_email='$pi' br_fax='$pp' br_city='$ct' where br_id='$id' ";
		$ex = mysql_query($up);
		header("location:addbranch.php");
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
				<Td><input type="text" name="br_name" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_name'];
				}
			?>
			</tr>
			<Tr>
				<td>Enter Company Address</td>
				<td><input type="Text" name="br_address" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_address'];
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
				<td><input type="Text" name="br_mob" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_mob'];
				}
			?>
			</tr>
            <Tr>
				<td>Enter Company Fax No.</td>
				<td><input type="Text" name="br_fax" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_fax'];
				}
			?>
			</tr>
            <Tr>
				<td>Enter Company Phone No.</td>
				<td><input type="Text" name="br_phn" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_phn'];
				}
			?>
			</Tr>
			   <Tr>
				<td>Enter Company Email</td>
				<td><input type="Text" name="br_email" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['br_email'];
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
