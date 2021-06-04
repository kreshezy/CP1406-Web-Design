<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Apple Cake Slice</title>
		<link rel="stylesheet" href="css/css.css" />
		<script src="js/script.js"></script>  		
	</head>
	<body>
		<div class="center">
			<div class="top">
				<div class="top_img">
					<img src="img/1.png" width="80px" />
				</div>
				<div class="top_text">
					<span>cake</span>
				</div>
			</div>
			
			<div class="top1">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="products.html">Products</a></li>
					<li><a href="cake.html">Cake</a></li>
					<li><a href="contact.html">Contacts</a></li>
					<li><a href="message.html">Message</a></li>
				</ul>
			</div>
			
			<div class="top1d">
				<div class="top1d_left">
					<div class="top1d_left_top">
						<div class="a"></div>
						<span>Recommended cake</span>
					</div>
					<ul>
						<li><a href="cake1.html">Donuts</a></li>
						<li><a href="cake2.html">Vanilla Slice</a></li>
						<li><a href="cake3.html">Randy Tart</a></li>
						<li><a href="cake4.html">Custard Tart</a></li>
						<li><a href="cake5.html">Raspberry cheesecake</a></li>
						<li><a href="cake6.html">Apple Cake Slice</a></li>
					</ul>
				</div>
				
				
				<div class="top1d_right">
					<div class="top1d_right_top">
						<span>Current location:<a href="index.html">HOME</a>>><a href="products.html">products</a></span>
					</div>

					
					

<div class="orderphp">	

<h2>Welcome to leave a message</h2>
 <p></p>
Your Name: <?php echo $_POST["xingming"]; ?><br>
Your phone: <?php echo $_POST["shouji"]; ?><br>
Your address: <?php echo $_POST["dizhi"]; ?><br>
Your Detailed information: <?php echo $_POST["myinformation"]; ?><br>			
</div>

				</div>	
				
			</div>
		</div>
		<div class="footer">
		<span>Cake website. All rights reserved. Contacts: 0455 5555 555, Catering: 0433 3333 333, Address: 123 Prize Lane, Kirwan, QLD </span>
		</div>	
			
		
	</body>
</html>
