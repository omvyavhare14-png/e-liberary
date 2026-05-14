
// FETCH BOOKS
$result = $conn->query("SELECT * FROM books ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { background: linear-gradient(to right, #74ebd5, #ACB6E5); }
.card { border-radius: 15px; }
.preview { width: 60px; height: 60px; object-fit: cover; }
</style>
</head>
<body>

<?php include "header.php"; ?>

<div class="container mt-4">

<div class="row">
<div class="col-md-5">

<div class="card p-3">
<h4>Upload Book</h4>

<?php if($message=="success"): ?>
<div class="alert alert-success">Uploaded</div>
<?php elseif($message): ?>
<div class="alert alert-danger"><?= $message ?></div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="title" class="form-control mb-2" placeholder="Title" required>
<input type="text" name="author" class="form-control mb-2" placeholder="Author" required>

<label>Image</label>
<input type="file" name="image" class="form-control mb-2" required>

<label>PDF</label>
<input type="file" name="pdf" class="form-control mb-2" required>

<button name="upload" class="btn btn-success w-100">Upload</button>

</form>
</div>

</div>

<div class="col-md-7">

<div class="card p-3">
<h4>Books List</h4>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Image</th>
<th>PDF</th>
<th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['title'] ?></td>
<td><?= $row['author'] ?></td>

<td>
<img src="uploads/images/<?= $row['image'] ?>" class="preview">
</td>

<td>
<a href="uploads/pdfs/<?= $row['pdf'] ?>" target="_blank">View</a>
</td>

<td>
<a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Delete this book?')">Delete</a>
</td>

</tr>
<?php endwhile; ?>

</table>

</div>

</div>
</div>

</div>
    