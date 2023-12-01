<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU
            </div>
            <div class="card-body">
            <a href="tambah-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH BUKU</a>
            <a href="index3.php" class="btn btn-md btn-success" style="margin-bottom: 10px">USER</a>
            <a href="kategori.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH KATEGORI</a>
            <a href="index2.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMPIl KATEGORI</a>
            <a href="tambah-user.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH USER</a>
              <table class="table-info table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">PENGARANG</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $sql = "SELECT buku.*, kategori.nama_kategori FROM buku JOIN kategori ON buku.kategori_id = kategori.id";
                      $stmt = $conn->query($sql);

                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['judul'] ?></td>
                      <td><?php echo $row['penerbit'] ?></td>
                      <td><?php echo $row['pengarang'] ?></td>
                      <td><?php echo $row['tahun'] ?></td>
                      <td><?php echo $row['nama_kategori'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td class="text-center">
                        <a href="edit-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-buku.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap-offline/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      });
    </script>
  </body>
</html>
