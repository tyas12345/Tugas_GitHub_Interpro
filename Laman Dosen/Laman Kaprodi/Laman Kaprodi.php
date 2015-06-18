<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Penerimaan Mahasiswa Baru</title>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../1/index.html">Home</a>
    </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div><button type="submit" class="btn btn-default">Submit</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Admin</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="panel panel-default" style="margin-left:30px; width:70%;">
  <div class="panel-body">
    <h1>Pilih Jalur Masuk</h1>
    <form action="Laman Kaprodi.php" method="post">
      <div class="form-group" style="width:60%;"></label>
        <button type="submit" class="btn btn-primary" style="float:left; margin-top:10px; margin-right:30px;" name="Searchsn-button">SNMPTN</button>
        <button type="submit" class="btn btn-primary" style="float:left; margin-top:10px;" name="Searchsb-button">SBMPTN</button>
      </div>
    </form>
  </div>
</div>

<div class="tab-content" style="padding:40px;">
      <div class="tab-pane fade in active" id="JSP">
          <h1>Daftar Mahasiswa</h1>
            <table class="table table-striped">
              <tr>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Alamat Siswa</th>
                    <th>Asal Sekolah</th>
                    <th>Jalur Masuk</th>
                    <th>Foto Siswa</th>
                    <th>Sertifikat</th>
                </tr>
<?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con); 
  $Searchj;
if(isset($_POST['Searchsn-button'])){
       $Searchsn =  mysql_query("SELECT NISN_SN, NM_SIS_SN, ALAMAT_SIS_SN, Asal_Sek_Sn_Sb, MASUK_JALUR_SN_SB,
    FOTO_SIS_SN, SERTIFIKAT_SIS_SN from calon_mahasiswa_sn_sb WHERE MASUK_JALUR_SN_SB='SNMPTN'");
       $Searchj=$Searchsn;
}
else if(isset($_POST['Searchsb-button'])){
       $Searchsb =  mysql_query("SELECT NISN_SN, NM_SIS_SN, ALAMAT_SIS_SN, Asal_Sek_Sn_Sb, MASUK_JALUR_SN_SB,
    FOTO_SIS_SN, SERTIFIKAT_SIS_SN from calon_mahasiswa_sn_sb WHERE MASUK_JALUR_SN_SB='SBMPTN'");
       $Searchj=$Searchsb;
}

if(isset($_POST['Searchsn-button'])||isset($_POST['Searchsb-button'])){
       while($row = mysql_fetch_array($Searchj)){
            $d1 = $row['NISN_SN'];
            $d2 = $row['NM_SIS_SN'];
            $d3 = $row['Asal_Sek_Sn_Sb'];
            $d4 = $row['MASUK_JALUR_SN_SB'];
            $d5 = $row['FOTO_SIS_SN'];
            $d6 = $row['SERTIFIKAT_SIS_SN'];
            $d7 = $row['ALAMAT_SIS_SN'];
?>
                <tr>
                  <td><?php echo $d1?></td>
                  <td><?php echo $d2?></td>
                  <td><?php echo $d7 ?></td>
                  <td><?php echo $d3 ?></td>
                  <td><?php echo $d4 ?></td>
                  <td><?php echo $d5 ?></td>
                  <td><?php echo $d6 ?></td>
                </tr>
<?php
}}
?>
   </table>
 </div>
</div>

    <footer style="margin-top:10px;">
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>


  <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
  
    <!-- Script to Activate the Carousel -->
    <script>
    $('.dropdown-toggle').dropdown();
    </script>
</body>
</html>