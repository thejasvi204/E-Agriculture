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

<body>
<h1>Drones in agriculture</h1>
<hr/>
<p>
With the rise of China, India, Africa and other countries around the world, the demand for food has risen rapidly. 
Experts expect agricultural consumption to increase 70% by 2050, so massive improvements in the way we farm will be 
needed between now and then. As a result, the Indian government and others understand that their farming will 
have to become more efficient in the future. This is where drones come in. Despite drones being largely banned 
in India at the moment, this is likely to change soon in the future when the government finds out the best way 
to manage drones in crowded Indian airspace.
</p>

<h4>Crop Spraying Drones</h4>

<p>Drones have the latest sensors and technology to optimize everything from water applied to plants,
 to the amount of fertilizer and space they are given while attaining the highest yields.</p>

<p>The following drone is a hero of precision variable rate application of liquid pesticides, 
fertilizers, and herbicides. It can cover 7-10 acres per hour,
 it is 40-60 times faster than manual spraying and it’s payload capacity is 10KG.</p>

<img src="infoimg/drone1.jpg" width="600px" height="400px"/>



<h4>NVDI Drones</h4>

<p>Fixed wing long range drones equipped with NVDI cameras can accurately, quickly and 
cheaply create the above NVDI maps. These NVDI maps give a farmer insight into which plants 
are healthy, and which ones need more attention. As a result, farmers need less 
herbicides, pesticides and water, instead being able to focus on areas that need attention.</p>

<img src="infoimg/drone2.jpg" width="600px" height="400px"/>


<h4>Seeding Drones</h4>

<p>Using seeding drones farmers can quickly and accurately apply more seeds to a farm. 
This is particularly useful for farms that have many hill sides or 
hard to reach areas that would otherwise be very expensive and difficult to plant seeds on.</p>

<img src="infoimg/drone3.jpg" width="600px" height="400px"/>


<h4>Surveillance Drones</h4>

<p>Surveillance drones should contribute to less losses in the agriculture industry,
 whether this is crop theft or theft of animals. Using fixed wing long range drones, 
 farmers can affordably monitor their whole farm regardless of its 
size from the comfort of their home without the need for expensive security services.</p>

<img src="infoimg/drone4.jpg" width="600px" height="400px"/>
<br/>
<mark>article by</mark>
<b>akhil</b>

</body>
</html>