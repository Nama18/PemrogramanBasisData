<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode = $_POST['kodepel'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kota_pel = $_POST['kota_pel'];
  $prov_pel = $_POST['prov_pel'];
  $alamat_kirim = $_POST['alamat_kirim'];
  $kota_kirim = $_POST['kota_kirim'];
  $prov_kirim = $_POST['prov_kirim'];
  $no_hp = $_POST['no_hp'];
  $no_wa = $_POST['no_wa'];
  $nama_penerima = $_POST['nama_penerima'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  PELANGGAN  SET NAMA ='".$nama."', ALAMAT ='".$alamat."', KOTA_PEL ='".$kota_pel."', PROV_PEL ='".$prov_pel."', ALAMAT_KIRIM ='".$alamat_kirim."', KOTA_KIRIM ='".$kota_kirim."', PROV_KIRIM ='".$prov_kirim."', NO_HP ='".$no_hp."', NO_WA ='".$no_wa."', NAMA_PENERIMA ='".$nama_penerima."' WHERE KODEPEL = '".$kode."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Pelanggan berhasil diubah'); window.location.href='pelanggan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Pelanggan gagal diubah'); window.location.href='pelanggan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pelanggan.php'); 
}