<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Pendaftaran MANDOR MABES POLRY</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Daftar Mandor</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://bascombandung.com/">MABES POLRY</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="MabesPolry.php">MABES POLRY</a></li>
            <li><a href="cetak.php">CETAK DATA</a></li>
            <li><a href="semua-data.php">SEMUA DATA</a></li>
            <li><a href="logout.php">KELUAR</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Mandor</h1>
          <!--<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->
     
          <div class="table-responsive">
           <?php include("crud.php"); ?>
  <nav>
    <a href="form-daftar.php">[+] Tambah Data Baru</a>
  </nav>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>NIM</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Jabatan</th>
      <th>Hobby</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM tb_gts";
    $query = mysqli_query($db, $sql);
    $no=1;
    while($siswa = mysqli_fetch_array($query)){
      echo "<tr>";
      echo "<td>".$siswa['id']."</td>";
      echo "<td>".$siswa['nim']."</td>";
      echo "<td>".$siswa['nama']."</td>";
      echo "<td>".$siswa['jenis_kelamin']."</td>";
      echo "<td>".$siswa['jabatan']."</td>";
      echo "<td>".$siswa['hobby']."</td>";
      echo "<td>";
      echo "<td><a href='form-edit.php?id=".$siswa['id']."'class='btn btn-success'>Edit</button></a> | ";
      echo "<a href='hapus.php?id=".$siswa['id']."'class='btn btn-danger'>Hapus</a></td>";
      echo "</td>";
      $no++;
    }
    ?>
  </tbody>
  <p>Total: <?php echo mysqli_num_rows($query) ?></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>