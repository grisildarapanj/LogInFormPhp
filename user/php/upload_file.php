<?php
session_start();

	$connect=mysqli_connect('localhost','root','','userdb');
    $query="Select photo from user where id = ".$_SESSION["id"];
    $data=mysqli_query($connect,$query);
    $row=mysqli_fetch_array($data);
    echo $row[0];
?>