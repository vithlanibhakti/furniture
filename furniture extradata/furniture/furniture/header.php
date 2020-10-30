<?php
if(!isset($_SESSION['id']))
{
?>
<header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
								<li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="products2.php">Products</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="csr.php">CSR</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
								<li><a class="loginkey" href="login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1><a class="logo" href="index.php">R<strong>e</strong>tail</a>
                            <span>Furniture</span>&nbsp;<span></h1> 
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" action="search_result.php" method="post" enctype="multipart/form-data">
                            <fieldset>	
                                <div class="search-field">
                                    <input name="pro" type="text" />
                                    <input type="submit" name="search" value="Search Product" class="search-button"   />                             </div>						
                            </fieldset>
                        </form>
                  </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
<?php
}
else
{
$nm = $_SESSION['name'];
?>  
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
								<li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="csr.php">CSR</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
								<li><a class="loginkey" href="login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1><a class="logo" href="index.php">R<strong>e</strong>tail</a>
                            <span>Furniture</span>&nbsp;&nbsp;&nbsp;<span>Welcome , <?php echo $nm; ?></span>&nbsp;&nbsp;&nbsp;<span><a href="logout.php">Logout</a></span></h1> 
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" action="search_result.php" method="post" enctype="multipart/form-data">
                            <fieldset>	
                                <div class="search-field">
                                    <input name="pro" type="text" />
                                    <input type="submit" name="search" value="Search Product"  class="search-button"  />                             </div>						
                            </fieldset>
                        </form>
                  </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
<?php
}
?>