<?php
session_start();
?>
 <?php
  	if (empty($_SESSION['uname']))
   {
    header("location:login20.php");
  }
     ?>
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
        <style>
		  
		  h1{
		    color:#3385ff;
			font-family:calibri;}
			
		  p{
            font-family:calibri;
			font-size:20px;}	
          h4{
             color:#ff3333;
			 font-size:30px;}	
          b{
            color:#ff3333;
			 font-size:20px;}		  
	    </style>		
</head>

<body background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
   <div class="container" style="background:#e6ffe6; padding:0 10px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">
    <header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
  
  <nav class="main-menue navbar  sticky-top" style="margin-top:1px;display: block;">
      
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
 
<h1>About  Soils in Andhra Pradesh</h1>
<hr/>
<p>
Monsoon seasons, rich mineral and organic deposits and highly undulating slopes affect the soil composition of this fertile southeasterly Indian state. Soil and vegetation are important to Andhra Pradesh, because the state depends on agriculture -- particularly rice production -- for economic growth. With its high annual crop yields, Andhra Pradesh is estimated to contribute roughly half of the food used in India’s publicly distributed food system,
</p>

<p>
Soil & Vegetation in Andhra Pradesh are the main natural resources and the most important too, as it is an agriculturally oriented state. More than 60 % of the total working population is linked with agriculture, which forms the mainstay of their livelihood. The state boasts of almost all type of soils and crops found in other parts of India. Andhra Pradesh is one of the largest producer of rice in the country and one of the leaders in producing other cash crops too
</p>

<h4>About Red Soil</h4>

 <p>Red soils are composed of weathered crystalline and metamorphic rock and get their color from a high diffusion of iron. Red soils are poor in nitrogen, phosphorous and humus; they are poorer still in lime, potash, iron oxide and phosphorous. Red soils are often found in Southern India beside yellow soil high in ferric oxide, from which it gets its color. </p>

<p>Red soils spread over a larger area of the state. They are light and have water retaining capacity. They are very less fertile.Areas where irrigation facilities are available.</p>


<h4>Districts</h4>

<p>Telangana and Rayalaseema, a large area of Nellore and Visakhapatnam districts, and parts of East Godavari, West Godavari, Krishna, Guntur and Prakasam</p>

<h4>Crops Grown</h4>

<p>Cotton, Tobacco and various varieties of fruits, Wheat, Rice, Millet, Pulses,groundnut, horse gram etc</p>

</div>
</body>
</html>