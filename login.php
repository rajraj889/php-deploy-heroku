<!DOCTYPE html>
<html>
<head>
	<title>BookTique | Login</title>
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
.login-box{
	border-radius: 5px;
  background-color: #FFF0F5;
  
  padding-right: 20px;
  padding-top: 20px;
  padding-bottom: 30px;
  padding-left: 30px;
  max-width: 350px;
  position: absolute;
  top:50%;
  left:50%;
  margin-right: -50%;
    transform: translate(-50%, -50%) ;
    margin-top: 50px;
    }
    .login-box h2{
    	color:#C71585;
    	font-size: 30px;
      text-align: center;
    }
    .login-box h3{
      color:black;
      font-size: 20px;
      text-align: center;
    }
    .login-box a{
      color:black;
      font-size: 20px;
      text-align: center;
      padding-left: 90px
    }
    .login-box a:hover{
      color:grey;
      
    }
    button[type=submit] {
  background-color: #C71585;
  color: white;
  padding: 20px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 16px;
  
  font-size: 20px;
}

/* When moving the mouse over the submit button, add a darker green color */
button[type=submit]:hover {
  background-color: #FFB6C1;
}
body{
  background-image: url('login.jpg');
  background-size: cover;
}
.signup{


}
</style>
	<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a  href="index.php">Home</a>
 
  <a href="contactus.php">Contact Us</a>
  
  <a class="active" href="login.php">Login</a>
  
</div>


</head>
<body>
	<div class="login-box">
	<h2> Login as </h2>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
	<button type= "submit" name="Student">Student</button>
	<button type= "submit" name="Admin">Admin</button>
</form>
<h3>Don't have an account?</h3>
<a href="signup.php">Sign Up</a>
</div>

</body>
</html>

<?php
if(isset($_POST['Admin'])){
  echo'<script> window.location="admin.php"; </script> ';
}
if(isset($_POST['Student'])){
  echo'<script> window.location="student.php"; </script> ';
}
	?>