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
<h1 style="margin-left:30px;">Form Pendaftaran</h1> 

<div class="container" style="margin-top:20px;">
  <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#JSP" data-toggle="tab">Data Siswa</a></li>
      <li role="presentation"><a href="#Pend" data-toggle="tab">Data Orang Tua</a></li>
  </ul>  


<form action="Form Pendaftaran.php" enctype="multipart/form-data" method="post">
<div class="tab-content">
      <div class="tab-pane fade in active" id="JSP">
<div class="panel panel-default" style="width:75%; margin-top:20px;">
  <div class="panel-heading">
    <h3 class="panel-title">Data Mahasiswa</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
    <label>No.Pendaftaran</label>
    <input type="text" class="form-control" placeholder="Enter No.Pendaftaran" style="width:50%;" name="No_pend">
  </div>
    <div class="form-group">
    <label>NISN</label>
    <input type="text" class="form-control" placeholder="Enter NISN" style="width:50%;" name="NISN_sis">
  </div>
  <div class="form-group">
    <label>Nama Siswa</label>
    <input type="text" class="form-control" placeholder="Enter Nama" style="width:50%;" name="Nama_sis">
  </div>
  <label>Jenis Kelamin</label> <br>
  <label class="radio-inline"><input type="radio" name="optradio" value="L">Laki-laki</label>
  <label class="radio-inline"><input type="radio" name="optradio" value="P">Perempuan</label>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" placeholder="Enter Alamat" style="width:50%;" name="Alamat_sis">
  </div>
  <div class="form-group">
    <label>Telepon</label>
    <input type="text" class="form-control" placeholder="Enter Telepon" style="width:50%;" name="Tlp_sis">
  </div>
  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" placeholder="Enter Tempat Lahir" style="width:50%;" name="Tmpt_sis">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <p>format pengisian : yyyy-mm-dd </p>
    <input type="text" class="form-control" placeholder="Enter Tanggal Lahir" style="width:50%;" name="Ttl_sis">
  </div>
  <div class="form-group">
    <label>Agama</label>
    <input type="text" class="form-control" placeholder="Enter Agama" style="width:50%;" name="Agama_sis">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Foto Siswa</label>
    <input type="file" id="exampleInputFile" name="Foto_sis">
    <p class="help-block">Masukkan foto anda.</p>
  </div>
  <div class="form-group">
    <label>Asal Sekolah</label>
    <input type="text" class="form-control" placeholder="Enter Asal Sekolah" style="width:50%;" name="Asal_sek_sis">
  </div>
  <div class="form-group">
    <label>Tahun Lulus</label>
    <input type="text" class="form-control" placeholder="Enter Tahun Lulus" style="width:50%;" name="Tahun_sis">
  </div>
  <div class="form-group">
    <label>Nilai Akhir</label>
    <input type="text" class="form-control" placeholder="Enter Nilai Akhir" style="width:50%;" name="NilaiA_sis">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Sertifikat</label>
    <input type="file" id="exampleInputFile" name="sertif">
    <p class="help-block">Masukkan foto sertifikat bila ada.</p>
  </div>
  <label>Isi form selanjutnya ----></label>
</div>
</div></div>

<div class="tab-pane fade" id="Pend">
<div class="panel panel-default" style="width:75%; margin-top:20px;">
  <div class="panel-heading">
    <h3 class="panel-title">Data Orang Tua</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
    <label>Nama Orang Tua</label>
    <input type="text" class="form-control" placeholder="Enter Nama" style="width:50%;" name="Nm_Ortu">
  </div>
  <div class="form-group">
    <label>Pekerjaan Orang Tua</label>
    <input type="text" class="form-control" placeholder="Enter Pekerjaan" style="width:50%;" name="Peker_Ortu">
  </div>
  <div class="form-group">
    <label>Gaji Orang Tua</label><br>
    <p>Rp :<input type="text" class="form-control" placeholder="Enter Gaji" style="width:50%;" name="Gaji_Ortu"></p>
  </div>
  <div class="form-group">
    <label>Telepon Orang Tua</label>
    <input type="text" class="form-control" placeholder="Enter Telepon" style="width:50%;" name="Tlp_Ortu">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir Orang Tua</label>
    <p>format pengisian : yyyy-mm-dd </p>
    <input type="text" class="form-control" placeholder="Enter Tanggal" style="width:50%;" name="Ttl_Ortu">
    <input type="submit" name="subform-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit" style="width:20%; background-color:black; color:silver; margin-top:20px;">
    </div>
    <label>Pilih 'SUBMIT' untuk melanjutkan ke tahap pemilihan prodi ----></label>
