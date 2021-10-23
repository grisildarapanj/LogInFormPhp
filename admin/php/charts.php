<?php


$connect=mysqli_connect('localhost','root','','userdb');

$sqlQuery = "SELECT id,ussername,salary FROM user ORDER BY salary DESC";

$result = mysqli_query($connect,$sqlQuery);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }
$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
echo json_encode($json);
?>
