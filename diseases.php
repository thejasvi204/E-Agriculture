<?php
session_start();
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
    </head>
	
	<body  background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
	
	
	
	
	<div class="containere" style="background:#e6ffe6; padding:0 17px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">

	<header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
	
	<nav class="main-menue navbar  sticky-top" style="margin-top:1px;display: block;">
			
			<ul class="navigatione">
				<li><a class="navlnke" href="home1.php">Home</a></li>
				<div class="dropdowne">
    <button id="activenave" class="dropbtne">Agriculture
     
    </button>
    <div class="dropdown-contente">
      <a class="drplnke" href="crops.php" target="iframeagr">Crops</a>
      <a class="drplnke" href="fertilizers.php">Fertilizers</a>
      <a class="drplnke" href="diseases.php" target="iframeagr">Diseases</a>
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
				<li><a class="navlnke" href="marketinfo.php">Markets</a></li>
				<li><a class="navlnke" href="farmers.php">Farmers</a></li>
				<li> <div id="google_translate_element"></div></li>
			    <li><a class="lange"  href="logout.php">logout</a></li>
			</ul>
	</nav>


<body>
<div class="tblnk">
		   <h3 style="margin-left:20px;">Diseases</h3> 
		   <hr/>
		   <ul>
		   <li><a class="cropinfo" href="maize.php" target="iframedi">maize</a></li>
		   <li><a class="cropinfo" href="cotton.php" target="iframedi">cotton</a></li>
		   <li><a class="cropinfo" href="paddy.php" target="iframedi">paddy</a></li>
		</div>   
		 
        <div class="displnk">
		  <iframe class="iframedi" name="iframedi"><iframe>		  
		</div>
		
</body>
</html>