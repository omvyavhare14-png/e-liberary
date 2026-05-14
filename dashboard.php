<?php
session_start();
include "config.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home - Learn For Grow</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: white;
    font-family: Arial, sans-serif;
}

.navbar {
    background: rgba(0,0,0,0.7);
}

.card {
    border-radius: 15px;
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    height: 200px;
    object-fit: cover;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark px-4">
    <span class="navbar-brand">📚 Learn For Grow</span>

    <div class="ms-auto text-white">
        Welcome <?php echo $_SESSION['user']; ?>
        <a href="logout.php" class="btn btn-danger btn-sm ms-3">Logout</a>
    </div>
</nav>

<div class="container mt-4">

    <h3 class="mb-4">📖 Available Books</h3>

    <div class="row g-4">

        <?php
        $sql = "SELECT * FROM books";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result)){
        ?>

        <div class="col-md-3">
            <div class="card p-3 text-center">
<img src="img/<?php echo $row['image']; ?>" class="img-fluid">

                <h5 class="mt-2"><?php echo $row['title']; ?></h5>

                <p><b>Author:</b> <?php echo $row['author']; ?></p>

                <!-- READ -->
                <a href="pdfs/<?php echo $row['pdf']; ?>" target="_blank" class="btn btn-primary btn-sm">
                    📖 Read
                </a>

                <!-- DOWNLOAD -->
                <a href="pdfs/<?php echo $row['pdf']; ?>" download class="btn btn-success btn-sm mt-2">
                    📥 Download
                </a>

            </div>
        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>