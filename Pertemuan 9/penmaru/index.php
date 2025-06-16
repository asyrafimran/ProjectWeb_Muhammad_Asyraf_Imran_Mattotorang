<!DOCTYPE html>
<html>
    <head>
        <title> Pendaftaran Siswa Baru </title>
    </head>
    <body>
        <header>
            <h3>Pendaftaran Siswa Baru</title>
            <h1>SMK PUTERA BATAM</h1>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href = "form_daftar.php">Daftar Baru</a></li>
                <li><a href = "list_calon_siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses'){
                    echo "Pendaftaran Siswa Baru Berhasil";
                } else {
                    echo "Pendaftaran Gagal";
                }
                ?>
            </p>
        <?php endif; ?>
    </body>
</html>
