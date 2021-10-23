<?php
	$connect=mysqli_connect('localhost','root','','userdb');
    // $query = "Select ussername,surname,email,address,role from user WHERE salary=" ."'2000'";
    $query = "Select ussername from user";
    $data = mysqli_query($connect,$query);
    $row=mysqli_fetch_array($data);
    echo json_encode($row); 
?>