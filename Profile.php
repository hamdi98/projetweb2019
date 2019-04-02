
 <!DOCTYPE html>
<html lang="en">
<?php
include "../core/functions.php";

session_start();
if(logged_in())
{
 header("location:home.php");
}
$host="localhost";
$user="root";
$password="";
$db="project";
 
$con = mysqli_connect($host,$user,$password,$db);
$emaill=$_SESSION['mail'];

$result=mysqli_query($con , "SELECT namee,lname,rpwd,pwd,country FROM client WHERE email='$emaill'");
$retrive=mysqli_fetch_array($result);
//print_r($retrive);
$name=$retrive['namee'];
$lname=$retrive['lname'];
$rpwd=$retrive['rpwd'];
$pwd=$retrive['pwd'];
$lname=$retrive['lname'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script type="text/javascript" src="js.js"></script>
    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
  
    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Your Bag $20</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-10.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="Sign-in-up-bt">
                                        <p>Hello, <a href="file:///C:/wamp64/www/Projet/views/Profile.php"><?php echo $name;?></a> , <a href="Logout.php">Logout</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.html">Home</a>
                                                    <a class="dropdown-item" href="shop.html">Shop</a>
                                                    <a class="dropdown-item" href="product-details.html">Product Details</a>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Dresses</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">hot</span> Shoes</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +34 657 3556 778</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->
        <!--Profile start---->
        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Catagories</h6>
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#women2">
                                                <a href="#">Change Name and Last Name</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#man2" class="collapsed">
                                                <a href="#">Change Password</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                                <a href="#">Change Email</a>
                                            </li>
                                            <!-- Single Item -->
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#footwear2" class="collapsed">
                                                <a href="#">Change Country</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                            	 
		<div class="Change_Container" style="margin-left: 120px;">
			<div class="Change_Container">
				<div class="Form-Change">
					
                            	<?PHP
                                include "../entities/client.php";
                                 include "../core/clientd.php";
                                 if (isset($_GET['email'])){

	                             $clientd=new clientd();
                     
                                ?>
                            <form  method="POST" name="f2" >
                                <div class="row">
                                	<h1 class="Create-text">Change Personal information</h1>
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="<?PHP echo $name ?>"  name="namee">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" value="<?PHP echo $lname ?>"  name="lname">
                                    </div>
                                
                                        <div class="col-12 mb-3">
                                        <label for="country">Country <span>*</span></label>
                                        <select class="custom-select d-block w-100" id="country"  name="country">
                                        <option value="usa">Tunisia</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="Password">Password <span>*</span></label>
                                        <input type="Password" class="form-control mb-3"  value="<?PHP echo $pwd ?>"  name="pwd">
                                        <label for="Password">Repeat Password <span>*</span></label>
                                        <input type="Password" class="form-control"  value="<?PHP echo $rpwd ?>" name="rpwd">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address" value="<?PHP echo $emaill ?>" name="email">
                                    </div>
                                    </div>
                                <div class="Change-button">
         <button  onclick="Signup()" value="modifier" name="modifier" id="submit-form-button" class="btn" type="submit" style="width: 740px; background-color: #ff084e;" > Change </button>
         <input type="hidden" name="email_ini" value="<?PHP echo $_GET['email'];?>">
                    
                </div>
                            </form>
                            <?PHP
	                    }
                    if (isset($_POST['modifier'])){
	                    $employe=new Client($_POST['namee'],$_POST['lname'],$_POST['pwd'],$_POST['rpwd'],$_POST['email'],$_POST['country']);
	                    $clientd->modifierClient($employe,$_POST['email_ini']);
	                    
                     }

                 ?> 
				</div>
			</div>
		</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html> 