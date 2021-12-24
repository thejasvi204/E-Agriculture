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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	
	<body  background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
	
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
	
	<div class="container" style="background:#e6ffe6; padding:0 10px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">

	<header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
	
	<nav class="main-menue navbar sticky-top" style="margin-top:1px;display: block;">
			
			<ul class="navigatione">
				<li><a class="activenave navlnke " href="home1.php">Home</a></li>
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
				<li><a class="navlnke" href="farmers.php">Farmers</a></li>
	
                    <li> <div> <button id="google_translate_element"></button></div></li>


			    <li><a class="lange"  href="logout.php">Logout</a></li>
			</ul>
	</nav>


	   

<div class="homee" id="homee">
<iframe src="slideshow.php" class="iframea" name="iframea" scrolling="no">	</iframe>  


<div class="news">
  <fieldset class="newsf">
   <legend><img src="imags/news.png" style="height:30px; width:50px;"></legend>
   
   <marquee scrolldelay="100" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" style="color:green;">news</marquee>
   </fieldset>
</div>

<div class="info">
   
   
   <a class="infoa" onclick="document.getElementById('id01').style.display='block'">
    Technological Innovations in Agriculture 
	 </a>
	  <div id="id01" class="modal">
  
      <div class="modal-content animate">
	 
	    <span><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></span>
       
	   <div class="container">
         <iframe class="iframeb" src="agrotech.php" name="iframeb"></iframe>
	   </div>
</div>
</div>




	   <a class="infob" onclick="document.getElementById('id02').style.display='block'">
	   Drones in agriculture
	   </a>
	   
	  <div id="id02" class="modal">
  
      <div class="modal-content animate">
	 
	    <span><button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button></span>
       
	   <div class="container">
         <iframe class="iframeb" src="agrodrones.php" name="iframeb"></iframe>
	   </div>

</div>
</div>
<br/>
<a class="infoc" onclick="document.getElementById('id03').style.display='block'">
Agriculture production in state
</a>
	   
	  <div id="id03" class="modal">
  
      <div class="modal-content animate">
	 
	    <span><button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button></span>
       
	   <div class="container">
         <iframe class="iframeb" src="stproduction.php" name="iframeb"></iframe>
	   </div>

</div>
</div>

<a class="infod" onclick="document.getElementById('id04').style.display='block'">
importance of agriculture in andhra
</a>
	   
	  <div id="id04" class="modal">
  
      <div class="modal-content animate">
	 
	    <span><button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button></span>
       
	   <div class="container">
         <iframe class="iframeb" src="importanceagro.php" name="iframeb"></iframe>
	   </div>

</div>
</div>

<script>
var pros = {
   pro1: 'id01'
   pro2: 'id02'
   pro3: 'id03'
   pro4: 'id04'
};
var modal = document.getElementById('pros');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>

</div>

</div>

 <div class="footer">
  <footer class="footer">
  <ul><li><a style="color:#4dff4d;text-decoration:none;" href="conus.php">contact us</a></li>
  
  </ul>
  </div>
  </footer>
</body>
</html>