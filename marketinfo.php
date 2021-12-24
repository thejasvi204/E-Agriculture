
<?php
   session_start();
 ob_start();
 ?>
  <?php
  	if (empty($_SESSION['uname']))
   {
    header("location:login20.php");
  }
     ?>
 <!DOCTYPE html>
<html>
	<head>
	<style>
	.carousel-inner img {
      width: 100%;
      height: 100%;
  }
	    li{
		   list-style-type:none;}
		   
		#navbardrop{
		width:200px;
		margin-top:5px;
		margin-left:20px;}
		
		#upra{
		width:200px;
		margin-left:680px;
		margin-top:-44px;}
		
		   
     </style>
		 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		<link rel="stylesheet" type="text/css" href="css/navigation.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/info.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	
	<body  background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
	
	
	
	
	<div class="container" style="background:#e6ffe6; padding:0 17px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">

	<header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
	
	<nav class="main-menue" style="margin-top:1px;display: block;">
			
			<ul class="navigatione">
				<li><a class="navlnke" href="home1.php">Home</a></li>
				<div class="dropdowne">
    <button class="dropbtne">Agriculture
      
    </button>
    <div class="dropdown-contente">
      <a class="drplnke" href="crops.php">Crops</a>
      <a class="drplnke" href="fertilizers.php">Fertilizers</a>
      <a class="drplnke" href="diseases.php">Diseases</a>
    </div>
  </div> 
    <div class="dropdowne"> 
   <button class="dropbtne">soil
      
    </button>
    <div class="dropdown-contente">
      <a class="drplnke" href="black.php">Black</a>
      <a class="drplnke" href="red.php">Red</a>
      <a class="drplnke" href="alluvial.php">Alluvial</a>
      <a class="drplnke" href="lateristic.php">Lateritic</a>
     
    </div>
    </div>
				<li><a class="activenave navlnke" href="marketinfo.php">Markets</a></li>
				<li><a class="navlnke" href="farmers.php">Farmers</a></li>
				<li> <div id="google_translate_element"></div></li>
			    <li><a class="lange"  href="logout.php">Logout</a></li>
			</ul>
	</nav>
	
      <a class="nav-link dropdown-toggle text-danger mr-sm-2 btn btn-outline-warning" href="#" id="navbardrop" data-toggle="dropdown">
        MARKET
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item text-success   " href="tenalirates.php">TENALI</a>
        <a class="dropdown-item text-success " href="gunturrates.php">GUNTUR</a>
        <a class="dropdown-item text-success  " href="tenalirates.php">PONNUR</a>
      </div>
	      <?php
 if( $_SESSION['occupation']=="marketer")
 {
    echo"<a class='nav-link text-dark mr-sm-2 btn btn-outline-warning' id='upra' href='ratesupdate.php'>update rates</a>";
 }
 ?>
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/corn.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/paddy.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/sugarcane.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	</div>
</body>
</html>
   