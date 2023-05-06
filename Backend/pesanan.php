<?php
require_once "header.php";
require_once "sidebar.php";
?>
<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Data Pesanan</h1>
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
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Jumlah</th>
                                <th>Deskripsi</th>
                                <th>Produk</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($rs as $row) {
                            ?>

                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['nama_pemesan'] ?></td>
                                    <td><?= $row['alamat_pemesan'] ?></td>
                                    <td><?= $row['no_hp'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['jumlah_pesanan'] ?></td>
                                    <td><?= $row['deskripsi'] ?></td>
                                    <td><?= $row['produk_id'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>

                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
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