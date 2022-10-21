<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $number = $_POST['number'];

  $conn = new mysqli('localhost','root','','project');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into registraion(firstname,lastname,gender,age,number)values(?,?,?,?,?)");
    $stmt->bind_param?("sssii",$firstname,$lastname,$gender,$age,$number);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
  }
?>
//url for sql="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=login&table=login%20info";
  // 