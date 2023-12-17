<?php include("crud.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Pendaftaran Mandor</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Data Keanggotaan Mabes Polry</a>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        </div>
        <div class="col-sm-3 col-sm-offset-2 col-md-7 col-md-offset-1 main">
     
          <h1 class="page-header">Dashboard</h1>
        <h3>Data Keanggotaan Mabes Polry</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
 
    <table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Hobby</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_gts";
        $query = mysqli_query($db, $sql);
     
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nim']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['jabatan']."</td>";
            echo "<td>".$siswa['hobby']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'><button>Edit</button></a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'><button>Hapus</button></a>";
            echo "</td>";
            echo "</tr>";
     
        }
        ?>
    </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</div>
        </div>
      </div>
    </div>
  </body>
</html>