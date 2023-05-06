<?php
require_once "header.php";
require_once "sidebar.php";
?>
<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Detail Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <td>Kode</td>
                <td><?= $row['kode'] ?></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><?= $row['nama'] ?></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><?= $row['harga_jual'] ?></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><?= $row['harga_beli'] ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?= $row['stok'] ?></td>
            </tr>
            <tr>
                <td>Minimum Stok</td>
                <td><?= $row['min_stok'] ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><?= $row['deskripsi'] ?></td>
            </tr>
            <tr>
                <td>Kategori Produk</td>
                <td><?= $row['kategori_produk_id'] ?></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.card-body -->
<div class="card-footer">
    Footer
</div>
<!-- /.card-footer-->
</div>
<?php
require_once "footer.php";
?>