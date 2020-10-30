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
	$sel = "select * from comp";
	$ex = mysql_query($sel);
			if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from comp  where cmp_id='$id'";
		$ex = mysql_query($up);
		header("location:upcompro.php");
	}
?>

<!doctype html>
<html>
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
        	<th>Name</th>
            <th>Email</th>
            <th>Head</th>
			 <Th>Phone</Th>
			 <Th>Mobile</Th>
            <th>Fax</th>
            <Th>Address</Th>
            <th>Action</th>
        </tr>
        <?php
			while($r=mysql_fetch_array($ex))
			{
		?>
        <tr>
        	<Td><?php echo $r['cmp_name']; ?></Td>
            <Td><?php echo $r['cmp_email']; ?></Td>
            <Td><?php echo $r['cmp_head']; ?></Td>
			<Td><?php echo $r['cmp_phn']; ?></Td>
            <Td><?php echo $r['cmp_mob']; ?></Td>
            <Td><?php echo $r['cmp_fax']; ?></Td>
			<Td><?php echo $r['cmp_address']; ?></Td>
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