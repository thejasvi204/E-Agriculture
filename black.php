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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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

<h4>About Black Soil</h4>

<p>Like the prairie soil found in the United States, black soil contains a high concentration of calcium and magnesium carbonates and is relatively abundant in iron, lime magnesia and alumina. However, black soils are poor in phosphorous and nitrogen and contain little organic matter. Black soil is dark and fine-grained.</p>

<p>These soils can absorb and retain water for longer duration</p>

<h4>Districts</h4>

<p>Godavari valley from Adilabad district to Khammam district, Mahaboobnagar, Nizamabad, Medak, Nalagonda, Ranga Reddy districts, Rayalaseema districts and parts of West Godavari, Krishna and Guntur districts</p>

<h4>Crops Grown</h4>

<p>Cotton, Jowar, Wheat, Sugarcane, Linseed, Gram, Fruit & vegetable, Bajra, Korra, Tobaco, Tumeric, Chillies, Paddy, Plantain.</p>

</div>
</body>
</html>