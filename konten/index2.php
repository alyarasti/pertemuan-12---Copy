<?php
require_once('template/header.php');
?>

<!-- koneksi database -->
<?php
$hostname = "localhost";
$username = "root"; // Corrected to lowercase 'root'
$password = "";
$database = "db_film";

$koneksi = new mysqli($hostname, $username, $password, $database);
?>

<!-- 2. query database -->
<?php
$hasil = $koneksi->query("SELECT * FROM tb_film");
?>
<!-- 3. tampilkan kedalam pengulangan -->
<!-- Awal content -->
<div class="row">
    <div class="col-xl-12">
        <h1>Halaman Film</h1>
        <div class="table-responsive">
            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Durasi</th>
                    <th>Sutradara</th>
                    <th>Cover</th>
                </tr>

                <?php $no = 1; ?>
                <?php foreach ($hasil as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['genre'] ?></td>
                        <td><?= $row['durasi'] ?></td>
                        <td><?= $row['sutradara'] ?></td>
                        <td><img src="Cover/<?= $row["cover"] ?>" width="40"></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
    <!-- akhir content -->
</div>

<?php
require_once('template/footer.php');
?>
