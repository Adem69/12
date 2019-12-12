<<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="project";

$con = mysqli_connect($host,$user,$password,$db);
$username = $_POST['user'];
$password = $_POST['pass'];


$username =stripcslashes($username);
$password =stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password =mysqli_real_escape_string($password);



mysql_select_db("login");

$result = mysql_query("select from users where usename = '$username' and password = '$password'") or die ("Failed to query database". mysql_error());
$row=mysql_fetch_array($result);
if ($row ['username'] == $username && $row ['password'] == $password  ) { 

	echo "login success !!! Welcome " .$row ['username'];} else {

	echo "Failed to login ";
}













 ?>