<?php
require_once "header.php";
require_once "sidebar.php";
?>
<?php
require_once 'dbkoneksi.php';
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
                    <h1> From Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="hrg_beli" class="col-4 col-form-label">Harga Beli</label>
            <div class="col-8">
                <input id="hrg_beli" name="hrg_beli" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-4 col-form-">Stok</label>
            <div class="col-8">
                <input id="stok" name="stok" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
            <div class="col-8">
                <input id="min_stok" name="min_stok" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <input id="deskripsi" name="deskripsi" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Kategori Produk</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="kategori" id="kategori_0" type="checkbox" class="custom-control-input" value="electronic">
                    <label for="kategori_0" class="custom-control-label">Electronic</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="kategori" id="kategori_1" type="checkbox" class="custom-control-input" value="furniture">
                    <label for="kategori_1" class="custom-control-label">Furniture</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="kategori" id="kategori_2" type="checkbox" class="custom-control-input" value="food">
                    <label for="kategori_2" class="custom-control-label">Food</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="kategori" id="kategori_3" type="checkbox" class="custom-control-input" value="drink">
                    <label for="kategori_3" class="custom-control-label">Drink</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
    ?>
    <?php
    foreach ($rs as $row) {
    ?>
    <?php
    }
    ?>

    </select>
</div>
</div>
</div>
</form>