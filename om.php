<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
    <title>LEARN FOR GROW</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            font-family: Arial, sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }

        .active-page {
            background-color: #0d6efd !important;
            color: white !important;
        }

        .card {
            border-radius: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            border-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        h5 {
            font-weight: bold;
            margin-top: 10px;
        }

        .search-box {
            border-radius: 25px;
            padding: 10px;
        }

        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f5f7fa;
}

/* Navbar */
.custom-navbar {
    backdrop-filter: blur(10px);
    background: rgba(77, 110, 143, 0.85);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    padding: 10px 20px;
}

/* Brand */
.navbar-brand {
    font-weight: bold;
    font-size: 1.4rem;
    letter-spacing: 1px;
}

/* Links */
.nav-link {
    color: #fff !important;
    margin: 0 8px;
    position: relative;
    transition: 0.3s;
}

/* Hover underline animation */
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

/* Buttons */
.btn-login {
    background: #ffd166;
    border: none;
    color: #333;
    border-radius: 20px;
    padding: 5px 15px;
}

.btn-signup {
    background: #06d6a0;
    border: none;
    color: white;
    border-radius: 20px;
    padding: 5px 15px;
    margin-left: 10px;
}

/* Hover effects */
.btn-login:hover {
    background: #ffb703;
}

.btn-signup:hover {
    background: #04b383;
}
</style>
</head>

<body>

<?php  include('nav.php') ?>
</body>
</html>
<!-- Search -->
<div class="container mt-4">
    <input type="text" class="form-control search-box" placeholder="🔍 Search books...">
</div>

<!-- Books -->
<div class="container mt-4">
    <div class="row g-4">

        <?php
     include("config.php");
        
    $query = mysqli_query($conn,"SELECT * FROM books");
    
    while($res = mysqli_fetch_assoc($query)) {
        ?>
    
    
       <div class="col-md-3">
    <div class="card p-3 text-center">
        <img src="img/<?php echo $res['image']; ?>" class="img-fluid">
        
        <h5><?php echo $res['title']; ?></h5>
        
        <p><b>Title:</b> <?php echo $res['title']; ?></p>
        <p><b>Author:</b> <?php echo $res['author']; ?></p>

        <button class="btn btn-primary" onclick="openBook()">Read</button>
    </div>
</div>
        
        <?php } ?>

      
      

    </div>
</div>

<!-- Footer -->
<footer>
    <p>© 2026 Learn For Grow | All Rights Reserved</p>
    <p>
        <a href="about.html" class="text-white">About</a> |
        <a href="contact.html" class="text-white">Contact</a> |
        <a href="categories.html" class="text-white">Categories</a>
    </p>
</footer>

<!-- Script -->
<script>
let loggedIn = false;

function openBook(){
    if(!loggedIn){
        alert("Please login first");
    } else {
        alert("Opening book...");
    }
}
</script>
    </body></html>