<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "e_library";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

// FETCH CONTACT MESSAGES

$sql = "SELECT * FROM contact_messages ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<?php  include('nav1.php') ?>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: #f5f5f5;
    font-family: Arial, sans-serif;
}

.admin-box{
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

</style>

</head>

<body>

<div class="container mt-5">

    <div class="admin-box">

        <h2 class="mb-4 text-center">
            📩 Contact Messages
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>

                    </tr>

                </thead>

                <tbody>

                <?php

                if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_assoc($result)){

                ?>

                    <tr>

                        <td><?php echo $row['id']; ?></td>

                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo $row['email']; ?></td>

                        <td><?php echo $row['message']; ?></td>

                        <td><?php echo $row['created_at']; ?></td>

                    </tr>

                <?php

                    }

                } else {

                ?>

                    <tr>

                        <td colspan="5" class="text-center text-danger">
                            No Messages Found
                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>

<?php include "footer.php"; ?>