<?php
include "config.php";
session_start();

/* OPTIONAL: restrict access */
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
if(isset($_POST['add_book'])){
    $title = $_POST['title'];
    $author = $_POST['author'];

    $image = $_FILES['image']['name'];
    $pdf = $_FILES['pdf']['name'];

    $tmp_img = $_FILES['image']['tmp_name'];
    $tmp_pdf = $_FILES['pdf']['tmp_name'];

    // move files
    move_uploaded_file($tmp_img, "img/".$image);
    move_uploaded_file($tmp_pdf, "pdfs/".$pdf);

    $sql = "INSERT INTO books (title,author,image,pdf) 
            VALUES ('$title','$author','$image','$pdf')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Book Added with PDF');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

/* ADD BOOK */
//if(isset($_POST['add_book'])){
//    $title = $_POST['title'];
//    $author = $_POST['author'];
//
//    $image = $_FILES['image']['name'];
//    $tmp = $_FILES['image']['tmp_name'];
//
//    move_uploaded_file($tmp, "images/".$image);
//
//    $sql = "INSERT INTO books (title,author,image) VALUES ('$title','$author','$image')";
//    
//    if(mysqli_query($conn,$sql)){
//        echo "<script>alert('Book Added Successfully');</script>";
//    } else {
//        echo "Error: " . mysqli_error($conn);
//    }
//}
?>



<!DOCTYPE html>
<html>
<head>
<title>Admin Panel - Add Books</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #f5f5f5;
}
.card {
    border-radius: 15px;
}
</style>
</head>

<body>

<div class="container mt-5">

    <div class="col-md-6 mx-auto">
        <div class="card p-4 shadow">

            <h3 class="text-center mb-4">📚 Add New Book</h3>

            <form method="POST" enctype="multipart/form-data">

                <!-- Title -->
                <input type="text" name="title" class="form-control mb-3" placeholder="Book Title" required>

                <!-- Author -->
                <input type="text" name="author" class="form-control mb-3" placeholder="Author Name" required>

                <!-- Image -->
                <input type="file" name="image" class="form-control mb-3" required>
                
                <input type="file" name="pdf" class="form-control mb-3" required>

                <!-- Button -->
                <button name="add_book" class="btn btn-primary w-100">
                    Add Book
                </button>

            </form>

        </div>
    </div>

</div>
<td><?php
session_start();

if(!isset($_SESSION['user']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}
?>
</td>

</body>
</html>