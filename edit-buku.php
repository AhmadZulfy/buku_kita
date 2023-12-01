<?php
include('koneksi.php');

$id = $_GET['id'];

// Use prepared statement to avoid SQL injection
$query = "SELECT * FROM user WHERE id = :id LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"/>
    <title>Edit User</title>
</head>

<body>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    EDIT USER
                </div>
                <div class="card-body">
                    <form action="update-user.php" method="POST">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Enter Username" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">UPDATE</button>
                        <button type="reset" class="btn btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
