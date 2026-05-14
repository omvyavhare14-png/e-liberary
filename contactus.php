<?php
// DATABASE CONNECTION

$host = "localhost";
$user = "root";
$password = "";
$database = "e_library";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$success = "";
$error = "";

// FORM SUBMIT

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // CHECK EMPTY

    if(!empty($name) && !empty($email) && !empty($message)){

        $sql = "INSERT INTO contact_messages(name,email,message)
                VALUES('$name','$email','$message')";

        if(mysqli_query($conn, $sql)){
            $success = "Message sent successfully!";
        } else {
            $error = "Database Error!";
        }

    } else {
        $error = "All fields are required!";
    }
}
?>
<style>
        body {
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            font-family: Arial, sans-serif;
            color: white;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }

        .category-card {
            background: white;
            color: black;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-10px);
            background: #f8f9fa;
        }

        .category-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
        
        .custom-navbar {
            backdrop-filter: blur(10px);
            background: rgba(0,0,0,0.6);
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        .nav-link {
            color: #fff !important;
            margin: 0 10px;
            position: relative;
            transition: 0.3s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            background: #ffd166;
            left: 0;
            bottom: 0;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active-page {
            color: #ffd166 !important;
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
        }
    </style>
<!DOCTYPE html>

<?php  include('nav.php') ?>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact Us - Learn For Grow</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(to right,#74ebd5,#ACB6E5);
    font-family: 'Segoe UI', sans-serif;
}
/* Alert */

.alert{
    border-radius: 15px;
}

</style>

</head>

<body>

<div class="container mt-5">

    <h2 class="text-center text-white mb-4">
        📞 Contact Us
    </h2>

    <div class="row g-4">

        <!-- CONTACT FORM -->

        <div class="col-md-6">

            <div class="contact-card">

                <?php if($success){ ?>
                    <div class="alert alert-success">
                        <?php echo $success; ?>
                    </div>
                <?php } ?>

                <?php if($error){ ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="POST">

                    <input type="text"
                           name="name"
                           class="form-control mb-3"
                           placeholder="Enter Your Name"
                           required>

                    <input type="email"
                           name="email"
                           class="form-control mb-3"
                           placeholder="Enter Your Email"
                           required>

                    <textarea name="message"
                              class="form-control mb-3"
                              rows="5"
                              placeholder="Enter Your Message"
                              required></textarea>

                    <button type="submit"
                            name="send"
                            class="btn btn-primary w-100 btn-custom">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

        <!-- CONTACT INFO -->

        <div class="col-md-6">

            <div class="info-box text-dark">

                <h3>Get In Touch</h3>

                <p>
                    We’d love to hear from you.
                    Send us your questions or feedback.
                </p>

                <hr>

                <p>
                    <i class="bi bi-geo-alt"></i>
                    Maharashtra, India
                </p>

                <p>
                    <i class="bi bi-envelope"></i>
                    support@learnforgrow.com
                </p>

                <p>
                    <i class="bi bi-telephone"></i>
                    +91 98765 43210
                </p>

                <hr>

                <h5>Follow Us</h5>

                <i class="bi bi-facebook fs-4 me-2"></i>
                <i class="bi bi-instagram fs-4 me-2"></i>
                <i class="bi bi-twitter fs-4"></i>

            </div>

        </div>

    </div>

</div>

<!-- FOOTER -->

<footer class="text-center text-white mt-5 p-3" style="background:#111;">

    © 2026 Learn For Grow

</footer>

</body>
</html>