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
	$sel = "select * from product";
	$ex = mysql_query($sel);
		if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from product  where pid='$id'";
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
	<table align="center" width="70%" cellspacing="10">
    	<tr>
        	<th>Product Name</th>
            <th>Category</th>
            <th>Subcategory</th>
			 <Th>Brand</Th>
			 <Th>Model No.</Th>
            <th>Image</th>
            <Th>Product Rate</Th>
			<Th>Product Detail</Th>
            <th>Action</th>
        </tr>
        <?php
			while($r=mysql_fetch_array($ex))
			{
		?>
        <tr>
        	<Td><?php echo $r['pname']; ?></Td>
            <Td><?php echo $r['cat']; ?></Td>
            <Td><?php echo $r['subcat']; ?></Td>
			<Td><?php echo $r['brand']; ?></Td>
            <Td><?php echo $r['modelno']; ?></Td>
            <Td><?php echo $r['pimage']; ?></Td>
			<Td><?php echo $r['pprice']; ?></Td>
			<Td><?php echo $r['pdetail']; ?></Td>
            <Td><a href="addcomp.php?edit_id=<?php echo $r['id']; ?>">Edit</a>
			<a href="delcomp.php?del_id=<?php echo $r['id']; ?>">Delete</a></Td>
        </tr>
        <?php
			}
		?>
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
