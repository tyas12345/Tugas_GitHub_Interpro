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

   <div class="jumbotron">
      <div class="left" style="margin-left:50px; color:#0FF;">
      <h1>Selamat anda telah terdaftar sebagai calon mahasiswa UNESA</h1>
      <p>Silahkan pilih button dibawah untuk print kartu peserta</p>
      <a href="Print2.php"><button type="submit" class="btn btn-primary" name="Searchu-button">Print</button></a>
    </div>
      </div>
    </div>

<div class="panel panel-default" style="width:70%; margin-left:30px;">
  <div class="panel-heading">
    <h3 class="panel-title">Search No.Pendaftaran apakah sudah terdaftar</h3>
  </div>
  	<div class="panel-body">
  	<form action="Print.php" method="post">
  	<div class="form-group" style="width:60%;">
        <label for="exampleInputEmail1">Nomer Pendaftaran :
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Pendaftaran" name="Nopend" style="width:400px;"></label>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top:20px;" name="Searchu-button">Search</button>
    </div>
  </div>
</div>

</head>
<body>
<center>
	<div class="panel panel-default" style="width:90%;">
  		<div class="panel-body">
  			<div class="image">
  				<img src="../img/untitled-1_155.png" class="img-responsive" alt="Responsive image" style="float:left; width:100px; height:100px;">
  				<div class="judul" style="float:left; margin-left:30%;">
  				<h1>SPMB</h1>
  				<h4>(Universitas Negeri Surabaya)</h4>
  				</div>
  			</div>
        <div class="form-group" style="width:80%;">
  <table class="table table-striped" style="margin-top:20px;">
              <tr>
                   <th>No.Pendaftaran</th>
                    <th>Nama Siswa</th>
                    <th>Asal Sekolah</th> 
                    <th>Gelombang</th> 
                    <th>Pilihan 1</th> 
                    <th>Pilihan 2</th>           
              </tr>
                 <?php
          $con = mysql_connect('localhost','root','');
          mysql_select_db("pmb",$con);

          if(isset($_POST['Searchu-button'])){
          $nopend=$_POST['Nopend'];

      $inf = mysql_query("SELECT * FROM data_pendaftaran_sp WHERE NO_PENDAFTARAN='$nopend'");

      if(mysql_num_rows($inf)){   
      while($rowu = mysql_fetch_array($inf)){
            $l1 = $rowu['NO_PENDAFTARAN'];
            $l2 = $rowu['NM_SISWA_SP'];
            $l3 = $rowu['ASAL_SEK_SP'];
            $l4 = $rowu['GELOMBANG_SP'];
            $l5 = $rowu['Pil_1'];
            $l6 = $rowu['Pil_2'];

            echo "<form action=Print2.php method=post>";
                echo "<tr>";
                  echo "<td>$l1</td>";
                  echo "<td>$l2</td>";
                  echo "<td>$l3</td>";
                  echo "<td>$l4</td>";
                  echo "<td>$l5</td>";
                  echo "<td>$l6</td>";
                echo "</tr>";
            echo "</form>";
          }}
        }
        ?>
   </table>  
   </div>
  		</div>
	</div>
</center>

</form>
</body>
</html>