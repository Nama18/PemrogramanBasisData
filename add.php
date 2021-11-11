<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $stok = $_POST['stok'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];

	$query = "INSERT INTO barangdagang (kodebrg,NAMA,jenis,harga_beli,harga_jual,stok) VALUES ('".$kode."','".$nama."','".$jenis."','".$harga_beli."','".$harga_jual."','".$stok."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Barang berhasil ditambahkan'); 
	window.location.href='stokobat.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Barang gagal ditambahkan');
	window.location.href='stokobat.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: stokobat.php'); 
}