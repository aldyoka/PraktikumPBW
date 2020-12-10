<?php
require('function.php');

$id = $_GET['id'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['role']=='admin') {
        $hasil = deleteMhs($id);
        if ($hasil>0) {
            echo('
                    <script>
                        alert("DATA BERHASIL DIHAPUS");
                        window.location.href="dashboard.php";
                    </script>
                ');
        } else {
            echo('
                    <script>
                        alert("DATA GAGAL DIHAPUS");
                        window.location.href="dashboard.php";
                    </script>
                ');
        }
    } else {
        echo('
                <script>
                   alert("ANDA BUKAN ADMIN!");
                   window.location.href="dashboard.php";
                </script>
            ');
    }
} else {
    header("Location: index.php");
}
