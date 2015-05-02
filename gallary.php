<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallary | InfoGear Solutions</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>
<link rel="shortcut icon" href="images/logo.ico" />
</head>

<body onload="autoslider()">
<div id="header">
    <img src="images/logo.jpg" alt="logo" id="logo_image">
    <a href="home.php"><h2 id="company_title">InfoGear Solutions</h2></a>
    <a href="home.php"><div id="home_menu" class="menu_item">Home</div></a>
    <a href="products.php"><div id="product_menu" class="menu_item">Products</div></a>
    <a href="gallary.php"><div id="gallary" class="menu_item">Gallary</div></a>
    <a href="aboutus.php"><div id="about_us" class="menu_item">About Us</div></a>
    <div id="logout" class="menu_item"><form action="logout.php" method="post"><input type="submit" name="logout" value="<?php session_start(); if(isset($_SESSION['username'])) { echo "Logout";} else echo "";?>" ></form></div>
    <a href="signin.html"><div id="sign_in_div" class="menu_item"><?php if(isset($_SESSION['username'])) {echo "Welcome ", $_SESSION['username'];} else echo "Sign In | Register"?></div></a>
</div>
<h1 id="memo_head">We Share Memories.</h1>
<div id="pic_container">
<img src="images/gallary/g1.jpg" id="gallary_pic">
<div id="left_slider" onclick="left_slide()">&lt;</div>
<div id="right_slider" onclick="right_slide()">&gt;</div>
</div>
<div id="footer">&copy;2014-2015 InfoGear&trade; Solutions Pvt. Ltd.</div>
</body>
</html>
