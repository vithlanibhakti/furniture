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
  $sel = "select * from subcat";
	$ex = mysql_query($sel);
 //insert City
	if(isset($_REQUEST['submit']))
	{
		$st = $_REQUEST['cat'];
		$ct = $_REQUEST['scat'];
		$ins = "insert into scat(catt_id,scat_name) values('$st','$ct')";
		$ex = mysql_query($ins);
		header("location:addcatub.php");
	}
	if(isset($_REQUEST['edit_id']))
	{
			$id = $_REQUEST['edit_id'];
			$del = "select * from scat where scat_id='$id'";
			$ex = mysql_query($del);
			$rw = mysql_fetch_array($ex);
	}
	
	if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from scat  where scat_id='$id'";
		$ex = mysql_query($up);
		header("location:addcatub.php");
	}
	
	if(isset($_REQUEST['update']) && isset($_REQUEST['edit_id']))
	{
		$id = $_REQUEST['edit_id'];
		$st = $_REQUEST['cat'];
		$ct = $_REQUEST['scat'];
		
		
		echo $up = "update scat  set cat_id='$st' scat_name='$ct' where scat_id='$id'";
		$ex = mysql_query($up);
		header("location:addcatsub.php");
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
                
				 <form method="post">
		   <Table width="70%">
			<tr>
				 
				  <td> Sub-Category</td>
				  <td> Action </td>
			</tr> 
			
			
			
			<br><br>
			
				 <?php
			while($r=mysql_fetch_array($ex))
			{
		?>
		 
		 <tr>
		 
        
			<Td> <?php echo $r['subcat_name']; ?> </Td>
        
		    <Td> <a href="addcat.php?edit_id=<?php echo $r['scat_id']; ?>">Edit</a>
		
			<a href="delcat.php?del_id=<?php echo $r['scat_id']; ?>">Delete</a> </Td>
        </tr>
        <?php
			}
		?>
		   </table>
		  
		   
		   </form>   
		   
		   <br><br>
				 <form method="post">
		   <Table width="70%">
			<?php
				$sel = "select * from cat";
				$ex = mysql_query($sel);
			?>
			<tr>
			
				<td><select name="cat">
				
				<option value="">Select catgory</option>
			<?php
				while($r=mysql_fetch_array($ex))
				{
			?>
				<option value="<?php echo $r['cat_id']; ?>"><?php echo $r['cat_name']; ?></option>
			<?php	
				}
			?>
			 <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['cat'];
				}
			?>
			
			<tr>
				<td>Enter subcatgory</td>
				<td> <input type="Text" name="scat" size="30"></td>
				 <?php
				if(isset($_REQUEST['edit_id']))
				{
					echo "value=".$rw['scat'];
				}
			?>
			
			</tr>
			<br> <br>
		
			<tr>
				
				<th colspan="2">&nbsp;</th>
		
			</tr>
		   </table>
		     <input type="submit" name="submit" value="Add subcatgory">
		   
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
