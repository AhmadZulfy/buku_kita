
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
</head>

<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header">
            LOGIN
          </div>
          <div class="card-body">
            <?php
            session_start();
            include('koneksi.php');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = mysqli_query($koneksi, $query);

                if ($result) {
                    $count = mysqli_num_rows($result);

                    if ($count == 1) {
                        $_SESSION['username'] = $username;
                        header("Location: dashboard.php"); // Replace 'dashboard.php' with your desired redirect page
                        exit();
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Invalid username or password</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error executing the query</div>';
                }

                mysqli_close($koneksi);
            }
            ?>
            <form action="index4.php" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" class="form-control">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <!-- Add the Register button -->
            <div class="mt-3">
              <p>Tidak Punya Akun ? <a href="user-register.php">Daftar disini </a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<