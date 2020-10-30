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
		if( isset($_REQUEST['del_id']))
	{
		$id = $_REQUEST['del_id'];
		
		
		echo $up = "delete from comp  where cmp_id='$id'";
		$ex = mysql_query($up);
		header("location:upcompro.php");
	}
?>

