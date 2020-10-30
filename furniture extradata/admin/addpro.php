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
	//insert Product
	if(isset($_REQUEST['submit']))
	{
		$pn = $_REQUEST['pname'];
		$ci = $_REQUEST['cat'];
		$si = $_REQUEST['subcat'];
		$bi = $_REQUEST['brand'];
		$mn = $_REQUEST['modelno'];
		$pi = $_REQUEST['pimage'];
		$pp = $_REQUEST['pprice'];
		$pd = $_REQUEST['pdetail'];
		$ins = "insert into product(pname,cat,subcat,brand,modelno,pimage,pprice,pdetail) 
				values('$pn','$ci','$si','$bi','$mn','$pi','$pp','$pd')";
		
		$ex = mysql_query($ins);
		header("location:uppro.php");
	}
	if(isset($_REQUEST['edit_id']))
	{
			$id = $_REQUEST['edit_id'];
			$sel = "select * from product where p_id='$id'";
			$ex = mysql_query($sel);
			$rw = mysql_fetch_array($ex);
	}
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$id = $_REQUEST['edit_id'];
		$pn = $_REQUEST['pname'];
		$ci = $_REQUEST['cat'];
		$si = $_REQUEST['subcat'];
		$bi = $_REQUEST['brand'];
		$mn = $_REQUEST['modelno'];
		$pi = $_REQUEST['pimage'];
		$pp = $_REQUEST['pprice'];
		$pd = $_REQUEST['pdetail'];
		$ins = "update product set pname='$pn' cat='$ci' subcat='$si' brand='$bi' modelno='$mn' pimage='$pi' pprice='$pp' pdetail='$pd' where p_id='$id' ";
		$ex = mysql_query($up);
		header("location:uppro.php");
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
				<td>Enter product name</td>
				<Td><input type="text" name="pname" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['pname'];
				}
			?>
			</tr>
			
						
			
			<?php
				$sel = "select * from  cat";
				$ex = mysql_query($sel);
			?>
			<tr>
			<td>Select product catory</td>
				<td> <select name="cat">
				<option value="">Select Catagory</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['cat_id'];?>"><?php echo $r['cat_name']; ?></option>
			<?php	
				}
			?>
				   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cat'];
				}
			?>
			</select>
					
			
			</td>
			</tr>

			<tr>
			<?php
				$sel = "select * from scat";
				$ex = mysql_query($sel);
			?>
			<td> Select product subcatory</td>			
			<td> <select name="subcat">
				<option value="">Select subcatagory</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['subcat_id'];?>"><?php echo $r['scat_name']; ?></option>
			<?php	
				}
			?>
			  <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['subcat'];
				}
			?>
			<br>
			</select>
			</td>
			</tr>
				
			
						
			<?php
				$sel = "select * from brand";
				$ex = mysql_query($sel);
			?>
			
			<tr>
			
			<td> Select product brand</td>
				<td> <select name="brand">
				<option value="">Select Brand</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['brand_id'];?>"><?php echo $r['brand_name']; ?></option>
			<?php	
				}
			?>
				   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['brand'];
				}
			?>
            </select>
			</td>
			</tr>
			
			<Tr>
			
				<td> Enter product model no.</td>
				
				<td><input type="Text" name="modelno" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['modelno'];
				}
			?>
		 	</Tr>
		
			<tr>
		
				<Td>product image</td>
        
		        <td><input type="file" name="pimage" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['pimage'];
				}
			?>
		    <Tr>
		
			<Tr>
		
				<td>Enter product price </td>
		
				<td><input type="Text" name="pprice" size="30"></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['pprice'];
				}
			?>
			</Tr>
		
			<tr>
		
				<Td>product Detail</td>
        
		        <td><textarea type="text" name="pdetail" size="100%"></textarea></td>
					   <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['pdetail'];
				}
			?>
		    <Tr>
							
		
			<tr>
		
				<th colspan="2"><input type="submit" name="submit" value="Add Product"></th>
		
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
   	  <?php
  include "Footer.php";
  ?>
   
</body>
</html>
