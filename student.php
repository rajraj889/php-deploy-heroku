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
input[type=email],input[type=password], select, textarea {
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
  float: center;
}

/* When moving the mouse over the submit button, add a darker green color */
button[type=submit]:hover {
  background-color: #C71585;

}

/* Add a background color and some padding around the form */
.loginbox {
  border-radius: 5px;
  background-color: #FFF0F5;
  padding: 20px;
  max-width: 350px;
  position: absolute;
  top:50%;
  left:50%;
  margin-right: -50%;
    transform: translate(-50%, -50%) ;
    margin-top: 100px;


}
.loginbox h1{
	text-align: center;

}
body{
	background-image: url('student.jpg');
	background-size: cover;
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
	<div class="loginbox">
		<h1>Student</h1>
		<form method="POST" action="">
		<label> Username: </label>
		 <input type="email" name="user" required><br><br>
		 <label> Password: </label>
		 <input type="password" name="pass" required><br><br>
		 <button type= "submit" name="login">Login</button>
		</form>
	</div>

</body>

</html>


<?php
require ('db.php');
if(isset($_POST['login'])){
	$user= mysqli_real_escape_string($conn,$_POST['user']);
	$pass= mysqli_real_escape_string($conn,$_POST['pass']);

$query="SELECT * FROM students WHERE email='$user' AND password='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row['email']==$user && $row['password']==$pass)
{
	//echo 'successful';
 $query0="SELECT id from students where email='$user'";
  $result0=mysqli_query($conn,$query0);
$row0 = mysqli_fetch_row($result0);
$id1=$row0[0];

  $query1="SELECT name from students where email='$user'";
  $result1=mysqli_query($conn,$query1);
$row1 = mysqli_fetch_row($result1);
$name1=$row1[0];

$query2="SELECT branch from students where email='$user'";
  $result2=mysqli_query($conn,$query2);
$row2 = mysqli_fetch_row($result2);
$branch1=$row2[0];

$query3="SELECT sem from students where email='$user'";
  $result3=mysqli_query($conn,$query3);
$row3 = mysqli_fetch_row($result3);
$sem1=$row3[0];
 session_start();
$_SESSION['name']=$name1;
$_SESSION['branch']=$branch1;
$_SESSION['id']=$id1;
$_SESSION['sem']=$sem1;



echo'<script> window.location="studentpage.php"; </script> ';
}
else{
	echo'try again';
  
}
}
?>


