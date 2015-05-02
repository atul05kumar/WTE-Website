<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us | InfoGear Solutions</title>
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
<div id="aboutus_banner">
	<img src="images/aboutus_banner.jpg" />
    <div id=about_us_menu>
    	<a href="#about_container"><div class="about_us_menu_item">About</div></a>
       <a href="#team_div"><div class="about_us_menu_item">Team</div></a>
        <a href="#ceo_div"><div class="about_us_menu_item">CEO</div></a>
       <a href="#contact_div"><div class="about_us_menu_item" id=con>Contact</div></a>
    </div>
</div>
<div id="about_container">
    <div id="about_div">
        <h2>InfoGear Overview</h2>
        <h3>An Intelligent solution in Information Security</h3>
        <p>The Vision of the company is building a future where there are no more cyber threats, no more hacks and a safe and private internet is at prime importance. We at InfoGear insure that every person safely visits web without breach in privacy, out products like antivirus, and antispammer implements the above. We gear up the process of transactions by providing a secure payment gateway, via our secure wallet.</p>
        <h3>A clear choice in Web Security</h3>
        <p>We at Infogear develope security solutions for Information Technology related fields and computing,The main producs we produce are Anti-Virus, Safe Payment Wallet, and an Anti Spammer. The Antivirus includes anti-malware and real time scanner so that no virus, or maleware can enter your system, via removable disk or Internet. The next thing i.e is our Wallet is used as a payment gateway, which is secured by 128 SSL encryption, thus making it easier and safe for users to trasfer funds, and for the safe and enjoyable experience of web pages, we also build a anti spammer, which is automatically able to detect spams and spammy advertisements.</p>
    </div>
	<div id="news">
    	<h2>News</h2>
        <p>April 13, 2015 New difinitions added to our spywares</p>
        <p>April 14, 2015 New web security tool kit launched.</p>
        <p>April 16, 2015 Discount for student on purchase of primium Antivirus.</p>
        <p>April 18, 2015 New threats detected on large scale in India.</p>
        <h2>Press Releases</h2>
        <p>April 20, 2015 New notification relesed for software security post.</p>
        <p>April 23, 2015 Now banks will also employ our systems.</p>
        <p>April 25, 2015 New record scans by our systems across globe in first quater.</p>
    </div>
</div>
<div id="team_div">
	<img src="images/team.jpg">	
    <h1>Team</h1>
    <div id="leaders_div">
    	<h2>Leadership Team</h2>
        <div class="circular" id="t1"></div>
        <div class="circular" id="t2"></div>
        <div class="circular" id="t3"></div>
        <div class="circular" id="t4"></div>
        <h3 id="ritz">Ritesh Kumar Sinha</h3>
        <h3 id="nithin">Nithin Srikar Karnala</h3>
        <h3 id="gaurav">Gaurav Kumar Chandel</h3>
        <h3 id="ankur">Ankur Mishra</h3>
    </div>
</div>
<div id="ceo_div">
	<img src="images/ceo.jpg">
	<h1>Atul Kumar Verma, CEO InfoGear Solutions</h1>
    <div id="ceo_pic"></div>
    <h2>C/C++ Programmer | Web Developer | Security Analyst | Innovator | Learner</h2>
</div>
<div id="contact_div">
	<h1>Need Help? We are always here for you.</h1>
	<div id="feeback_div">
    <form name="feedback_form" method="post" action="feedback.php">
    	<h3>Your Name:</h3><input type="text" name="name">
        <h3>Your Email:</h3><input type="text" name="email">
        <h3>Your Message:</h3><textarea rows="5" cols="85" name="message"></textarea><br><br>
        <div id="sub"><input type="submit" name="submit" value="Sumbit"></div>
    </form>
    </div>
    <div id="address"><h2>Head Office</h2>Floor No. 22,Survey No. 209,Hitech City,M.G. Road,Dist:Hyderabad,Andra Pradesh,Pin:202345.</div>
    <div id="mail"><h2>Drop us a Mail:</h2>Customer Support:care@infogear.org <br>Business Inquery:<br>business@infogear.com<br>Complaints Suggestions:<br>help@infogear.com <br>Call us 24X7 at:(+91)8542849196,<br>(+91)9918610231</div>
</div>
<div id="footer">&copy;2014-2015 InfoGear&trade; Solutions Pvt. Ltd.</div>
</body>
</html>
