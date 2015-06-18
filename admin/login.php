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
	<link href="login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        	<form action="login.php" method="post">
            <div class="form-login">
            <h4>LOGIN</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username"/>
            </br>
            <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password"/>
            </br>
            <div class="wrapper">
            <span class="group-btn">     
            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit" style="background-color:black; color:silver; margin-top:20px;">
            </span>
            </div>
            </div>
        	</form>
        </div>
    </div>
</div>
</body>
<?php
	$con = mysql_connect('localhost','root','');
  	mysql_select_db("pmb",$con);

  	if(isset($_POST['login-submit'])){
  		$user = $_POST['username'];
  		$pass = $_POST['password'];

  		$checkadmin="SELECT username, pass from admin WHERE username='$user' AND pass='$pass' ";

  		$run=mysql_query($checkadmin,$con);  
  	
	if($user=="" && $pass==""){
		echo "Mohon diisi terlebih dahulu";
	}
	
    if(mysql_num_rows($run))  
    {  
       echo "<script>window.open('halaman_admin.php','_self')</script>";
	}
    else  
    {  
       echo "<script>alert('username dan password tidak valid!!!')</script>"; 
    }
}
?>
</html>