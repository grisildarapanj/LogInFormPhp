<?php
if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../../uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $password=$_POST['password'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $role=$_POST['role'];
    if($role=='worker'){
    $role='2';
    }
    else if($role=='admin'){
    $role='1';
    }
    //include database configuration file
    // include 'dbConfig.php';
    $db=mysqli_connect('localhost','root','','userdb');
    //insert form data in the database
  $query=("INSERT user (ussername,surname,password,email,address,photo,role,salary) VALUES ('".$name."','".$surname."','".$password."','".$email."','".$address."','".$uploadedFile."','".$role."','".$salary."')");    
  $data = mysqli_query($db,$query);
    echo $data?'ok':'err';
}