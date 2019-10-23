<?php 
require ('db.php');
session_start();
$name2=$_SESSION['name'];

	$query1= "SELECT * FROM students";
	$result1=  mysqli_query($conn, $query1);
	$students=mysqli_fetch_all($result1, MYSQLI_ASSOC);


	$query2= "SELECT * FROM books";
	$result2=  mysqli_query($conn, $query2);
	$books=mysqli_fetch_all($result2, MYSQLI_ASSOC);

	$query3= "SELECT * FROM swap";
	$result3=  mysqli_query($conn, $query3);
	$swaps=mysqli_fetch_all($result3, MYSQLI_ASSOC);
	//var_dump($books);

	if(isset($_POST["insert"])){
	$bisbn=mysqli_real_escape_string($conn,$_POST['bisbn']);
	$bookname=mysqli_real_escape_string($conn,$_POST['bookname']);
	
	$author=mysqli_real_escape_string($conn,$_POST['author']);
	
	$bbranch=mysqli_real_escape_string($conn,$_POST['bbranch']);
	
	$bsem=mysqli_real_escape_string($conn,$_POST['bsem']);
	
	
	$query4= "INSERT INTO books VALUES ('$bisbn','$bookname','$author','$bbranch','$bsem')";
	mysqli_query($conn,$query4);
}

	mysqli_free_result($result1);
	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_close($conn);
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

  background-color: black	;
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

.student-table{
	background-image: url('admin.jpg');
	background-size: cover;
}
.books-table{
	background-image: url('admin.jpg') ;
	background-size: cover;
}
.swap-table{
	background-image: url('admin.jpg');
	background-size: cover;
}
.insert{

  border-radius: 5px;
  background-color: #FFE5B4;
  padding: 20px;
  max-width: 100%;
  text-align: center;
 }
button[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
button[type=submit]:hover {
  background-color: grey;
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

	<div class="normal">	<h1><?php echo 'Welcome '.$name2. '!';?></h1></div>
<h2>Details of Students on BookTique:</h2>
<div class="student-table">
<table>
			<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>Phone No.</th>
			<th>Address</th>
			<th>Branch</th>
			<th>Semester</th>
			
		</tr>
		
		<?php foreach($students as $student ): ?>
			<tr>
			<div class="well">
				<td><?php echo $student['id'];?></td>
				<td><?php echo $student['name'];?></td>
				<td><?php echo $student['phone'];?></td>
				<td><?php echo $student['address'];?></td>
				<td><?php echo $student['branch'];?></td>
				<td><?php echo $student['sem'];?></td>
				
				
			</div>
		</tr>
		<?php endforeach;?>
	
</table>
</div>

<h2>Details of Books:</h2>
<div class="books-table">
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
</div>
<div class="insert">
<h2>Insert a new Book:</h2>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> BISBN Code:  </label>
		 <input type="text" name="bisbn" required><br><br>
		<label>	Book Name: </label>	
		 <input type="text" name="bookname" required><br><br>
		 
		 <label> Author: </label>
		 <input type="text" name="author" required><br><br>
		 <label> Branch: </label>
		 <input type="text" name="bbranch" required><br><br>
		  <label> Semester: </label>
		 <input type="text" name="bsem" required><br><br>
		  
		 <button type= "submit" name="insert">Insert</button>
	</form>
</div>


<h2>Details of books being lent:</h2>
<div class="swap-table">
<table>
			<tr>
			<th>Book ISBN</th>
			<th>Book NAME</th>
			<th>Author</th>
			<th>Book Branch</th>
			<th>Book Semester</th>
			<th>Student ID</th>
		</tr>
		
		<?php foreach($swaps as $swap ): ?>
			<tr>
			<div class="well">
				<td><?php echo $swap['isbn'];?></td>
				<td><?php echo $swap['bname'];?></td>
				<td><?php echo $swap['bauthor'];?></td>
				<td><?php echo $swap['branch'];?></td>
				<td><?php echo $swap['sem'];?></td>
				<td><?php echo $swap['sid'];?></td>
				
				
			</div>
		</tr>
		<?php endforeach;?>
	
</table>
</div>




	</body>
	</html>