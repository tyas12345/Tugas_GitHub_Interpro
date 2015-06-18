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
</nav>

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<h1 style="margin-left:30px;">Pilihan Prodi Pertama</h1>
</head>
<body>

<form action="Pilihan1.php" method="post">
<div class="panel panel-default" style="width:75%; margin-top:20px; margin-left:40px;">
  <div class="panel-heading">
    <h3 class="panel-title">Pilih Fakultas</h3>
  </div>
  <div class="panel-body">
  
  <div class="form-group" style="width:40%;">
  <label for="sel1">Pilih Fakultas
  <select class="form-control" id="sel1" name="s_fak">
  <?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con);

  $search = mysql_query("SELECT * FROM fakultas");
  while ($row = mysql_fetch_array($search)) {
    $f1 = $row['ID_FAK'];
    $f2 = $row['NAMA_FAK'];
    echo "<option value=".$f1.">$f2</option>";
  }
  ?>
  </select></label>
  <input type="submit" name="sfak-submit" class="form-control btn btn-login" value="Search" style="width:20%; background-color:black; color:silver; margin-top:20px;"/>
  </div>  
  </div>
</div>

<div class="panel panel-default" style="width:75%; margin-top:20px; margin-left:40px;">
  <div class="panel-heading">
    <h3 class="panel-title">Pilih Jurusan</h3>
  </div>
  <div class="panel-body">
  <label>Pilih Jalur</label> <br>
        <label class="radio-inline"><input type="radio" name="optradio" value="112015">SPMB I</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="122015">SPMB II</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="132015">SPMB III</label> 

  <div class="form-group" style="width:40%;" id="jur">
  <label for="sel1">Pilih Jurusan</label>
  <select class="form-control" id="sel1" name="s_jur">
  <?php
  $con = mysql_connect('localhost','root','');
  mysql_select_db("pmb",$con);
  $sfak=$_POST['s_fak'];
  $searchj = mysql_query("SELECT * FROM jurusan WHERE ID_FAK='$sfak'");

  if(isset($_POST['sfak-submit'])){
  while ($rowj = mysql_fetch_array($searchj)) {
    $j1 = $rowj['ID_JURUSAN'];
    $j2 = $rowj['NAMA_JURUSAN'];
    echo "<option value=".$j1.">$j2</option>";
  }}
  ?>
  </select>
  <input type="submit" name="sjur-submit" class="form-control btn btn-login" value="Search" style="width:20%; background-color:black; color:silver; margin-top:20px;"/>
  </div>

  </div>
</div>

<div class="panel panel-default" style="width:75%; margin-top:20px; margin-left:40px;">
  <div class="panel-heading">
    <h3 class="panel-title">Pilih Prodi</h3>
  </div>
  <div class="panel-body">

	<div class="form-group">
    <label>Isi No.Pendaftaran anda</label>
    <input type="text" class="form-control" placeholder="Enter No.Pendaftaran" style="width:50%;" name="no_pendaft">
  	</div>

  	<div class="form-group" style="width:80%;">
  <label for="sel1">Pilihan Prodi</label>
  <table class="table table-striped">
            	<tr>
                	 <th>Pilih</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Nama Prodi</th>                
              </tr>
                 <?php
          $con = mysql_connect('localhost','root','');
					mysql_select_db("pmb",$con);

          if(isset($_POST['sjur-submit'])){
          $sjur=$_POST['s_jur'];
          $idjal=$_POST['optradio'];

			$inf = mysql_query("SELECT * FROM prodi_jalmas WHERE ID_JURUSAN='$sjur' AND ID_JALMAS='$idjal' AND stts_jal='Available'");

			if(mysql_num_rows($inf)){		
			while($rowu = mysql_fetch_array($inf)){
			$l1 = $rowu['ID_PRODI'];
            $l2 = $rowu['NAMA_JENJANG'];
            $l3 = $rowu['NAMA_PRODI'];

                echo "<tr>";
                	echo "<td><label class=radio-inline><input type=radio name=opt value=".$l1."></label></td>";
                	echo "<td>$l2</td>";
                	echo "<td>$l3</td>";
                echo "</tr>";
					}}
			else{
				echo "<br>"."Maaf pilihan anda tidak dapat di akses saat ini!!!";
			}
				}
				?>
   </table>  
        <input type="submit" name="pil-submit" class="form-control btn btn-login" value="Submit" style="width:20%; background-color:black; color:silver; margin-top:20px;"/>
   </div>
  </div>
</div>
<label style="margin-left:50px;">Pilih 'SUBMIT' untuk melanjutkan ke tahap berikutnya ----></label>
</form>

<?php
	$con = mysql_connect('localhost','root','');
					mysql_select_db("pmb",$con);

	if(isset($_POST['pil-submit'])){
		$nopendaft=$_POST['no_pendaft'];
		$pil1=$_POST['opt'];

    $dapat="SELECT * FROM pilihan_1";
    if(mysql_query($dapat)){
      $insert="INSERT INTO pilihan_1 VALUES ('$nopendaft','$pil1')";
      mysql_query($insert,$con);
    }
    
    echo "<script>window.open('Pilihan2.php','_self')</script>";
  }

?>

	<footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
            
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>