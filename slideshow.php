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
		
	</head>
<div class="slideshow-container">
<div class="mySlides fade">
  <img style="height:400px;width:900px;" src="imags/img13.jpg">
</div>

<div class="mySlides fade">
  <img style="height:400px;width:900px;" src="imags/img23.jpg">
</div>

<div class="mySlides fade">
  <img style="height:400px;width:900px;" src="imags/img33.jpg">
</div>
	
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
</div>