<?php  
 $connect = mysqli_connect("localhost", "root", "", "userdb");  
 $query ="Select ussername,surname,email,address,salary from user ORDER BY salary";  
 $data= mysqli_query($connect, $query); 
 // $row = mysqli_fetch_array($data); 
 // echo json_encode($row);
 $json = mysqli_fetch_all ($data, MYSQLI_ASSOC);
echo json_encode($json );
 // while($row = mysqli_fetch_array($result))  
 //  {  
 //   echo '  
 //      <tr>  
 //        <td>'.$row["ussername"].'</td>  
 //        <td>'.$row["surname"].'</td>  
 //        <td>'.$row["email"].'</td>  
 //        <td>'.$row["address"].'</td>  
 //        <td>'.$row["salary"].'</td>  
 //      </tr>  
 //    ';  
 //  }  
 ?> 