<?php
//DB details
// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbName = 'user';

// //Create connection and select DB
// $db = new mysqli($dbHost, $dbUsername, '', $dbName);

// if($db->connect_error){
//     die("Unable to connect database: " . $db->connect_error);
$db=mysqli_connect('localhost','root','','userdb');
if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}
}