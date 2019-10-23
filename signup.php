<!DOCTYPE html>
<html>
<head>
	<title>Booktique | Sign Up</title>
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
input[type=text],input[type=email],input[type=password], select, textarea {
   /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
button[type=submit] {
  background-color: #C71585;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
button[type=submit]:hover {
  background-color: #C71585;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #FFF0F5;
  padding: 20px;
  max-width: 350px;
  position: absolute;
  top:50%;
  left:50%;
  margin-right: -50%;
    transform: translate(-50%, -50%) ;
    margin-top: 320px;


}
.container h1{
	color:#C71585;
}
body{
	background-image: url('lib.png') ;
}
.message h3{
	color:white;
}

</style>

<div class="head">
			<h1><span class="highlight">Book</span>Tique</h1>
		</div>
		<div class="topnav">
  <a  href="index.php">Home</a>

  <a href="contactus.php">Contact Us</a>

  <a href="login.php">Login</a>
 
</div>

</head>
<body>
	<div class="container">
		<h1>Create an Account</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> Student ID: </label>
		 <input type="text" name="stid" required><br><br>
		<label>	Name: </label>	
		 <input type="text" name="name" required><br><br>
		 
		 <label> Phone Number: </label>
		 <input type="text" name="phone" required><br><br>
		 <label> Address: </label>
		 <input type="text" name="address" required><br><br>
		  <label> Branch: </label>
		 <input type="text" name="branch" required><br><br>
		  <label> Semester: </label>
		 <input type="text" name="sem" required><br><br>
		  <label> Email: </label>
		 <input type="Email" name="email" required><br><br>
		  <label> Password: </label>
		 <input type="Password" name="password" required><br><br>
		 <button type= "submit" name="signup">Sign Up</button>
	</form>
</div>

</body>
</html>

<?php

require ('config/db.php');


if(isset($_POST['signup'])){
	$id=mysqli_real_escape_string($conn,$_POST['stid']);
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	
	$branch=mysqli_real_escape_string($conn,$_POST['branch']);
	
	$sem=mysqli_real_escape_string($conn,$_POST['sem']);
	
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$query= "INSERT INTO students VALUES ('$id','$name','$phone','$address','$branch','$sem','$email','$password')";

	if(!mysqli_query($conn,$query)){
		echo'not inserted';
	}
	else{
		echo'<div class="message">
		<h3>inserted</h3>
		</div>';
		
	}
	

}
?>