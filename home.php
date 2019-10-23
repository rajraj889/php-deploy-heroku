<!DOCTYPE html>
<html>
<head>
	<meta charset="utf 8">
	<meta name="viewport" content="width=device-width">
	<title> Booktique| Home</title>
	<style type="text/css">
	*{
		font-family: sans-serif;
	}
	.head h1{
		font-family: sans-serif;
		font-weight: bold;


	}
	.highlight{
		color:#C71585
	}
	.head{
		background-color: #FFF0F5;
		padding: 20px;
		
	}

	.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #FFF0F5;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #C71585;
  color: white;
}
@keyframes slider {

0% {
	left: 0;
}

25% {
	left: 0;
}

33.33% {
	left: -100%;
}

58.33% {
    left: -100%;

}

66.66% {
		left: -200%;

}

91.66% {
	left: -200%;
}

96% {
	left: -300%;
}



/*100%{
	left: -500%;
}*/
}

#slider {
	overflow: hidden;
}

#slider figure img {
	width: 14.28%;
	float: left;
}

#slider figure {
	position: relative;
	width: 700%;
	margin: 0;
	left: 0;
	text-align: left;
	font-size: 0;
	animation: 30s slider infinite; 

}

</style>

</head>
<body>
	<header>
		<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact Us</a>
 
  <a href="login.php">Login</a>
  
</div>

	</header>
	<div id="slider" >
<figure>
<img src="h1.jpg">	
<img src="h2.jpg">
<img src="h3.jpg">

</figure>	

</div>

</body>
<footer id="main-footer">
		<p>Copyright &copy; 2019 BookTique.com</p>
	</footer>
</html>
