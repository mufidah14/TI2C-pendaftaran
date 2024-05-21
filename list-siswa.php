<?php

include("koneksi.php");

// Cek koneksi database
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Perintah SQL untuk menampilkan data siswa
$sql = "SELECT * FROM calon_siswa";

// Jalankan query
$query = mysqli_query($db, $sql);

// Periksa apakah query berhasil dijalankan
if (!$query) {
    die("Gagal menampilkan data siswa: " . mysqli_error($db));
}

// Hitung total data siswa
$total = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo $total ?></p>

</body>
</html>
