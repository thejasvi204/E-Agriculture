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

<body background="infoimg/back3.jpg">
<h1>Technological innovations that are revolutionizing Indian agriculture</h1>
<hr/>
<h4>1. Barrix Ago Sciences</h4>
<img src="infoimg/1.jpg" width="600px" height="400px"/>
<p>The Bangalore-based startup offers eco-friendly crop protection methods 
after much research on products that support organic farming to increase crop
produce and quality with minimal expenditure.</p>

<b>Product:</b>

<p>Barrix Catch Fruit and Fly Lure + trap: Toxic pesticides contaminate water, 
soil and leave behind harmful residue, besides being expensive. Barrix’s 
pheromone-based pest control traps have artificially synthesised smelling 
agents that attracts and traps pests. Instead of eating the crops, the pests
 are attracted to the pheromones in the traps.
Fly pest sticky sheet: Barrix uses bright yellow and blue coloured 
recyclable sheets of wavelengths between 500 nm to 600 nm, proven to 
effectively attract and trap at least 19 high-risk pests from a long distance.</p>


<h4>2. Anulek Agrotech </h4>
<img src="infoimg/2.jpg" width="600px" height="400px"/>
<p>Set up by Mumbai-based entrepreneurs, Anulekh focuses on increasing soil fertility to
 achieve higher agricultural productivity and crop yield with lower resource use.</p>

<b>Product:</b>

<p>BIOSAT: BIOSAT (Biochar based organic Soil Amendment Technology), a soil additive, 
is made of biochar mixed with different organic nutrients. The product preserves soil 
fertility, traps carbon emissions, maintains the topsoil strength and 
increases crop production, thus reducing dependency on chemical fertilizers.</p>

<h4>3. Mitra </h4>
<img src="infoimg/3.jpg" width="600px" height="400px"/>
<p>A Nashik-based startup, MITRA (Machines, Information, Technology, Resources 
for Agriculture) aims to improve mechanization at
horticulture farms with the use of R&D and high quality farm equipment.</p>

<b>Product:</b>

<p>Air blast sprayers: Developed for fruits and vegetables in general, and grapes and 
pomegranates in particular, the sprayers, used to add hormones that help the
growth of crops, reduce the expenditure on manual labour and are less time-consuming.</p>

<mark>article by</mark><br/>
<b>venkatesh</b>

</body>
</html>





