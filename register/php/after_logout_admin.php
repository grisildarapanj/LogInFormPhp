<?php
session_start();
$connect=mysqli_connect('localhost','root','','userdb');
 if(!isset($_SESSION['id'])){
 	echo 'err';
} 
?>