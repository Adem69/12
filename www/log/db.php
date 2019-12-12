<?php   
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "ats_db";  
 $message = "";  
 try  
 {  
      $connection = new PDO("mysql:host=$host; dbname=$database", $username, $password); 
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 }
 catch(PDOException $e)  
 {  
 }  
 $connection->query("SET NAMES UTF8");
 return $connection;
 ?>  




