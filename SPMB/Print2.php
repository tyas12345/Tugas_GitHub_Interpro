<html>
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
  <div class="panel panel-default" style="width:70%; margin-left:20px;">
  <div class="panel-heading">
    <h3 class="panel-title">Masukkan No.Pendaftaran</h3>
  </div>
    <div class="panel-body">
    <form action="Print2.php" method="post">
    <div class="form-group" style="width:60%;">
        <label for="exampleInputEmail1">Nomer Pendaftaran :
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Pendaftaran" name="Nopendaf" style="width:400px;"></label>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="Searchp-button">Search</button>
    </div>
  </div>
</div>
</nav>

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>
<body>

	<div class="panel panel-default" style="width:90%; margin-left:50px;">
  		<div class="panel-body">
  			<div class="image">
  				<img src="../img/untitled-1_155.png" class="img-responsive" alt="Responsive image" style="float:left; width:100px; height:100px;">
  				<div class="judul" style="float:left; margin-left:120px;">
  				<h1>SPMB</h1>
  				<h4>(Universitas Negeri Surabaya)</h4>
  				</div>
  			</div>
  		</div>
	</div>

  <div class="panel panel-default" style="width:90%; margin-left:50px;">
      <div class="panel-body">
        <div class="image">
<?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con);

  if(isset($_POST['Searchp-button'])){
  $print=$_POST['Nopendaf'];
  $foto1="SELECT * FROM calon_mahasiswa_spmb WHERE NO_PENDAFTARAN='$print'";
  $foto=mysql_query($foto1,$con);

  $Qidjal="SELECT ID_JALMAS FROM calon_mahasiswa_spmb WHERE NO_PENDAFTARAN='$print'";
  $Qidjalm=mysql_query($Qidjal,$con);
  $baris=mysql_fetch_assoc($Qidjalm);
  $idjal=$baris['ID_JALMAS'];

  while($rowu = mysql_fetch_array($foto)){
      $l1 = $rowu['FOTO_SIS_SP'];
      $l2 = $rowu['NM_SISWA_SP'];
      $l3 = $rowu['NO_PENDAFTARAN'];
      $l4 = $rowu['ALAMAT_SIS_SP'];
      $l5 = $rowu['TMPT_LAHIR_SIS_SP'];
      $l6 = $rowu['TGL_LAHIR_SIS_SP'];
      $l7 = $rowu['Asal_Sek_SP'];
  }
?>
          <img src="<?php echo $l1;?>" class="img-responsive" alt="Responsive image" style="float:left; width:150px; height:200px;">
        </div>
         <div class="datasis" style="float:left; margin-left:20px;">
            <h4>NO. PENDAFTARAN : <?php echo $l3;?></h4>
            <h4>NAMA SISWA      : <?php echo $l2;?></h4>
            <h4>ALAMAT          : <?php echo $l4;?></h4>
            <h4>TEMPAT LAHIR    : <?php echo $l5;?></h4>
            <h4>TTL             : <?php echo $l6;?></h4>
            <h4>ASAL SEKOLAH    : <?php echo $l7;?></h4>
          </div>

<?php
?>
  </div>
  <div class="panel-body">
  <table class="table table-striped">
              <tr>
                   <th>Gelombang</th>
                    <th>Tanggal Pendaftaran</th> 
                    <th>Tanggal Ujian Tulis dan Wawancara</th>
                    <th>Tanggal Pengumuman</th>          
              </tr>
<?php
          $con = mysql_connect('localhost','root','');
          mysql_select_db("pmb",$con);

      $info = mysql_query("SELECT * FROM jalmas_spmb WHERE ID_JALMAS='$idjal'");

      if(mysql_num_rows($info)){   
      while($rowu = mysql_fetch_array($info)){
            $b1 = $rowu['GELOMBANG_SP'];
            $b2 = $rowu['TGL_PENDAFTARAN'];
            $b3 = $rowu['TGL_UJIAN_TULIS___WAWANCR'];
            $b4 = $rowu['TGL_PENGUMUMAN'];
        ?>

      <tr>
        <td><?php echo $b1?></td>
        <td><?php echo $b2?></td>
        <td><?php echo $b3?></td>
        <td><?php echo $b4?></td>
      </tr>
   </table>  
<?php
}}
?>
  </div>
</div>

<div class="panel panel-default" style="width:90%; margin-left:50px;">
    <div class="panel-body">
  <label>Pilihan</label>
  <table class="table table-striped" style="margin-top:20px;">
              <tr>
                   <th>Fakultas</th>
                    <th>Jurusan</th> 
                    <th>Prodi</th>       
              </tr>
<?php

      $infop1 = mysql_query("SELECT csp.NO_PENDAFTARAN, f.NAMA_FAK, j.NAMA_JURUSAN, je.NAMA_JENJANG, p.NAMA_PRODI
FROM calon_mahasiswa_spmb csp inner join pilihan_1 p1 on csp.NO_PENDAFTARAN=p1.NO_PENDAFTARAN 
inner join prodi p on p1.ID_PRODI=p.ID_PRODI inner join jenjang_pendidika je on p.ID_JENJANG=je.ID_JENJANG
inner join jurusan j on p.ID_JURUSAN=j.ID_JURUSAN inner join fakultas f on j.ID_FAK=f.ID_FAK WHERE csp.NO_PENDAFTARAN='$print'");

      if(mysql_num_rows($infop1)){   
      while($rowu = mysql_fetch_array($infop1)){
            $g1 = $rowu['NAMA_FAK'];
            $g2 = $rowu['NAMA_JURUSAN'];
            $g3 = $rowu['NAMA_JENJANG'];
            $g4 = $rowu['NAMA_PRODI'];
        ?>

      <tr>
        <td><?php echo $g1?></td>
        <td><?php echo $g2?></td>
        <td><?php echo $g3?> <?php echo $g4?> </td>
      </tr>
   </table>  
<?php
}}
?>
   </div>

<div class="panel-body">
  <table class="table table-striped" style="margin-top:20px;">
              <tr>
                   <th>Fakultas</th>
                    <th>Jurusan</th> 
                    <th>Prodi</th>       
              </tr>
<?php

      $infop2 = mysql_query("SELECT csp.NO_PENDAFTARAN, f.NAMA_FAK, j.NAMA_JURUSAN, je.NAMA_JENJANG, p.NAMA_PRODI
FROM calon_mahasiswa_spmb csp inner join pilihan_2 p2 on csp.NO_PENDAFTARAN=p2.NO_PENDAFTARAN 
inner join prodi p on p2.ID_PRODI=p.ID_PRODI inner join jenjang_pendidika je on p.ID_JENJANG=je.ID_JENJANG
inner join jurusan j on p.ID_JURUSAN=j.ID_JURUSAN inner join fakultas f on j.ID_FAK=f.ID_FAK WHERE csp.NO_PENDAFTARAN='$print'");

      if(mysql_num_rows($infop2)){   
      while($rowu = mysql_fetch_array($infop2)){
            $e1 = $rowu['NAMA_FAK'];
            $e2 = $rowu['NAMA_JURUSAN'];
            $e3 = $rowu['NAMA_JENJANG'];
            $e4 = $rowu['NAMA_PRODI'];
        ?>

      <tr>
        <td><?php echo $e1?></td>
        <td><?php echo $e2?></td>
        <td><?php echo $e3?> <?php echo $e4?> </td>
      </tr>
   </table>  
<?php
}}}
?>  
  </div>
</div>
</body>
</html>