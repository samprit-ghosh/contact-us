<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];

  $conn = new mysqli('localhost','root','','samtest');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into registration(name, surname, email, phone, gender)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis",$name, $surname, $email, $phone, $gender);
    $stmt->execute();
    echo "Form has been submitted Successfully....";
    $stmt->close();
    $conn->close();
  }
?>