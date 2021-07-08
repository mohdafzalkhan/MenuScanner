<?php
    session_start();
    include('staff_config.php');
    include('function.php');
    include('constant.php');

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo FRONT_SITE_NAME?></title> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<div class="row">
    <div class="col-12">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php"><img src='res/logor.jpeg' alt="Logo" style="width:40px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
      
        <a class="nav-link" href="index.php">HOME</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACT US</a>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">GALLERY</a>
      <li class="nav-item">
        <a class="nav-link" href="register.php">SIGN UP</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="staff_login.html">STAFF</a>
      </li>
        
         <li class="nav-item">
       
      </li>
    </ul>
  </div>
    
    <div class="account-curr-lang-wrap f-right">
    <?php
    if(isset($_SESSION['FOOD_USER_NAME'])){
    ?>
    <ul>
        <li class="top-hover"><a href="#"><?php echo "Welcome ".$_SESSION['FOOD_USER_NAME'];?>  <i class="ion-chevron-down"></i></a>
            <ul>
                <li><a href="profile.php">Profile  </a></li>
                <li><a href="order_history.php">Order History</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
    <?php } ?>
</div>
    <div class="rounded-circle" style="background-color:white;padding:12px;margin-left:70px;margin-right:70px;" >
    <div class="header-cart" >
        <a href="#">
            <div class="header-icon-style">
                <i class="icon-handbag icons"></i>
                <span class="count-style">0</span>
            </div>
            <div class="cart-text">
                <span class="digit">My Cart</span>
                <span class="cart-digit-bold"></span>
            </div>
        </a>

    </div>
        </div>
     <div class="header-login">
    <?php
if(!isset($_SESSION['FOOD_USER_NAME'])){
    ?>
    <div class="rounded-circle" style="background-color:white;padding:12px;" >
   

<a href="login_register.php">
    <div class="header-icon-style">
        <i class="icon-user icons header_icon"></i>
    </div>
    <div class="login-text-content header_icon">

            <p>Register <br> or <span>Sign in</span></p>

    </div>
</a>
<?php
        }
        ?>
</div>
    </div>
    
    
    
        </nav>
         
    </div>
    