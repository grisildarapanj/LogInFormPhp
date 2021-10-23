<?php
	$connect=mysqli_connect('localhost','root','','userdb');
	$query="SELECT ussername,message from chat ";

	 $data=mysqli_query($connect,$query);
     $row = mysqli_fetch_all ($data, MYSQLI_ASSOC);
      // echo json_encode($row);
      
      	echo json_encode($row);
      
?>