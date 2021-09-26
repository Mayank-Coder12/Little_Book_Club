<?php 
$connection = mysqli_connect('localhost','root','','littlebookclub');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];


$check_data = mysqli_query($connection, "SELECT * FROM userdetails WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_num_rows($check_data);

if($check > 0){
  echo "Email already exist";
  }

  else{
    $input = mysqli_query($connection, "INSERT INTO userdetails(id,firstname,lastname,birthday,phoneoremail,password)VALUE('$id','$firstname','$lastname','$birthday','$phoneoremail','$password')");
    if($input){
    header("Location:http://localhost/bookstoreCapstone/mainpage.html");
    }else{
    echo "Error";
    }
    }
?>  