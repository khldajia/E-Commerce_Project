<?php
require_once 'dbkoneksi.php';
// tangkap iddel dari url
$delete = $_GET['iddel'];
// bikin query hapus data
$sql = "DELETE FROM produk WHERE id=?";
// prepare query 
$st = $dbh->prepare($sql);
// jalanin query
$st->execute([$delete]);

// pindahin ke hal produk 
header('location:produk.php');