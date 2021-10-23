<?php
    
    session_start();
    $message=filter_input(INPUT_POST, 'message');
	$connect=mysqli_connect('localhost','root','','userdb');
	$query="Select ussername from user where id = ". $_SESSION['id'] ;
	$user_id=$_SESSION['id'];
	$data = mysqli_query($connect,$query);
	$row=mysqli_fetch_array($data);
    
	$query2= "INSERT INTO chat (user_id, ussername, message,`time`)
    VALUES ('$user_id','$row[0]','$message',now() )";

    // echo $query2;die;
    
    $data2 = mysqli_query($connect,$query2);
   if($data){
 	echo "<script type='text/javascript'>
  	window.location.href='kryesore.html';
  	</script>";
 }else{
 	echo "<script type='text/javascript'>
  	window.location.href='kryesore.html';
  	</script>";
 }
        
?>