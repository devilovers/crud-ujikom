<?php 
include "koneksi.php";

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO siswa VALUES('', '$nama', '$kelas', '$alamat')");
    header("Location: index.php");
}

if(isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
    header("Location: index.php");
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE siswa SET
    nama='$nama',
    kelas='$kelas',
    alamat='$alamat'
    WHERE id='$id'
    ");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Siswa</title>
</head>
<body>

<h2>DATA SISWA</h2>

<?php

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
    $d = mysqli_fetch_array($data);
?>

<h3>EDIT DATA</h3>

<form method="POST">
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

Nama <br>
<input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
<br><br>

Kelas <br>
<input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" required>
<br><br>

Alamat <br>
<textarea name="alamat"><?php echo $d['alamat']; ?></textarea>
<br><br>

<button type="submit" name="update">Update</button>

</form>

<hr>

<?php } else { ?>

<h3>TAMBAH DATA</h3>

<form method="POST">

Nama <br>
<input type="text" name="nama" required>
<br><br>

Kelas <br>
<input type="text" name="kelas" required>
<br><br>

Alamat <br>
<textarea name="alamat"></textarea>
<br><br>

<button type="submit" name="tambah">Simpan</button>

</form>

<hr>

<?php } ?>

<h3>DATA SISWA</h3>

<table border="1" cellpadding="10">

<tr>
<th>No</th>
<th>Nama</th>
<th>Kelas</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>

<?php 

$data = mysqli_query($koneksi, "SELECT * FROM siswa");
$no = 1;

while($d = mysqli_fetch_array($data)) {
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['kelas']; ?></td>
<td><?php echo $d['alamat']; ?></td>

<td>
<a href="?edit=<?php echo $d['id']; ?>">Edit</a>
<a href="?hapus=<?php echo $d['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
</td>
</tr>

<?php } ?>

</table>
</body>
</html>