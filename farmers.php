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
		<link rel="stylesheet" type="text/css" href="css/navigation.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/info.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<style>
	.modal-dialog{
    overflow-y: initial !important
}
.carousel-inner img {
      width: 100%;
      height: 100%;
  }

.modal-body{
    height: 250px;
    overflow-y: auto;
}
 </style>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body background="imags/bg-ptrn.jpg" style="padding:0px 200px;">

	<div class="container" style="background:#e6ffe6; padding:0 10px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">
		<header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
	
	<nav class="main-menue navbar sticky-top" style="margin-top:1px;display: block;">
			
			<ul class="navigatione">
				<li><a class="activenave navlnke" href="home1.php">Home</a></li>
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
				<li><a class="navlnke" href="marketinfo.php">Markets</a></li>
				<li><a class=" navlnke" href="farmers.php">Farmers</a></li>
        <li> <div id="google_translate_element"></div></li>
				<li><a class="lange"  href="logout.php">Logout</a></li>
				</ul>
	</nav>
	<br/>
        <?php
 if( $_SESSION['occupation']=="farmer")
 {
    echo"<div class='row'>
  <div class='col-sm-3'><a class='nav-link text-dark mr-sm-2 btn btn-outline-warning' id='upcra' href='farmer.php'> crops ratio</a></div>
  <div class='col-sm-5'> <a class='nav-link text-dark mr-sm-2 btn btn-info'  href='#' data-toggle='modal' data-target='#myModal'> complaint</a></div>
  <div class='col-sm-3'><a class='nav-link text-dark mr-sm-2 btn btn-outline-warning' id='upcr' href='cropsup.php'>update crops</a></div>
  </div>";
    }
 ?>
      <?php
 if( $_SESSION['occupation']=="marketer")
 {
    echo"<div class='row'>
  <div class='col-sm-5'><a class='nav-link text-dark mr-sm-2 btn btn-outline-warning' id='upcra' href='farmer.php'> crops ratio</a></div>
  <div class='col-sm-6'> <a class='nav-link text-dark mr-sm-2 btn btn-info'  href='#' data-toggle='modal' data-target='#myModal'> complaint</a></div>
  </div>";
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

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">complaint</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        	<form method="POST" action="complaint.php">
          <div class="form-group">
                           <textarea rows="5" cols="60" name="fcomplaint" required></textarea>
                     </div>
                     <div class="modal-footer">
           <input type="submit" class="btn btn-info btn-block" name="submit" value="submit">
        </div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>
  </div>
</body>
</html>