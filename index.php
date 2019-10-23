<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{
		font-family: sans-serif;
	}

	.head h1{
		font-family: sans-serif;
		font-weight: bold;


	}
	.highlight{
		color:#C71585;
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
	* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}



/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 250px;
  left: 300px;
  width: 100%;
  text-align: center;

}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
 
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.about{
  background-color: #ECE9EB;
  padding: 10px;
  padding-left: 20px;
}
.about h2{
  color:#C71585;;
}
#main-footer{
  background: #333;
  color:#fff;
  text-align: center;
  padding:20px;
  
}
</style>
<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a class="active" href="index.php">Home</a>
  
  <a href="contactus.php">Contact Us</a>
  <a  href="login.php">Login</a>
  
</div>

</head>
<body>
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="h1.jpg" style="width:100%">
    <div class="text">“A room without books is like a body without a soul.”
 </div>

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="h2.jpg" style=" width: 100%">
    <div class="text">“There is no friend as loyal as a book.”</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="h3.jpg" style="width:100%">
    <div class="text">“Books are a uniquely portable magic.”</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<div class="about">
<h2>About BookTique</h2>
<p>BookTique is an online book borrowing system. It is specially made for students from the engineering field.
  You first have to make an account on our website.</p>
  <p>After registering with us, you get an access to all the books that can be borrowed by you depending on your branch and semester that you are currently studying in.</p>
  <p>You can borrow books by entering the appropriate ISBN code of the book which you wish to borrow.<br>
  </p>
  <p>You will be able to view the list and details of the books that are currently with you. you can return them by entering their ISBn codes. You have to return within 8 months or the administrator may charge fine</p>

</div>
</body>
<footer id="main-footer">
    <p>Copyright &copy; 2019 BookTique.com</p>
  </footer>
</html>