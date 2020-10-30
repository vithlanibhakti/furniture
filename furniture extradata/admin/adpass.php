<?php   
 session_start();
 include("conn.php");
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
   
       <script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/count.js"></script>
 <script type="text/javascript" src="#"></script>
 <script language="javascript">
 // function for comfirm box !!
  function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    return false;
   }
   else
   {
    alert(window.location='adlogout.php');
   }
  }
  function check()
  {
  // validating Old Password for non empty !!
  if(document.getElementById("old").value=="")
  {
   alert("Enter old Password !!");
   document.getElementById("old").value = "";
   document.getElementById("old").focus();
   return false;
  }
  // validating Password & Re-Enter Password for non empty , isCharNum(); & isEqual(); & isUcase(); !!
  if(document.getElementById("password").value=="" || document.getElementById("rpassword").value=="" )
  {
   alert("Enter New Password !!");
   document.getElementById("password").value = "";
   document.getElementById("rpassword").value = "";
   document.getElementById("password").focus();
   return false;
  } else if(isCharNum(document.getElementById("password").value) == false || isCharNum(document.getElementById("rpassword").value) == false) {
    alert("Password Should be Lower case Characters & Numbers only !!");
    document.getElementById("password").value = "";
    document.getElementById("rpassword").value = "";
    document.getElementById("password").focus();
    return false;
  } else if (isUcase(document.getElementById("password").value) == false || isUcase(document.getElementById("rpassword").value) == false) {
    alert("Password Should be Lower Case & Number only !!");
    document.getElementById("password").value = "";
    document.getElementById("rpassword").value = "";
    document.getElementById("password").focus();
    return false;
  } else if (isLen(document.getElementById("password").value) <8 || isLen(document.getElementById("rpassword").value) <8){
    alert("Minimum Length Should be of 8 characters !!");
    document.getElementById("password").value = "";
    document.getElementById("rpassword").value = "";
    document.getElementById("password").focus();
    return false;
    } else if (isSpace(document.getElementById("password").value) == false || isSpace(document.getElementById("rpassword").value) == false){
    alert("Space is not allowed !!");
    document.getElementById("password").value = "";
    document.getElementById("rpassword").value = "";
    document.getElementById("password").focus();
    return false;
    } else {
    if(isEqual(document.getElementById("password").value,document.getElementById("rpassword").value)== false){
     alert("Password not match Re-Enter once again !!");
     document.getElementById("password").value = "";
     document.getElementById("rpassword").value = "";
     document.getElementById("password").focus();
     return false;
    }
  }

  }
 </script>
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
				<table cellspancing="20" border="5" cellpadding="20" width="30%">
		   
		   </table>
		   
		   <br><br>
		   <form action="" method="post" name="frm_prd" id="frm_prd" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Enter Details.</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  <tr>
                   <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Old Password : </strong></div></td>
                   <td width="128"><input type="password" name="old" id="old" maxlength="10" style="width:176px;"
                                            onChange="UserCheckAvail(this.value);document.getElementById('old').value=trim(this.value);"/>
                   </td>
                  </tr>
                  <tr>
                   <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>New Password : </strong></div>
                   <td width="128"><input type="password" name="password" id="password" maxlength="10" style="width:176px;"
                    onChange="document.getElementById('password').value=trim(this.value);"/><div class="example">(Minimum 8 characters.)</div></td></td>
                  </tr>
                  <tr>
                   <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Re-Enter New Password : </strong></div></td>
                    <td width="128"><input type="password" name="rpassword" id="rpassword" maxlength="10" style="width:176px;"
                      onChange="document.getElementById('rpassword').value=trim(this.value);"/><div class="example">(Minimum 8 characters.)</div></td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3" >&nbsp;&nbsp;&nbsp;<!--Onclick="return done(this.form);"-->
                      <input type="submit"  id="submitMain" name="submitMain" value="Change" Onclick="return check(this.form);" > 
                      &nbsp;&nbsp;&nbsp;
                      <input type="reset" id="subintr" name="subintr" value="Reset"  /></td>
                  </tr>
              </table></td>
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
 <?php
  if(isset($_POST['submit']))
  {
   $get= @mysql_query("SELECT * FROM admin WHERE username= '$username' ")or die(mysql_error());
   $num= @mysql_num_rows($get);
   for($i=0;$i<$num;$i++)
   {
    $old_password= @mysql_result($get,$i,'password');
   }
   $old=$_POST['old'];
   $password=$_POST['password'];
   if($old_password == $old){
    if($old == $password) {
      echo "<script> alert('Old password and New Password same ,Try Another !!');</script>";
     } else {
      $query = mysql_query("UPDATE admin SET password='$password' WHERE username='$username' ")
                           or die(mysql_error());
      echo "<script>alert('Password Changed sucessfully !!');</script>";
     }
    } else {
      echo "<script>alert('Old Password is Wrong !!');</script>";
    }
  }
?>
    
   
</body>
</html>
