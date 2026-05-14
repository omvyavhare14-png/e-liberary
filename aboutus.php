<!DOCTYPE html>
<html>
<head>
<title>About Us - Learn For Grow</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #74ebd5, #ACB6E5);
    font-family: 'Segoe UI', sans-serif;
}

/* Navbar */
.custom-navbar {
    backdrop-filter: blur(10px);
    background: rgba(0,0,0,0.7) !important;
}

/* Section spacing */
.section {
    padding: 60px 0;
}

/* Cards */
.card-custom {
    background: white !important;
    border-radius: 20px !important;
    padding: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2) !important;
    transition: 0.3s;
}

.card-custom:hover {
    transform: translateY(-10px);
}

/* Icons */
.icon {
    font-size: 40px;
    margin-bottom: 10px;
}

/* Heading */
h1, h2 {
    font-weight: bold;
}

/* Team images */
.team-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
}

/* Buttons FIX */
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

/* Footer */
footer {
    background: #111;
    color: white;
    text-align: center;
    padding: 15px;
}
</style>
</head>

<body>

<?php include('nav.php'); ?>

<!-- HEADER -->
<div class="section text-center text-white">
    <h1>About Us</h1>
    <p class="mt-3 fs-5">Empowering knowledge through digital books 📚</p>
</div>

<!-- ABOUT CARDS -->
<div class="container section">
    <div class="row g-4 text-center">

        <div class="col-md-4">
            <div class="card-custom">
                <div class="icon text-primary">
                    <i class="bi bi-bullseye"></i>
                </div>
                <h4>Our Mission</h4>
                <p>Provide easy access to quality books anytime</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <div class="icon text-success">
                    <i class="bi bi-eye"></i>
                </div>
                <h4>Our Vision</h4>
                <p>Become a leading digital library platform worldwide.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <div class="icon text-danger">
                    <i class="bi bi-heart"></i>
                </div>
                <h4>Our Values</h4>
                <p>Knowledge, accessibility, innovation, and growth.</p>
            </div>
        </div>

    </div>
</div>

<!-- TEAM -->
<div class="container section text-center">
    <h2 class="mb-4">Our Team</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card-custom">
                <img src="john.jpg" class="rounded-circle team-img mb-2">
                <h5>John Doe</h5>
                <p>Founder</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <img src="emily.php" class="rounded-circle team-img mb-2">
                <h5>Emily Smith</h5>
                <p>Content Manager</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <img src="michel.php" class="rounded-circle team-img mb-2">
                <h5>Michael Lee</h5>
                <p>Developer</p>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer>
    <p>© 2026 Learn For Grow | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>