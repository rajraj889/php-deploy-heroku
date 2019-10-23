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



echo $isbn4;
$query9="SELECT * FROM books WHERE bisbn='$isbn4'";
$result9=mysqli_query($conn,$query9);
if(mysqli_num_rows($result9) != 0)
{
$query1= "SELECT * FROM books where bisbn='$isbn4'";
	$result=  mysqli_query($conn, $query1);

	$row = mysqli_fetch_row($result);

 
	$query2="INSERT INTO swap(isbn,bname,bauthor,branch,sem,sid) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$id4."')";
	mysqli_query($conn, $query2);
	$query3="DELETE FROM books WHERE bisbn='$isbn4'";
	mysqli_query($conn, $query3);


	echo '<div class="show"><h2>You have requested for the book with ISBN code </h2>'.$isbn4. '<h2>Status: Granted</h2></show>';


	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
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
.show{
	text-align: center;
}
	</style>

</head>
<body>

	<button onclick="window.location.href = 'studentpage.php';">Finish</button>

</body>
</html>