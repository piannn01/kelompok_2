<?php
include("crud.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $hobby = $_POST['hobby'];
    // buat query update
    $sql = "UPDATE tb_gts SET nim='$nim', nama='$nama', jenis_kelamin='$jk', jabatan='$jabatan', hobby='$hobby' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>