
	<?php 
require ('db.php');
session_start();
$name2=$_SESSION['name'];
$_SESSION['name3']=$name2;

$id2=$_SESSION['id'];
$_SESSION['id3']=$id2;

$branch2=$_SESSION['branch'];
$_SESSION['branch3']=$branch2;

$sem2=$_SESSION['sem'];
$_SESSION['sem3']=$sem2;

	
	$query= "SELECT * FROM books where bbranch= '$branch2' AND bsem= $sem2";
	/*where bsem=$sem2 AND bbranch= '$branch2';*/
	
	$result=  mysqli_query($conn, $query);
	$books=mysqli_fetch_all($result, MYSQLI_ASSOC); // changes
	//var_dump($books);
	$query1= "SELECT * FROM swap where sid= $id2";
	$result1=  mysqli_query($conn, $query1);
	$books1=mysqli_fetch_all($result1, MYSQLI_ASSOC);

	// mysqli_free_result($result);
	// mysqli_free_result($result1);
	

	




	if(isset($_POST['borrow'])){
	$bisbn= mysqli_real_escape_string($conn,$_POST['bisbn']);
/*$query="DELETE FROM books WHERE bisbn='$bisbn'";
mysqli_query($conn,$query);*/
$query2="SELECT * FROM books WHERE bisbn='$bisbn'";
$result2=mysqli_query($conn,$query2);
if(mysqli_num_rows($result2) != 0)
{
$query3= "SELECT * FROM books where bisbn='$bisbn'";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);

 
	$query4="INSERT INTO swap(isbn,bname,bauthor,branch,sem,sid) VALUES ('".$row3[0]."','".$row3[1]."','".$row3[2]."','".$row3[3]."','".$row3[4]."','".$id2."')";
	mysqli_query($conn, $query4);
	$query5="DELETE FROM books WHERE bisbn='$bisbn'";
	mysqli_query($conn, $query5);
	echo '<h4>Requested</h4>';
}

}



if(isset($_POST['return'])){
	$isbn= mysqli_real_escape_string($conn,$_POST['isbn']);

$query20="SELECT * FROM swap WHERE isbn='$isbn' AND sid='$id2'";
$result20=mysqli_query($conn,$query20);
if(mysqli_num_rows($result20) != 0)
{


$query21="SELECT * FROM swap WHERE isbn='$isbn' AND sid='$id2'";
$result21=mysqli_query($conn,$query21);
$roww=mysqli_fetch_row($result21);

	$query11="INSERT INTO books VALUES('".$roww[0]."','".$roww[1]."','".$roww[2]."','".$roww[3]."','".$roww[4]."')";
	mysqli_query($conn, $query11);

	$query22="DELETE FROM swap where isbn='$isbn'";
	mysqli_query($conn, $query22);
}
else{
	echo'something is wrong';
}

}



	
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>BookTique</title>
		
		<style type="text/css">
		 .normal h1{
			text-align: center;
			color: black;
		}

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
   
    .well{
    	margin-left: 20px;
    	float: center;
    }
    th{
    	

   text-align: center;

  background-color:black;
  color: white;


    }
    td{
    	text-align: center;
    }
    table, th, td {
  
  border-bottom: 1px solid #ddd;

  float: center;
  padding: 10px;
}
table {
  width: 100%;
}

th {
  height: 50px;
}

button[type=submit] {
  background-color: black;
  color: white;
  
  border: none;
  border-radius: 4px;
  padding-left: 50px;
   padding-right: 50px;
   padding-top: 20px;
   padding-bottom: 20px;
  

}

/* When moving the mouse over the submit button, add a darker green color */
button[type=submit]:hover {
  background-color: grey;
}
.buttons{
	width: 50%;
	margin-left: 520px;
}
.heading h3{
	text-align: center;
}
body{
	background-image: url('new1.jpg');
	background-size: cover;
}
 a{
	font-weight: bold;
	color:black;
}
a:hover{
	font-weight: bold;
	color:blue;
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
</head>
<body>


<div class="normal">	<h1><?php echo 'Welcome '.$name2. '!';?></h1></div>

<h2>Available Books:</h2>
<table>
			<tr>
			<th>ISBN code</th>
			<th>Book Name</th>
			<th>Author</th>
			<th>Branch</th>
			<th>Semester</th>
		</tr>

		<?php foreach($books as $book ): ?>
			<tr>
			<div class="well">


				<td><?php echo $book['bisbn'];?></td>
				<td><?php echo $book['bookname'];?></td>
				<td><?php echo $book['author'];?></td>
				<td><?php echo $book['bbranch'];?></td>
				<td><?php echo $book['bsem'];?></td>
				
			</div>
		</tr>
		<?php endforeach;?>
	</table>
		
		


<h2>List of books currently with you: </h2>
<table>
	<tr>
			<th>ISBN code</th>
			<th>Book Name</th>
			<th>Author</th>
			<th>Branch</th>
			<th>Semester</th>
		</tr>
<?php foreach($books1 as $book1 ): ?>
			<tr>
			<div class="well">

				<td><?php echo $book1['isbn'];?></td>
				
				<td><?php echo $book1['bname'];?></td>
				<td><?php echo $book1['bauthor'];?></td>
				<td><?php echo $book1['branch'];?></td>
				<td><?php echo $book1['sem'];?></td>
				
				
			</div>
		</tr>
		<?php endforeach;?>
	</table>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> Enter ISBN code of the book that you want to borrow: </label>
		 <input type="text" name="bisbn" ><br><br>
		 <button type= "submit" name="borrow">Borrow</button><br><br>
		<label>	Enter ISBN code of the book that you want to return:  </label>	
		 <input type="text" name="isbn" ><br><br>
		 <button type= "submit" name="return">Return</button>




</body>
</html>