</div>
</div></div>
</form>
</div>
<?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con); 

  if(isset($_POST['subform-submit'])){
    $no_pend=$_POST['No_pend'];
    $nisn=$_POST['NISN_sis'];
    $nm_sis=$_POST['Nama_sis'];
    $jenkel_sis=$_POST['optradio'];
    $alamat_sis=$_POST['Alamat_sis'];
    $tlp_sis=$_POST['Tlp_sis'];
    $tmptlhr_sis=$_POST['Tmpt_sis'];
    $ttl_sis=$_POST['Ttl_sis'];
    $agama_sis=$_POST['Agama_sis'];
    
    $nama_foto=$_FILES['Foto_sis']['name'];
    $tmp_foto=$_FILES['Foto_sis']['tmp_name'];

    $asalsek_sis=$_POST['Asal_sek_sis'];
    $thlul_sis=$_POST['Tahun_sis'];
    $nila_sis=$_POST['NilaiA_sis'];

    $nama_sertif=$_FILES['sertif']['name'];
    $tmp_sertif=$_FILES['sertif']['tmp_name'];

    $nm_ortu=$_POST['Nm_Ortu'];
    $pekerj_ortu=$_POST['Peker_Ortu'];
    $gj_ortu=$_POST['Gaji_Ortu'];
    $telp_ortu=$_POST['Tlp_Ortu'];
    $ttl_ortu=$_POST['Ttl_Ortu'];

if($nisn&&$no_pend&&$nm_sis&&$jenkel_sis&&$alamat_sis&&$tlp_sis&&$tmptlhr_sis&&$ttl_sis&&$agama_sis&&$thlul_sis&&$nila_sis&&$nm_ortu&&$pekerj_ortu&&$gj_ortu&&$telp_ortu&&$ttl_ortu&&$asalsek_sis){
    
    $Qinsert="UPDATE calon_mahasiswa_spmb SET NISN_SP='$nisn' ,NM_SISWA_SP='$nm_sis', JENKEL_SP='$jenkel_sis',ALAMAT_SIS_SP='$alamat_sis', TLP_SISWA_SP='$tlp_sis', TMPT_LAHIR_SIS_SP='$tmptlhr_sis', TGL_LAHIR_SIS_SP='$ttl_sis', AGAMA_SP='$agama_sis', FOTO_SIS_SP='$nama_foto', TAHUN_LULUS_SP='$thlul_sis', NILAI_AKHIR_SP='$nila_sis', SERTIFIKAT_SP='$nama_sertif', NM_ORTU_SP='$nm_ortu', PEKERJAAN_ORTU_SP='$pekerj_ortu', GAJI_ORTU_SP='$gj_ortu', TLP_ORTU_SP='$telp_ortu', TTL_ORTU_SP='$ttl_ortu', Asal_Sek_SP='$asalsek_sis' WHERE NO_PENDAFTARAN = '$no_pend'";  
    mysql_query($Qinsert,$con);
    move_uploaded_file($tmp_foto, '../img/'.$nama_foto);
    move_uploaded_file($tmp_sertif, '../img/'.$nama_sertif);
    echo "<script>window.open('Pilihan1.php','_self')</script>";
  }
else {
  echo "<p style='color:red'>Tolong di periksa lagi data anda mungking ada yang terlewatkan</p>";
}
}
?>
	<footer style="margin-top:10px;">
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>