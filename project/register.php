<?php
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','','login');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into registraion(email,paasword)values(?,?,)");
    $stmt->bind_param?("ss",$email,$password);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
  }

?>