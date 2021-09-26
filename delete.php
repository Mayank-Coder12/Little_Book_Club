<?php
$conection = mysqli_connect('localhost', 'root', '', 'littlebookclub');
$phoneoremail = $_POST['phoneoremail'];

$check = mysqli_query($conection, "DELETE FROM userdetails WHERE phoneoremail = '$phoneoremail'");


if ($check > 0) {
  header("Location:http://localhost/bookstoreCapstone/index.html");
}
