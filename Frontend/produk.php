<?php
require_once 'dbkoneksi.php';
require_once 'header.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Data Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                        </div>




                        <thead>
                            <tr>

                                <th>Nama Produk</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Minimal Stok</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>

                                <tr>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['harga_jual'] ?></td>
                                    <td><?= $row['harga_beli'] ?></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td><?= $row['min_stok'] ?></td>
                                    <td><?= $row['deskripsi'] ?></td>
                                    <td><?= $row['kategori_produk_id'] ?></td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                        </table>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once "footer.php";
?>