<?php
session_start();
	include('conn.php');
	 if(isset($_SESSION['admin']))
 {
  $username= $_SESSION['admin'];
 //echo "Admin name :".$username;
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
    <script language="javascript">
  function check()
  {
   if(document.getElementById("username").value =="")
   {
    alert('Please Enter Admin name !!'); 
    document.getElementById("username").focus();
    return false;
   }
   if(document.getElementById("password").value =="")
   {
    alert('Please Enter password !!');
    document.getElementById("password").focus();
    return false;
   }
   if (isUcase(document.getElementById("username").value) == false || isUcase(document.getElementById("password").value) == false)
   {
    alert("Admin Name and Password not match!!");
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("username").focus();
    return false;
   }
  }
 </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin panel</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin panel</h2>   
                        <h5>Welcome  </h5>
                       
                    </div>
                </div>
				 <table cellspancing="20" border="5" cellpadding="20" width="30%">
		   
		   </table>
		   
		   <br><br>
        <form action="" method="post" name="frm_admlogin" id="frm_admlogin" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear"></th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Required  &nbsp; </span></div></td>
                  </tr>
              <tr>
                 <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Admin Name : </strong></div></td>
                 <td width="128"><input type="textbox" name="username" id="username" maxlength="20" style="width:176px;"
                                   onChange="document.getElementById('username').value=trim(this.value);"/>
                                   <div class="example"></div></td>
              </tr>
              <tr>
                 <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Password : </strong></div></td>
                 <td width="128"><input type="password" name="password" id="password" maxlength="10" style="width:176px;"
                                   onChange="document.getElementById('password').value=trim(this.value);"/></td>
              </tr>
              <tr>
                 <td colspan="3" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" id="submit" name="submit" value="Login" Onclick="return check(this.form);" />
                 &nbsp;&nbsp;&nbsp;
                 </td>
              </tr>
              </table></td>
            </tr>
          </table>
        </form>
 
 <?php
 if(isset($_POST['submit']))
 {
   $admin =$_POST['username'];
   $password=$_POST['password'];
   $query = mysql_query("SELECT * FROM admin WHERE username = '$admin' AND password = '$password' ")
   or die(mysql_error());
   if(mysql_num_rows($query)>0)
   {
     $_SESSION['admin']=$admin;
     echo "<script>window.location='adloghome.php';</script>";
   }
   else
   {
     echo '<div align="center"><strong><font color="#FF0000">Admin Name & Password not match !!</font></Strong></div>';
   }
}
@mysql_close($con);
?>
    
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
