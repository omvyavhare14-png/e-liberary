<?php
include 'config.php';

$id = $_GET['id'];

// Step 1: Get image name first
$result = $conn->query("SELECT image FROM books WHERE id=$id");
$row = $result->fetch_assoc();

$image = $row['image'];

// Step 2: Delete image file from folder
if ($image && file_exists("uploads/" . $image)) {
    unlink("uploads/" . $image);
}

// Step 3: Delete from database
$conn->query("DELETE FROM books WHERE id=$id");

// Step 4: Redirect
header("Location: index.php");
exit();
?>