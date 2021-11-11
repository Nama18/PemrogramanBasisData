<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $date = $_POST['date1'];
    $id = $_POST['id'];
    $sermon_date = date('d-m-Y', strtotime($date));
    $dates = strtotime($date);
    $query = "INSERT INTO mbarangmasuk (tanggal,idbrgmasuk) VALUES (to_date('".$sermon_date."','dd-mm-yyyy'),'".$id."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	$res = oci_commit($koneksi);
    if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Barang berhasil ditambahkan'); 
	window.location.href='barangmasuk.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Barang gagal ditambahkan');
	window.location.href='barangmasuk.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barangmasuk.php'); 
}
