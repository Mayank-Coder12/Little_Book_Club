<?php
$connection = mysqli_connect('localhost','root','','littlebookclub');

$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($connection, "SELECT * FROM userdetails WHERE phoneoremail = '$phoneoremail' and password = '$password'");
$check = mysqli_num_rows($check_data);


if($check > 0){
  header("Location:http://localhost/bookstoreCapstone/mainpage.html");
}
else{
echo "Error";
}

?>