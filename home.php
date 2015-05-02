<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Infogear Solutions</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>
<link rel="shortcut icon" href="images/logo.ico" />
</head>
<body>
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
<div id="slider_div">
<img id="current_pic" src="images/slider0.jpg">
<div id="slide_left" onclick="leftslide()">&lt;</div>
<div id="slide_right" onclick="rightslide()">&gt;</div>
</div>
<div id="tag_line_div"><h2 id="comp_tag">Infogear Solutions, A clear choice in the world of Secure Computing</h2>
<p id="tag_desc">AntiVirus Softwares, Spyware Detectors, Maleware Detectors, Internet Security, Secure Wallets</p>
</div>
<div id="vision_goal_who">
<div id="vision_div">
	<div class="c_img">!</div>
    <h2 class="h_gvw">Our Vision</h2>
    <p class="p_gvw">The Vision of the company is building a future where there are no more cyber threats, no more hacks and a safe and private internet is at prime importance. We at InfoGear insure that every person safely visits web without breach in privacy, out products like antivirus, and antispammer implements the above. We gear up the process of transactions by providing a secure payment gateway, via our secure wallet.</p>
</div>
<div id="goal_div">
	<div class="c_img">&gt;</div>
    <h2 class="h_gvw">Our Goal</h2>
    <p class="p_gvw">Our Goal as a leading provider of Information security solutions, is to ensure that every indivisual is safe with us. Our products rech out to everybody and Hacks and attacks on cyber world are minimized. We include the responsibiltity to make the acces of Internet is a safer way, and comuting with no hazards. In future world, where there will be more computational power, more resources, we want them to be used in a constructive way.</p>
</div>
<div id="who_div">
<div class="c_img">?</div>
<h2 class="h_gvw">Who we are</h2>
<p class="p_gvw">We at Infogear develope security solutions for Information Technology related fields and computing,The main producs we produce are Anti-Virus, Safe Payment Wallet, and an Anti Spammer. The Antivirus includes anti-malware and real time scanner so that no virus, or maleware can enter your system, via removable disk or Internet. The next thing i.e is our Wallet is used as a payment gateway, which is secured by 128 SSL encryption, thus making it easier and safe for users to trasfer funds, and for the safe and enjoyable experience of web pages, we also build a anti spammer, which is automatically able to detect spams and spammy advertisements.</p>
</div>
</div>
<div id="power">Infogear Powers most of the tech giants.</div>
<div id="company_logos">
	<div class="logo_pic" ><img src="images/c1.png"></div>
	<div class="logo_pic" ><img src="images/c2.png"></div>
    <div class="logo_pic" ><img src="images/c3.jpg"></div>
    <div class="logo_pic" ><img src="images/c4.png"></div>
    <div class="logo_pic" ><img src="images/c5.png"></div>
    <div class="logo_pic" ><img src="images/c6.png"></div>
    <div class="logo_pic" ><img src="images/c7.jpg"></div>
    <div class="logo_pic" ><img src="images/c8.png"></div>
    <div class="logo_pic" ><img src="images/c9.png"></div>
    <div class="logo_pic" ><img src="images/c10.png"></div>
    <div class="logo_pic" ><img src="images/c11.png"></div>
    <div class="logo_pic" ><img src="images/c12.png"></div>
    <div class="logo_pic" ><img src="images/c13.png"></div>
    <div class="logo_pic" ><img src="images/c14.png"></div>
    <div class="logo_pic" ><img src="images/c15.png"></div>
</div>
<div id="footer">&copy;2014-2015 InfoGear&trade; Solutions Pvt. Ltd.</div>
</body>
</html>
