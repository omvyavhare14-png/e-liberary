<?php
include "config.php";

// DELETE BOOK

if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    $conn->query("DELETE FROM books WHERE id=$id");

    header("Location: fetch_books.php");
}

// FETCH BOOKS

$result = $conn->query("SELECT * FROM books ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
<?php  include('nav1.php') ?>
<title>Books List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    border:none;
    border-radius:20px;
}

.preview{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
}

</style>

</head>
<body>

<div class="container mt-5">

<div class="card p-4 shadow">

<h3 class="mb-4">
Books List
</h3>

<table class="table table-bordered table-hover">

<tr class="table-dark">

<th>ID</th>
<th>Image</th>
<th>Title</th>
<th>Author</th>
<th>PDF</th>
<th>Action</th>

</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>

<td><?= $row['id'] ?></td>

<td>

<img
src="uploads/images/<?= $row['image'] ?>"
class="preview"
>

</td>

<td><?= $row['title'] ?></td>

<td><?= $row['author'] ?></td>

<td>

<a
href="uploads/pdfs/<?= $row['pdf'] ?>"
target="_blank"
class="btn btn-info btn-sm"
>
View PDF
</a>

</td>

<td>

<a
href="edit_book.php?id=<?= $row['id'] ?>"
class="btn btn-warning btn-sm"
>
Edit
</a>

<a
href="?delete=<?= $row['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this book?')"
>
Delete
</a>

</td>

</tr>

<?php endwhile; ?>

</table>

</div>

</div>

</body>
</html>