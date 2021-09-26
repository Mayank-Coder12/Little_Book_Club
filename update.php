<?php
  $connection = mysqli_connect('localhost' , 'root' , '' , 'littlebookclub');
  $phoneoremail = $_POST['phoneoremail'];
  $password = $_POST['password'];

  $check = mysqli_query($connection, "UPDATE userdetails SET password = '$password' WHERE phoneoremail = '$phoneoremail'");

  if($check>0){
    echo "Data Updated";
  }
  else{
    echo "Error";
  }
 ?>
