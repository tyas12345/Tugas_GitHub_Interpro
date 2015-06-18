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
        <link href="css/full-slider.css" rel="stylesheet">
        <link href="LogIn Pewawancara.css" rel="stylesheet">
        
</head>
<body>
	<div class="page-header">
    	<img src="../img/header.jpg" style="width:1100px;">
	</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center><div class="carousel-inner" role="listbox">
    <div class="item active">
    	<div class="jumbotron" ">
     		 <div class="left" style="color:#333;">
      		<h1>Laman Pewawancara</h1>
      		<p>Login terlebih dahulu</p>
      <p><a class="btn btn-primary btn-lg" href="LogIn Pewawancara.php" role="button" style="color:#FFF;">LogIn</a></p>
      	</div>
   	 </div>
    </div> 

    <div class="item">
    <div class="jumbotron">
     		 <div class="left" style="color:#333;;">
      		<h1>Laman Kaprodi</h1>
      		<p>LogIn terlebih dahulu</p>
          <p><a class="btn btn-primary btn-lg" href="LogIn Kaprodi.php" role="button" style="color:#FFF;">LogIn</a></p>
      	</div>
   	 </div>
    </div>
  </div></center>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>


	<script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
            
</body>
</html>