<!DOCTYPE html>
<html>
<head>
	<title>BookTique | Borrow A Book</title>
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
body{
	background-image: url('return.jpg');
	background-size: cover;
}
.box{
	margin-top: 25px;
	background-color: white;
	width:75%;
	text-align: center;
	position: absolute;
  top:50%;
  left:50%;
  margin-right: -50%;
    transform: translate(-50%, -50%) ;
    padding-bottom: 20px;
    border-radius: 25px;

}
.box label{
font-family: sans-serif;
		font-weight: bold;
		color:#C71585; 
}
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
	<div class="box">
	<h2>Please enter the ISBN code of the book that you want to return</h2>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> Book ISBN Code: </label>
		<input type="text" name="bisbn" ><br><br>
		 <button type= "submit" name="return">Return Book</button>
		</form>
	</div>

</body>
</html>




<?php

require ('config/db.php');
if(isset($_POST['return'])){
	$bisbn= mysqli_real_escape_string($conn,$_POST['bisbn']);
session_start();
$id4=$_SESSION['id3'];
$query0="SELECT * FROM swap WHERE isbn='$bisbn' AND sid='$id4'";
$result0=mysqli_query($conn,$query0);
if(mysqli_num_rows($result0) != 0)
{


$query="SELECT * FROM swap WHERE isbn='$bisbn' AND sid='$id4'";
$result=mysqli_query($conn,$query);
$roww=mysqli_fetch_row($result);

	$query1="INSERT INTO books VALUES('".$roww[0]."','".$roww[1]."','".$roww[2]."','".$roww[3]."','".$roww[4]."')";
	mysqli_query($conn, $query1);

	$query2="DELETE FROM swap where isbn='$bisbn'";
	mysqli_query($conn, $query2);
}
else{
	echo'something is wrong';
}

}
?>


