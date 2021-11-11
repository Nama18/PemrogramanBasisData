<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode = $_POST['kodebrg'];
  $nama = $_POST['nama'];
  $stok = $_POST['stok'];
  $jenis = $_POST['jenis'];
  $beli = $_POST['harga_beli'];
  $jual = $_POST['harga_jual'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  BARANGDAGANG  SET NAMA ='".$nama."', STOK ='".$stok."', HARGA_BELI ='".$beli."', HARGA_JUAL ='".$jual."', JENIS ='".$jenis."' WHERE KODEBRG = '".$kode."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Barang berhasil diubah'); window.location.href='stokobat.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Barang gagal diubah'); window.location.href='stokobat.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: stokobat.php'); 
}