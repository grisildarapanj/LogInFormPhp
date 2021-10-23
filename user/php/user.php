<?php
session_start();
$connect=mysqli_connect('localhost','root','','userdb');
 $query="Select ussername,surname,email,address,photo from user where id = ".$_SESSION["id"];
 $data=mysqli_query($connect,$query);
   $row=mysqli_fetch_array($data);
   // $photo="../../uploads/".$row[4];
   echo json_encode($row);
   // echo nl2br("Name: ".$row[0]."\n \n"."Last name: " . $row[1]."\n \n"."Email: ".$row[2]."\n \n"."Address: ".$row[3]."\n \n"."Photo: ".$photo);

   
  ?>