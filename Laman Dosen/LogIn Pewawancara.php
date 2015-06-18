<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <link href="LogIn Pewawancara.css" rel="stylesheet">
</head>

<body>
<center>
<h1>LogIn</h1>
<h4>Masukkan username dan password</h4>
</center>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
                  <center><div class="warn" style="color:#F00">
				  <?php
		
$con = mysql_connect('localhost','root','');
mysql_select_db("pmb",$con);  
  
if(isset($_POST['login-submit']))  
{  
    $Nomer=$_POST['User'];  
    $Pass=$_POST['Pass'];  
  
    $check_user="select USERNAME_WWNCR, PASSWORD_WWNCR from wawancara WHERE USERNAME_WWNCR='$Nomer' AND PASSWORD_WWNCR='$Pass'";  
  	
    $run=mysql_query($check_user,$con);  
  	
	if($Nomer=="" && $Pass==""){
		echo "Mohon diisi terlebih dahulu !!";
	}
	
    if(mysql_num_rows($run))  
    {  
       echo "<script>window.open('Laman Pewawancara/Laman Pewawancara.php','_self')</script>";
	}
    else  
    {  
       echo "Username dan password tidak valid !!"; 
    }  
}  
?>
</div></center>
						<div class="tab-pane active" id="login">
               			<form class="form-signin" action="Login Pewawancara.php" method="post">
               				<input type="text" name="User" class="form-control" placeholder="Username" required autofocus>
               				<input type="password" name="Pass" class="form-control" placeholder="Password" required>
               				<input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" name="login-submit"/>
               			</form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

	<footer style="margin-top:10px;">
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
    
</body>
</html>