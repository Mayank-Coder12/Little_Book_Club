<?php 
$connection = mysqli_connect('localhost','root','','littlebookclub');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneoremail = $_POST['phoneoremail'];
$bookname  = $_POST['bookname'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

$check_data = mysqli_query($connection, "SELECT * FROM order_details WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_num_rows($check_data);


if($check > 0){
  echo "Try Again";
  }

  else{
    $input = mysqli_query($connection, "INSERT INTO order_details(id,firstname,lastname,phoneoremail,bookname,quantity,address)VALUE('$id','$firstname','$lastname','$phoneoremail','$bookname','$quantity','$address')");
     if($input){
   echo "Thanks For Ordering";
    }
    else{
    echo "Error";
    }
    }
?>