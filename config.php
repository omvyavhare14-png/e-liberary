<?php
$conn = mysqli_connect("localhost", "root", "", "e_library");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>