
 
     <?php
   session_start();
 ob_start();
 ?>
 <?php
  	if (empty($_SESSION['uname']))
   {
    header("location:login20.php");
  }
     ?><html>
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

<h1>Importance of agriculture in Andhra Pradesh state economy</h1>
<hr/>
<p>1. Andhra Pradesh has 10.1 m ha cultivated area, constituting 37% of state’s total geographical area.
 The irrigated area is 36% of the cultivated area. Rice, sugarcane, black gram, chillies, mango, cotton and tobacco are the main crops. 
With cropping intensity of 122%, food grains production is 13.4 mt. Rice is grown in 3.98 m ha with a productivity level of 2.98 t/ha.</p>
</p>