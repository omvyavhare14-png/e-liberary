<!DOCTYPE html>
<html>
<head>
    <title>Book Categories - Learn For Grow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
            background: #ffd166;
            border-radius: 20px;
            padding: 5px 15px;
        }

        .btn-signup {
            background: #06d6a0;
            color: white;
            border-radius: 20px;
            padding: 5px 15px;
        }
    </style>
</head>

<body>

<?php include('nav.php') ?>

<h2>📚 Explore Book Categories</h2>

<div class="container mt-4">
    <div class="row g-4">

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-primary">
                    <i class="bi bi-emoji-laughing"></i>
                </div>
                <h5><b>Comedy</b></h5>
                <p>Light and funny books</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-danger">
                    <i class="bi bi-emoji-dizzy"></i>
                </div>
                <h5><b>Horror</b></h5>
                <p>Scary and thrilling stories</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-success">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <h5><b>Motivational</b></h5>
                <p>Inspiring life lessons</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-warning">
                    <i class="bi bi-heart"></i>
                </div>
                <h5><b>Romantic</b></h5>
                <p>Love and relationships</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-info">
                    <i class="bi bi-globe"></i>
                </div>
                <h5><b>Science Fiction</b></h5>
                <p>Future and space stories</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-secondary">
                    <i class="bi bi-bank"></i>
                </div>
                <h5><b>History</b></h5>
                <p>Past events and civilizations</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-dark">
                    <i class="bi bi-book"></i>
                </div>
                <h5><b>Education</b></h5>
                <p>Learning and academic books</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="category-card" onclick="checkLogin()">
                <div class="category-icon text-primary">
                    <i class="bi bi-briefcase"></i>
                </div>
                <h5><b>Business</b></h5>
                <p>Entrepreneurship and finance</p>
            </div>
        </div>

    </div>
</div>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function checkLogin() {
    Swal.fire({
        icon: 'warning',
        title: 'Please Login First',
        text: 'You need to login to access this category 📚',
        confirmButtonColor: '#06d6a0',
        confirmButtonText: 'Go to Login'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'login.php';
        }
    });
}
</script>

</body>
</html>