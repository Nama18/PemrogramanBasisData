<?php
//membangun koneksi
$username ="system";
$password ="mario565";
$database ="LOCALHOST/orcl";
$koneksi=oci_connect ($username,$password,$database);
if(!$koneksi) {
$err=oci_error();
echo "Gagal tersambung ke ORACLE", $err['text'];
} else {
// echo "Koneksi Berhasil";
}
?>