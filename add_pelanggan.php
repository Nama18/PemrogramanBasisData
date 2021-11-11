<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode = $_POST['kode'];
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

	$query = "INSERT INTO pelanggan (kodepel,NAMA,alamat,kota_pel,prov_pel,alamat_kirim,kota_kirim,prov_kirim,no_hp,no_wa,nama_penerima) VALUES ('".$kode."','".$nama."','".$alamat."','".$kota_pel."','".$prov_pel."','".$alamat_kirim."','".$kota_kirim."','".$prov_kirim."','".$no_hp."','".$no_wa."','".$nama_penerima."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Pelanggan berhasil ditambahkan'); 
	window.location.href='pelanggan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Pelanggan gagal ditambahkan');
	window.location.href='pelanggan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pelanggan.php'); 
}