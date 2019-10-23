<?php
require ('config/db.php');
session_start();
$name4=$_SESSION['name3'];
$_SESSION['name5']=$name4;

$id4=$_SESSION['id3'];
$_SESSION['id5']=$id4;

$branch4=$_SESSION['branch3'];
$_SESSION['branch5']=$branch4;

$sem4=$_SESSION['sem3'];
$_SESSION['sem5']=$sem4;

$isbn4=$_SESSION['isbn1'];
$_SESSION['isbn5']=$isbn4;




$query0="SELECT * FROM swap WHERE isbn='$isbn4' AND sid='$id4'";
$result0=mysqli_query($conn,$query0);
if(mysqli_num_rows($result0) != 0)
{


$query="SELECT * FROM swap WHERE isbn='$isbn4' AND sid='$id4'";
$result=mysqli_query($conn,$query);
$roww=mysqli_fetch_row($result);

	$query1="INSERT INTO books VALUES('".$roww[0]."','".$roww[1]."','".$roww[2]."','".$roww[3]."','".$roww[4]."')";
	mysqli_query($conn, $query1);

	$query2="DELETE FROM swap where isbn='$isbn4'";
	mysqli_query($conn, $query2);


	echo '<div class="show"><h2>You returned the book with ISBN code: </h2>'.$isbn4. '<h2>Thank you for using BookTique!</h2></div>';
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		.show{
			text-align: center;
		}

		button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

button:hover {
  background-color: black; /* Green */
  color: white;
}
	</style>
</head>
<body>
	<div class="show">
	<button onclick="window.location.href = 'studentpage.php';">Finish</button>
</div>

</body>
</html>