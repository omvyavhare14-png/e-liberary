<?php
include "config.php";

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // check email exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Email already registered');</script>";
    } else {
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Signup successful'); window.location='login.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up - Learn For Grow</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #74ebd5, #ACB6E5);
    font-family: 'Segoe UI', sans-serif;
}
   .custom-navbar {
            backdrop-filter: blur(10px);
            background: rgba(0,0,0,0.6);
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}
.btn-login {
    background: #ffd166 !important;
    border: none !important;
    color: #333 !important;
    border-radius: 20px;
    padding: 5px 15px;
}

.btn-signup {
    background: #06d6a0 !important;
    border: none !important;
    color: white !important;
    border-radius: 20px;
    padding: 5px 15px;
}
    
    
    
    
    
    
    
    
    
    2);
}
</style>
</head>

<body>

<!-- NAVBAR -->

<?php  include('nav.php') ?>
<!-- SIGNUP -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="col-md-5">
        <div class="signup-card">

            <h3 class="text-center mb-4">✨ Create Account</h3>

            <!-- ✅ SINGLE WORKING FORM -->
            <form method="POST">

                <!-- Name -->
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>

                <!-- Email -->
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>

                <!-- Password -->
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <!-- Button -->
                <button type="submit" name="signup" class="btn btn-primary w-100">
                    Sign Up
                </button>

                <!-- Login -->
                <p class="text-center mt-3">
                    Already have an account? 
                    <a href="login.php">Login</a>
                </p>

            </form>

        </div>
    </div>
</div>

</body>
</html>