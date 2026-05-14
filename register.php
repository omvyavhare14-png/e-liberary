<?php
include "db.php";

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password) 
            VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "Registered Successfully";
    } else {
        echo "Error";
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Register</button>
</form>