<?php
include "config.php";

$message = "";


if(isset($_POST['upload'])){

    $title = $_POST['title'];
    $author = $_POST['author'];

    $pdf = $_FILES['pdf'];
    $image = $_FILES['image'];

    $pdf_ext = strtolower(pathinfo($pdf['name'], PATHINFO_EXTENSION));
    $img_ext = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

    // VALIDATION

    if($pdf_ext != "pdf"){
        $message = "Only PDF allowed";
    }

    elseif(!in_array($img_ext, ['jpg','jpeg','png'])){
        $message = "Only JPG PNG allowed";
    }

    else{

        $newPdf = uniqid().".pdf";
        $newImg = uniqid().".".$img_ext;

        move_uploaded_file($pdf['tmp_name'], "uploads/pdfs/".$newPdf);

        move_uploaded_file($image['tmp_name'], "uploads/images/".$newImg);

        $stmt = $conn->prepare("INSERT INTO books(title,author,image,pdf) VALUES(?,?,?,?)");

        $stmt->bind_param("ssss",$title,$author,$newImg,$newPdf);

        if($stmt->execute()){
            $message = "Book Uploaded Successfully";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
<?php  include('nav1.php') ?>

<title>Upload Book</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: cadetblue;
        height:100vh;
}

.card{
    border-radius:20px;
    border:none;
}

</style>

</head>
<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card p-4 shadow">

<h3 class="text-center mb-4">
Upload Book
</h3>

<?php if($message): ?>

<div class="alert alert-info">
<?= $message ?>
</div>

<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

<input
type="text"
name="title"
class="form-control mb-3"
placeholder="Book Title"
required
>

<input
type="text"
name="author"
class="form-control mb-3"
placeholder="Author Name"
required
>

<label>Book Image</label>

<input
type="file"
name="image"
class="form-control mb-3"
required
>

<label>Book PDF</label>

<input
type="file"
name="pdf"
class="form-control mb-3"
required
>

<button
name="upload"
class="btn btn-success w-100"
>
Upload Book
</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>