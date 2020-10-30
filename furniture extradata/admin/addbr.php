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
 }	
 	 $sel = "select * from brand";
	$ex = mysql_query($sel);

 	if(isset($_REQUEST['submit']))
	{
		$ct = $_REQUEST['brand_name'];
		$ins = "insert into brand(brand_name) values('$ct')";
		$ex = mysql_query($ins);
		
	}
	if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from brand  where brand_id='$id'";
		$ex = mysql_query($up);
		header("location:upbr.php");
	}
	if(isset($_REQUEST['edit_id']))
	{
			$id = $_REQUEST['edit_id'];
			$del = "select * from brand where brand_id='$id'";
			$ex = mysql_query($del);
			$rw = mysql_fetch_array($ex);
	}
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$id = $_REQUEST['edit_id'];
		$nm = $_REQUEST['brand_name'];
		
		
		echo $up = "update brand set brand_name='$nm' where brand_id='$id'";
		$ex = mysql_query($up);
		header("location:upbr.php");
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin panel</h2>   
                        <h5>Welcome $username panel</h5>
                       
                    </div>
                </div>
				<table cellspancing="20" border="5" cellpadding="20" width="30%">
		   
		   </table>
		   	   <form method="post">
		     <Table width="70%">
			<tr>
				
			<Tr>
				<td> Brand</td>
				<td> Action </td>
			</tr>
			<br><br>
			
				 <?php
			while($r=mysql_fetch_array($ex))
			{
		?>
		 <tr>
        	<Td><?php echo $r['brand_name']; ?></Td>
            <Td><a href="addbr.php?edit_id=<?php echo $r['brand_id']; ?>">Edit</a>
			<a href="addbr.php?del_id=<?php echo $r['brand_id']; ?>">Delete</a></Td>
        </tr>
        <?php
			}
		?>
		   </table>
		  
		   
		   </form>
		   <br><br>
		   <form method="post">
		     <Table width="70%">
			<tr>
				
			<Tr>
				<td>Enter Brand</td>
				<td><input type="Text" name="brand_name" size="30"></td>
				   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['brand_name'];
				}
			?>
			</tr>
			<br><br>
			<tr>
				<th colspan="2">&nbsp;</th>
			</tr>
		   </table>
		     <input type="submit" name="submit" value="Add Brand">
		   
		   </form>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>   	  <?php
  include "Footer.php";
  ?>  
   
</body>
</html>
