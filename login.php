<?php
session_start();
include "config.php";

$message = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Secure query
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        // ⚠️ If using plain password
        if($password == $row['password']){
        // ✅ If hashed password use:
        // if(password_verify($password, $row['password'])){

            $_SESSION['user'] = $row['name'];
            $_SESSION['role'] = $row['role'];

            // Role-based redirect
            if($row['role'] === 'admin'){
                header("Location: upload.php");
            } else {
                header("Location: dashboard.php");
            }
            exit();

        } else {
            $message = "Wrong password!";
        }
    } else {
        $message = "User not registered!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login - Learn For Grow</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background:linear-gradient(to right, #74ebd5, #ACB6E5);
    font-family: 'Segoe UI', sans-serif;
}

.navbar {
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(10px);
}

.login-container {
    min-height: 90vh;
}

.login-card {
    background: #fff;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px);}
    to { opacity: 1; transform: translateY(0);}
}

.title {
    font-weight: 700;
    text-align: center;
    margin-bottom: 25px;
}

.input-group-text {
    background: #f1f1f1;
}

.btn-custom {
    background: #28a745;
    border: none;
    font-weight: 600;
    transition: 0.3s;
}

.btn-custom:hover {
    background: #218838;
    transform: scale(1.02);
}

.alert-custom {
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 15px;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark px-4">
    <span class="navbar-brand">📚 Learn For Grow</span>
    <a href="signup.php" class="btn btn-light btn-sm">Sign Up</a>
</nav>

<!-- LOGIN -->
<div class="container d-flex justify-content-center align-items-center login-container">
    <div class="col-md-4">
        <div class="login-card">

            <h3 class="title">👋 Welcome Back</h3>

            <!-- Alert -->
            <?php if($message): ?>
                <div class="alert alert-danger alert-custom">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <form method="POST">

                <!-- Email -->
                <div class="mb-3 input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>

                <!-- Password -->
                <div class="mb-3 input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <!-- Button -->
                <button type="submit" name="login" class="btn btn-custom w-100">
                    Login
                </button>

                <!-- Footer -->
                <p class="text-center mt-3">
                    Don't have an account? 
                    <a href="signup.php">Sign Up</a>
                </p>

            </form>

        </div>
    </div>
</div>

</body>
</html>