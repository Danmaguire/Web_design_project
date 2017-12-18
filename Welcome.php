<!DOCTYPE html>
<html>

<head>
<title>
	Membership Application
</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>

</style>

</head>

<body>

<div id="header" class="sidecolor">
	
	<!--Logo-->
	<div id="logo">
	<img src="images/logo1.png" style="width:170px;height:170px;">
	</div>
	<!--Links -->
	<div id="links">	
		<a href="Contact.html">Contact Us</a>
		<a href="FAQ.html">FAQ</a>
		<a href="Sitemap.html">Sitemap</a>
	</div>
	<!--Navigation Menu-->
	<div id="navbar">
		<nav id="menu">
			<ul>
				<li><a href="Homepage.html">Home</a></li>
				<li><a href="Events.html">Events</a></li>
				<li><a href="Community.html">Community</a></li>
				<li><a href="Sports.html">Sports</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="Membership.html">Membership</a></li>
			</ul>
		</nav>	
	</div>
</div>


<div id="homebod">
<div style="padding-right: 10%;">
<h1 styel>Welcome 
<?php echo "<b>".$_POST["firstname"]." ".$_POST["lastname"]."</b>"."</h1>";?>
<br>
<table>
<tr>
	<td style="text-align:left; width:200px;"><b>Email</b></td>
	<td style="text-align:left; width:200px;"><?php echo $_POST["email"];?></td>
</tr>
<tr style="background-color:#f2f2f2;">
	<td style="text-align:left;"><b>Phone Number</b></td>
	<td style="text-align:left; width:200px;"><?php echo $_POST["areacode"]." ".$_POST["Phone"];?></td>
</tr>
<tr>
	<td style="text-align:left;"><b>Membership Type</b></td>
	<td style="text-align:left; width:200px;"><?php echo $_POST["membership"]?></td>
</tr>
</table>
<br>

<p><b>Address:</b></p>
<p><?php echo $_POST["street"]."<br>".$_POST["town"]."<br>".$_POST["county"]."<br>".$_POST["postco"];
?></p>

<p><b>Comments</b></p>
<p><?php echo $_POST["comments"];?></p>

<h3>Your information has been passed onto a member of our membership team, They will contact you shortly!</h3>
</div>
</div>



<div  id="footer">
	<!--Subscription form-->
	<div id="esub">
		<h1 >JOIN OUR GET FIT, STAY HEALTHY CULTURE.</h1>
		<h5 >Be kept up to date on upcoming events, promotions and news.</h5>
		<form action="Newsletter.php" method="post" id="fform">
		<div id="fborder">
			<input type="text" name="mail" size="60px" id="ftb" value="Enter your email address">
			<input id="fbut" type="submit" value="Sign me up!">
		</div>
		</form>
	</div>
	<!--Social Networks-->
	<br><br><br><br>
	<div id="socico">
		<a href="#" id="fb" ><img src="icons/soc/fb.png"></a>
		<a href="#" id="gp" ><img src="icons/soc/g+.png"></a>
		<a href="#" id="in" ><img src="icons/soc/in.png"></a>
		<a href="#" id="tw" ><img src="icons/soc/tw.png"></a>
		<a href="#" id="li" ><img src="icons/soc/li.png"></a>
		
	</div>
	<!--Links-->
	<br>
	<div id="fr1">
		<a href="Homepage.html">Home </a>
		<a href="Events.html">Events</a>
		<a href="Community.html">Community</a>
		<a href="Sports.html">Sports</a>
	<br><br>
	<div id="fr2">
		<a href="Contact.html">Contact Us</a>
		<a href="About">About</a>
		<a href="FAQ.html">FAQ</a>
		<a href="Sitemap.html">Sitemap</a>
	</div>
	<!--Copyright banner-->
	<div id="copyban">
		<br>
		<p id="cbp">&copy Made up copyright | ALL RIGHTS RESERVED</p>
	</div>

</div>
</html>