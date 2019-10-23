<?php

$conn=mysqli_connect('localhost','root','','booktique');
if(mysqli_connect_errno()){
	echo 'connection failed to MySql'.mysqli_connect_errno();
}
?>