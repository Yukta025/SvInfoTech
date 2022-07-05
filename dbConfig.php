<?php 
$conn = new PDO('mysql:host=localhost; dbname=svinfotech','root', '');
if(!$conn){
    die("Error: Failed to connect to database!");
} 
?>