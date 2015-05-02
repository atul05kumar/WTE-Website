<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products | InfoGear Solutions</title>
<link rel="stylesheet" href="style.css">
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
<div id="products_div">
	<img src="images/products.jpg">
    <div id="product_desc_menu">
    	<a href="#antivirus"><div>Anti Virus</div></a>
        <a href="#antimale"><div>Anti Maleware</div></a>
		<a href="#antispam"><div>Anti Spammer</div></a>
		<a href="#secbrowse"><div id="last">Secure Browse</div></a>
    </div>
</div>
<div id="antivirus" class="p_div">
<img src="images/antivirus.png">
<h1>Anti Virus: Features</h1>
<ul>
<li>Real Time Scan and Sandbox run for executable files.</li>
<li>Auto Scan, and secure backup of important files.</li>
<li>Manual Disable and Booster mode available for all platforms.</li>
</ul>
<h1>Key Benifits</h1>
<ul>
<li>You do not need to scan your computer manually or when you insert a USB drive.<br> Our Anti Virus will automatically scan your computer timely.</li>
<li>Anti Virus is also able to shedule scan in boot time or when the system load is minimum.</li>
<li>If you do not want our Antivirus to disturb you for a while just disable it by goiing into settings.</li>
</ul>
</div>
<div id="antimale" class="p_div">
<img src="images/maleware.png">
<h1>Anti Maleware: Features</h1>
<ul>
<li>Auto detection of maleware softwares from its database.</li>
<li>Auto cleaning of maleware affected files, and restoring their data.</li>
<li>Scans files for malewares before downloading them from internet.</li>
</ul>
<h1>Key Benifits</h1>
<ul>
<li>Now our antivirus is equipped with update definitons of malewares, so it is always able to detect malewares.</li>
<li>Also it cleans the files which are potentially affected by malewares.</li>
<li>While browsing Internet, all the files will be passed through scanner before downloading them.</li>
</ul>
</div>
<div id="antispam" class="p_div">
<img src="images/antispam.png">
<h1>Anti Spammer: Features</h1>
<ul>
<li>Auto email spam detection on all email services.</li>
<li>Detects spammy websites or posts on internet and blocks them.</li>
<li>Deletes the files if marked spamm automatically to keep you secure.</li>
</ul>
<h1>Key Benifits</h1>
<ul>
<li>All emailing is safe now with our anti spammer, it detects them so easily.</li>
<li>Social media is now more secure with our anti spammer as it has a feature to detect spamms on the go.</li>
<li>Keeps your system clean by detecting and deleting spammy files automatically.</li>
</ul>
</div>
<div id="secbrowse" class="p_div">
<img src="images/secbrowser.jpg">
<h1>Web Security: Features</h1>
<ul>
<li>Always checks your connection for security certificate.</li>
<li>Also it cleans the files which are potentially affected by malewares.</li>
<li>Provides with https gateways that are evcrypted.</li>
</ul>
<h1>Key Benifits</h1>
<ul>
<li>Now you will never proceed to a potentially harmful website.</li>
<li>It blacklists harmful websites and updates its database.</li>
<li>Now https connection gateways are only trusted connection types by our systems.</li>
</ul>
</div>
<div id="footer">&copy;2014-2015 InfoGear&trade; Solutions Pvt. Ltd.</div>
</body>
</html>
