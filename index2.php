<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="style.css"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="js/bootstrap.min.js"></script>
  <title>Data Siswa</title>
</head>

<body>
  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Kategori
          </div>
          <div class="card-body">
            <a href="tambah-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH BUKU</a>
            <a href="index3.php" class="btn btn-md btn-success" style="margin-bottom: 10px">USER</a>
            <a href="kategori.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH KATEGORI</a>
            <table class="table-info table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">ID.</th>
                  <th scope="col">NAMA KATEGORI</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include('koneksi.php');
                  $no = 1;
                  $query = $conn->query("SELECT * FROM kategori");
                  while($row = $query->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nama_kategori'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
  </script>
</body>
</html>
