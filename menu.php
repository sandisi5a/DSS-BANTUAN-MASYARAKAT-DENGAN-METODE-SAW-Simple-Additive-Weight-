<!doctype html>
    <html>
        <head>
            <title>Aplikasi Pemilihan Warga Penerima Bantuan Dana</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.css">
        </head>
        <body>
            <div id="container">
            <header>
                <h1><a href="https://www.facebook.com/groups/commit.stmiktegal/">Aplikasi Pemilihan Warga Penerima Bantuan Dana</a></h1>
            </header>
            <!--menu -->
            <nav>
                <ul>
                    <li><a href="#">Master</a>
                        <ul>
                            <li><a href="penduduk.php">Daftar_Warga</a></li>
                            <li><a href="penduduk_tambah.php">Tambah_Warga</a></li>
                            <li><a href="kriteria_list.php">Daftar_Kriteria</a></li>
                            <li><a href="kriteria.php">Tambah_Kriteria</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Transaksi</a>
                        <ul>
                            <li><a href="penduduk_pilihan.php">Rekomendasi_Warga</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
    <?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<div align='left'>
   <h3><i>Selamat Datang, <b><?php echo $username;?></i></b></h3>
</div>
            </body>
    </html>