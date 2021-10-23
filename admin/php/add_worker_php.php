<?php
session_start();
$role=filter_input(INPUT_POST, 'role');
$name=filter_input(INPUT_POST, 'name');
$surname=filter_input(INPUT_POST, 'surname');
$address=filter_input(INPUT_POST, 'address');
$photo=filter_input(INPUT_POST, 'photo');
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
$salary=filter_input(INPUT_POST, 'salary');
if($role=='worker'){
	$role='2';
}
else if($role=='admin'){
	$role='1';
}
$connect=mysqli_connect('localhost','root','','userdb');

$query = "INSERT INTO user (ussername, surname, email, address, photo, role, password, salary)
VALUES ('$name', '$surname', '$email', '$address', '$photo','$role', '$password', '$salary')";
 
 // echo $query; die;
 $data = mysqli_query($connect,$query);
   // echo $data; die;
 if($data){
 	echo "<script type='text/javascript'>
  	alert('Your changes updated!');
  	window.location.href='../html/add_worker.html';
  	</script>";
 }else{
 	echo "<script type='text/javascript'>
  	alert('Your changes are not updated!');
  	window.location.href='../html/add_worker.html';
  	</script>";
 }
 
?>