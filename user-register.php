<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Register</title>
</head>

<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header">
            REGISTER
          </div>
          <div class="card-body">
            <?php
            session_start();
            include('koneksi.php');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['username'];
              $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

              $query = $conn->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
              $query->bindParam(':username', $username, PDO::PARAM_STR);
              $query->bindParam(':password', $password, PDO::PARAM_STR);

              if ($query->execute()) {
                echo '<div class="alert alert-success">Registration successful. Please <a href="index.php">login</a>.</div>';
              } else {
                echo '<div class="alert alert-danger">Registration failed. Please try again.</div>';
              }
            }
            ?>
            <form action="" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" class="form-control">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary">Register</button>
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
