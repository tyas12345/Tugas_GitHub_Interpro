<?php
include "db.php";

$username = addslashes(strip_tags ($_POST['NPDF']));
$password = addslashes(strip_tags ($_POST['PASS']));
$confirm = addslashes(strip_tags ($_POST['CPASS']));

//script ini untuk mengecek apakah form sudah terisi semua
if ($username&&$password&&$confirm) {
//berfunsgi untuk mengecek form tidak boleh lebih dari 10
 if (strlen($username)> 10){
 echo "username tidak boleh lebih dari 10 karakter";
 }
 else {
//password harus 6-25 karakter
 if (strlen($password)> 10 || strlen($confirm)<2){
 echo "Password harus antara 6-25 karakter";
 }
 else {
//untuk mengecek apakah form password dan form konfirmasi password sudah sama
 if ($password == $confirm){
 $sql_get = mysql_query ("SELECT * FROM calon_mahasiswa_spmb WHERE NO_PENDAFTARAN = '$username'");
 $num_row = mysql_num_rows($sql_get);
//fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
 if ($num_row ==0) {
 $password = md5($password);
 $confirm = md5($confirm);
 $sql_insert = mysql_query("INSERT INTO calon_mahasiswa_spmb ('NO_PENDAFTARAN','pass','conf_pass','Transaksi_pemb') VALUES ('$username','$password','$confirm','$No_reken')");
 echo "Pendaftaran berhasil. Login <a href='Success-regis.php'>disini</a>";
 }
 else {
 echo "Username sudah terdaftar";
 }
 }
 else {
 echo "Password yang kamu masukan tidak sama!";
 
}
 
}
 
}
 
}
 
else {
 $er1 = "Tolong penuhi form pendaftaran!";
 }
?>