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
	background-image: url('borrow.jpg');
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
	<h2>Please enter the ISBN code of the book that you want to borrow</h2>
	<h2>Refer to the 'Available Books' table on the previous page for ISBN codes</h2>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> Book ISBN Code: </label>
		<input type="text" name="bisbn" ><br><br>
		 <button type= "submit" name="send">Send Request</button>
		</form>
	</div>

</body>
</html>

<?php

require ('config/db.php');
session_start();
$name4=$_SESSION['name3'];
$query0="SELECT id FROM students WHERE name='$name4'";
$result0=  mysqli_query($conn, $query0);
$row0 = mysqli_fetch_row($result0);

if(isset($_POST['send'])){
	$bisbn= mysqli_real_escape_string($conn,$_POST['bisbn']);
/*$query="DELETE FROM books WHERE bisbn='$bisbn'";
mysqli_query($conn,$query);*/
$query9="SELECT * FROM books WHERE bisbn='$bisbn'";
$result9=mysqli_query($conn,$query9);
if(mysqli_num_rows($result9) != 0)
{
$query1= "SELECT * FROM books where bisbn='$bisbn'";
	$result=  mysqli_query($conn, $query1);

	$row = mysqli_fetch_row($result);

 
	$query2="INSERT INTO swap(isbn,bname,bauthor,branch,sem,sid) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row0[0]."')";
	mysqli_query($conn, $query2);
	$query3="DELETE FROM books WHERE bisbn='$bisbn'";
	mysqli_query($conn, $query3);
	echo '<h4>Requested</h4>';
}
else{
	echo'<h4>no such book</h4>';
}
}



?>