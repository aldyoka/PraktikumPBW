<?php
require('function.php');
if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hasil = insertMhs($id, $nim, $nama, $alamat);
    if ($hasil>0) {
        echo('
            <script>
                alert("DATA BERHASIL DITAMBAHKAN");
                window.location.href="dashboard.php";
            </script>
        ');
    } else {
        echo('
            <script>
                alert("DATA GAGAL DITAMBAHKAN");
                window.location.href="dashboard.php";
            </script>
        ');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <p class="welcome-user">Selamat Datang <?= $_SESSION['role'] ?></p>
        <div class="clearfix"></div>
        <button class="tambah-mhs" id="myBtn">add data</button>
        <a href="logout.php" class="logout">Logout</a>
        <div class="clearfix"></div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th <?php echo ($_SESSION['role']=='admin') ? 'colspan="2"' : ''; ?>>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (getAllMhs() as $data) :?>
                        <tr>
                            <td><?= $data['nim'] ?></td>
                            <td class="text-left"><?= $data['nama'] ?></td>
                            <td class="text-left"><?= $data['alamat'] ?></td>
                            <td><a href="edit.php?id=<?=$data['id']?>">Edit</a></td>
                            <?php if ($_SESSION['role']=='admin'): ?>
                            <td><a href="delete.php?id=<?=$data['id']?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a></td>
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- dat Form Insert Data-->
    <!-- The dat -->
    <div id="mydat" class="dat">
        <!-- dat content -->
        <div class="dat-content">
            <span class="close">&times;</span>
            <p class="title-form">Tambah Mahasiswa</p>
            <div class="form-container">
                <form action="" method="POST" class="form">
                    <label for="nim" class="col-form-label">NIM</label>
                    <input type="number" class="form-control" name="nim" id="nim" autocomplete="off">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" autocomplete="off">
                    <label for="alamat" class="col-form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <script src="js/script.js"></script>
</body>

</html>