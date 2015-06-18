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
</head>
<body>
<div class="container" style="margin-top:20px;">
  	<ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#JSP" data-toggle="tab">Edit jadwal SPMB</a></li>
      <li role="presentation"><a href="#Pend" data-toggle="tab">Input Nilai Ujian Tulis</a></li>
      <li role="presentation"><a href="#wawan" data-toggle="tab">Edit Wawancara</a></li>
  	</ul>

   	<form action="halaman_admin.php" method="post">
  	<div class="tab-content">
    	<div class="tab-pane fade in active" id="JSP">
    		<h1>Jadwal SPMB</h1>
    			<table class="table table-striped">
            	<tr>
                	<th>Gelombang SPMB</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Tanggal Ujian Tulis-Wawancara</th>
                    <th>Tanggal Pengumuman</th>
                    <th>Status</th>
                </tr>
                <?php
                	$con = mysql_connect('localhost','root','');
					mysql_select_db("pmb",$con);
					$jadwal = mysql_query("SELECT jm.GELOMBANG_SP, j.ID_JENJANG, jm.TGL_PENDAFTARAN, jm.TGL_UJIAN_TULIS___WAWANCR, jm.TGL_PENGUMUMAN, jm.stts_jal FROM jalmas_spmb jm inner join jenjang_pendidika j on jm.ID_JENJANG = j.ID_JENJANG");
					
					while($row = mysql_fetch_array($jadwal)){
						$f1 = $row['GELOMBANG_SP'];
						$f2 = $row['ID_JENJANG'];
						$f3 = $row['TGL_PENDAFTARAN'];
						$f4 = $row['TGL_UJIAN_TULIS___WAWANCR'];
						$f5 = $row['TGL_PENGUMUMAN'];
            			$f6 = $row['stts_jal'];
				?>
				<tr>
                	<td><?php echo $f1?></td>
                	<td><?php echo $f2?></td>
                	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $f3 ?>"/></td>
                	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $f4 ?>"/></td>
                	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $f5 ?>"/></td>
                  	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $f6 ?>"/></td>
                  	<td><input class="btn btn-default" type="submit" value="Update"></td>
                  	<td><input class="btn btn-default" type="submit" value="Delete"></td>
                </tr>
                <?php 
					}
				?>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
					<td><input type="text" class="form-control" id="exampleInputEmail1"/></td>
                  	<td><input class="btn btn-default" type="submit" value="ADD"></td>
            	</table>
    	</div>
    	<div class="tab-pane fade" id="Pend">
    		<h1>Input Nilai</h1>
    		<table class="table table-striped">
            	<tr>
                	<th>No.Pendaftaran</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Ujian Tulis</th>
                </tr>
                <?php
                	$con = mysql_connect('localhost','root','');
					mysql_select_db("pmb",$con);
					$jadwal = mysql_query("SELECT * FROM calon_mahasiswa_spmb");
					
					while($row = mysql_fetch_array($jadwal)){
						$j1 = $row['NO_PENDAFTARAN'];
						$j2 = $row['NM_SISWA_SP'];
						$j3 = $row['NILAI_UJIAN_TULIS_SP'];
				?>
				<tr>
                	<td><?php echo $j1?></td>
                	<td><?php echo $j2?></td>
                	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $j3 ?>" style="width:50px;"/></td>
                	<td><input class="btn btn-default" type="submit" value="Update"></td>
                </tr>
                <?php 
					}
				?>
			</table>
    	</div>
    	<div class="tab-pane fade" id="wawan">
    		<h1>Edit Wawancara</h1>
    		<table class="table table-striped">
            	<tr>
                	<th>No.Pendaftaran</th>
                    <th>Nama Siswa</th>
                    <th>ID_WAWANCARA</th>
                </tr>
                <?php
                	$con = mysql_connect('localhost','root','');
					mysql_select_db("pmb",$con);
					$jadwal = mysql_query("SELECT * FROM calon_mahasiswa_spmb");
					
					while($row = mysql_fetch_array($jadwal)){
						$j1 = $row['NO_PENDAFTARAN'];
						$j2 = $row['NM_SISWA_SP'];
						$j3 = $row['ID_WAWANCARA'];
				?>
				<tr>
                	<td><?php echo $j1?></td>
                	<td><?php echo $j2?></td>
                	<td><input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $j3 ?>" style="width:90px;"/></td>
                	<td><input class="btn btn-default" type="submit" value="Update"></td>
                </tr>
                <?php 
					}
				?>
			</table>
    	</div>
    </div>
</form>
</div>

	<script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>