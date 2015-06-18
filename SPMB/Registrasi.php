<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Penerimaan Mahasiswa Baru</title>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Home</a>
    </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Admin</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 style="margin-left:30px;">Form Registrasi</h1> 
    
<div class="panel panel-default" style="margin-left:30px; width:70%;">
  <div class="panel-body">
    <form action="Registrasi.php" method="post">
    	<div class="form-group" style="width:60%;">
    		<label for="exampleInputEmail1">No.Pendaftaran</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Pendaftaran" name="NPDF">
        <label for="exampleInputEmail1">No.Rekening</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Rekening" name="transaksi">
            <label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="PASS">
           <label for="exampleInputPassword1">Konfirmasi Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Konfirmasi Password" name="CPASS">
        <label>Pilih Jalur</label> <br>
        <label class="radio-inline"><input type="radio" name="optradio" value="112015">SPMB I</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="122015">SPMB II</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="132015">SPMB III</label>
            <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="regis-button">Register</button>
  		</div>
	 </form>
  </div>
  <div class="er1" style="color:red; margin-bottom:10px; margin-left:20px;">
  <?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con); 

  if(isset($_POST['regis-button'])){
    $username =  $_POST['NPDF'];
    $password = $_POST['PASS'];
    $confirm = $_POST['CPASS'];
    $No_rekening = $_POST['transaksi'];
    $Jalmas = $_POST['optradio'];

//script ini untuk mengecek apakah form sudah terisi semua
if ($username&&$password&&$confirm&&$No_rekening) {
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
 mysql_query("INSERT INTO calon_mahasiswa_spmb (ID_JALMAS,NO_PENDAFTARAN,pass,conf_pass,Transaksi_pemb) VALUES ('$Jalmas','$username','$password','$confirm','$No_rekening')");
 echo "<script>window.open('Success-regis.php','_self')</script>";
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
 echo "Tolong penuhi form pendaftaran!";
 }
}
?>
</div>
</div>

	<footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
</body>
</html>