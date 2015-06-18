<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<div class="page-header">
    	<img src="../img/header.jpg" style="width:1100px;">
	</div>
</head>
<body>
<div class="container" style="margin-top:50px;">
	<ul class="nav nav-tabs">
  		<li role="presentation" class="active"><a href="#JSP" data-toggle="tab">SNMPTN</a></li>
  		<li role="presentation"><a href="#Pend" data-toggle="tab">SBMPTN</a></li>
	</ul>

<div class="tab-content">
    	<div class="tab-pane fade in active" id="JSP">
    		<h1>Pengumuman SNMPTN</h1>
         <h3>Masukkan NISN di bawah ini</h3>
          <div class="panel-body">
            <form method="post" action="index.php">  
              <input type="text" id="userName" class="form-control input-sm chat-input" name="peng" placeholder="Masukkan NISN" style="width:40%;"/>
              <input type="submit" name="pengsn-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Search" style="width:30%; background-color:#0CF; margin-top:20px;">
            </form>
<?php
$con = mysql_connect('localhost','root','');
mysql_select_db("pmb",$con); 

if(isset($_POST['pengsn-submit']))  
{  
    $Nomer_peng=$_POST['peng']; 
    
    $run=mysql_query("select NISN_SN from mahasiswa_snmptn WHERE NISN_SN='$Nomer_peng'");  
    
  if($Nomer_peng==""){
    echo "Mohon diisi terlebih dahulu";
  }
  else{
    if(mysql_num_rows($run))  
    {  
       echo "<h1>Selamat anda lolos</h1><br>";
       $ketrima =  mysql_query("SELECT * FROM mahasiswa_snmptn WHERE NISN_SN='$Nomer_peng'");
       while($row = mysql_fetch_array($ketrima)){
            $g1 = $row['NIM_SN_SB'];
            $g2 = $row['NM_SIS_SN'];
            $g3 = $row['MASUK_JALUR_SN_SB'];
            $g4 = $row['NAMA_JENJANG'];
            $g5 = $row['NAMA_PRODI'];
?>            
          <p>NIM : <?php echo $g1 ?><br>     
          Nama : <?php echo $g2 ?><br>
          Masuk Jalur : <?php echo $g3 ?><br>
          Prodi : <?php echo $g4?> <?php echo $g5?></p><br>

          <p style="color:red;">(!) Silahkan melakukan daftar ulang.</p>
<?php
   }
    }
    else  
    {  
       echo "Maaf anda belum lolos"; 
    }  
  }
}
?>
          </div>
      </div>
    	<div class="tab-pane fade" id="Pend">
        <h1>Pengumuman SBMPTN</h1>
         <h3>Masukkan NISN di bawah ini</h3>
          <div class="panel-body">
            <form method="post" action="index.php">  
              <input type="text" id="userName" class="form-control input-sm chat-input" name="peng_sb" placeholder="Masukkan NISN" style="width:40%;"/>
              <input type="submit" name="pengsb-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Search" style="width:30%; background-color:#0CF; margin-top:20px;">
            </form>
<?php
$con = mysql_connect('localhost','root','');
mysql_select_db("pmb",$con); 

if(isset($_POST['pengsb-submit']))  
{  
    $NISN_peng=$_POST['peng_sb']; 
    
    $runsb=mysql_query("SELECT NISN_SN FROM mahasiswa_sbmptn WHERE NISN_SN='$NISN_peng'");  
    
  if($NISN_peng==""){
    echo "Mohon diisi terlebih dahulu";
  }
  else{
    if(mysql_num_rows($runsb))  
    {  
       echo "<h1>Selamat anda lolos</h1><br>";
       $ketrima_sb =  mysql_query("SELECT * FROM mahasiswa_sbmptn WHERE NISN_SN='$NISN_peng'");
       while($row = mysql_fetch_array($ketrima_sb)){
            $h1 = $row['NIM_SN_SB'];
            $h2 = $row['NM_SIS_SN'];
            $h3 = $row['MASUK_JALUR_SN_SB'];
            $h4 = $row['NAMA_JENJANG'];
            $h5 = $row['NAMA_PRODI'];
?>            
          <p>NIM : <?php echo $h1 ?><br>     
          Nama : <?php echo $h2 ?><br>
          Masuk Jalur : <?php echo $h3 ?><br>
          Prodi : <?php echo $h4?> <?php echo $h5?>
          </p><br>

          <p style="color:red;">(!) Silahkan melakukan daftar ulang.</p>
<?php
   }
    }
    else  
    {  
       echo "Maaf anda belum lolos"; 
    }  
  }
}
?>
          </div>
    	</div>
</div>
</div>

	   <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>