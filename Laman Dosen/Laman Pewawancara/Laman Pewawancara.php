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
    <form action="Laman Pewawancara.php" method="post">
      <div class="form-group" style="width:60%;">
        <label for="exampleInputEmail1">NIP :
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter NIP" name="T_NIP" style="width:400px;"></label>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="Searchw-button">Search</button>
      </div>
    </form>
     <div class="tab-content">
      <div class="tab-pane fade in active" id="JSP">
          <h1>Daftar Mahasiswa</h1>
            <table class="table table-striped">
              <tr>
                    <th>Nomer Pendaftaran</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Wawancara</th>
                </tr>
<?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con); 

if(isset($_POST['Searchw-button'])){

  $NIP=$_POST["T_NIP"];

       $Search =  mysql_query("SELECT NIP, NO_PENDAFTARAN, NM_SISWA_SP, NILAI_WWNCR_SP from pelaksanaan_wawancara WHERE NIP='$NIP'");
       while($row = mysql_fetch_array($Search)){
            $c1 = $row['NO_PENDAFTARAN'];
            $c2 = $row['NM_SISWA_SP'];
            $c3 = $row['NILAI_WWNCR_SP'];
?>
              <form action="Laman Pewawancara.php" method="post">
                <tr>
                  <td><?php echo $c1?></td>
                  <td><?php echo $c2?></td>
                  <td><?php echo $c3 ?></td>
                </tr>
              </form>
<?php
}}
?>
   </table>
 </div>
</div>
  </div>
</div>

<div class="panel panel-default" style="margin-left:30px; width:70%;">
  <div class="panel-body">
    <form action="Laman Pewawancara.php" method="post">
      <div class="form-group" style="width:60%;">
        <label for="exampleInputEmail1">Nomer Pendaftaran :
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Pendaftaran" name="T_Update" style="width:400px;"></label>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="Searchu-button">Search</button>
      </div>
    </form>
    <h1>Update</h1>
<?php
if(isset($_POST['uptodate'])){
    $Qupdate = "UPDATE calon_mahasiswa_spmb SET NILAI_WWNCR_SP='$_POST[Nilai_S]' WHERE NO_PENDAFTARAN='$_POST[NPD_1]'";
    mysql_query($Qupdate,$con); 
}

if(isset($_POST['Searchu-button'])){
  $update=$_POST['T_Update'];

  $data=mysql_query("SELECT NO_PENDAFTARAN, NM_SISWA_SP, NILAI_WWNCR_SP from pelaksanaan_wawancara WHERE NO_PENDAFTARAN='$update'");
  while($row = mysql_fetch_array($data)){
            $b1 = $row['NO_PENDAFTARAN'];
            $b2 = $row['NM_SISWA_SP'];
            $b3 = $row['NILAI_WWNCR_SP'];
  }
?>
              <form action="Laman Pewawancara.php" method="post" style="width:70%;">
                  <p>No.Pendaftaran : <input type="text" class="form-control" id="exampleInputEmail1" name="NPD_1" value=<?php echo $b1 ?>></p>
                  <p>Nama : <input type="text" class="form-control" id="exampleInputEmail1" name="Nama_S" value=<?php echo $b2 ?>></p>
                  <p>Nilai : <input type="text" class="form-control" id="exampleInputEmail1" name="Nilai_S" value=<?php echo $b3 ?>></p>
                  <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="uptodate">Update</button>
              </form>
<?php
}
?>
</div>
</div>
    <footer style="margin-top:10px;">
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
</body>
</html>