<?php
require('function.php');

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
if (!checkId($id)) {
    header("Location: dashboard.php");
} else {
    $data = getMhs($id);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hasil = editMhs($id, $nim, $nama, $alamat);
    if ($hasil>0) {
        echo('
            <script>
                alert("DATA BERHASIL DIEDIT");
                window.location.href="dashboard.php";
            </script>
        ');
    } else {
        echo('
            <script>
                alert("DATA GAGAL DIEDIT");
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
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
            <p class="title-form">Edit Mahasiswa</p>
            <div class="form-container">
                <form action="" method="POST" class="form">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <label for="nim" class="col-form-label">NIM</label>
                    <input type="number" class="form-control" name="nim" id="nim" autocomplete="off" value="<?=$data['nim']?>">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="<?=$data['nama']?>">
                    <label for="alamat" class="col-form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off" value="<?=$data['alamat']?>">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
    </div>
</body>
</html>