<?php
session_start();
	include('conn.php');
	
	$sel = "select * from user_reg";
	$ex = mysql_query($sel);
			if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from user_reg  where u_id='$id'";
		$ex = mysql_query($up);
		header("location:userdetail.php");
	}
?>

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
                       <form method="post">
	<table align="center" width="70%" cellspacing="10">
    	<tr>
        	<th>Name</th>
            <th>Action</th>
        </tr>
        <?php
			while($r=mysql_fetch_array($ex))
			{
		?>
        <tr>
        	<Td><?php echo $r['u_name']; ?></Td>
            <Td><a href="userdetail.php?edit_id=<?php echo $r['u_id']; ?>">Edit</a>
			<a href="userdetail.php?del_id=<?php echo $r['u_id']; ?>">Delete</a></Td>
        </tr>
        <?php
			}
		?>
    </table>
</form>

                    </div>
                </div>
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
