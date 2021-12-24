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

          span{
              color:#ff4d4d;}		  
	    </style>		
</head>

<body>

<h1>Agriculture production in india</h1>
<hr/>

<h4>Important Agricultural Crop of Andhra Pradesh</h4>
<p>Andhra Pradesh is blessed with a suitable weather to produce varieties of crops.
The farmers of Andhra Pradesh practice multiple cropping pattern to increase the growth of the agricultural production.</p>

<h4>Some of the important crops that are grown in abundance in the state are:</h4>
<b>rice: </b>Andhra Pradesh had produced <u>12458</u> tonnes of rice <br/>
<b>Wheat: </b> The state had cultivated <u>8000</u> tonnes of wheat <br/>
<b>Jowar: </b> The state had produced <u>619</u> tonnes of Jowar <br/>
<b>Bajra: </b> Andhra Pradesh had grown <u>149</u> tonnes of Bajra <br/>
<b>Maize: </b> The state had grown <u>1581</u> tonnes of Maize <br/>
<b>Minor Millets: </b>Andhra Pradesh had produced <u>39</u> tonnes of Minor Millets <br/>
<b>Coarse Grain: </b>The state had grown <u>2508</u> tonnes of Coarse Grain <br/>

<p>Andhra Pradesh also produces other important cash crops like Groundnut, Pulses, Castor, Sunflower, 
Cotton, Oilseeds, and Sugarcane which helps the state to earn huge amounts of revenue.</p> 

<h4><u>Top production in state</u></h4>

<p>Largest Maize producing state in India is <span>Andhra Pradesh</span></p>

<p>Largest Fruits producing state in India is <span>Andhra Pradesh</span></p>

<p>Largest Total Spices producing state in India is <span>Andhra Pradesh</span></p>

<p>Largest Citrus, Lemon, Mosambi producing state in India is <span>Andhra Pradesh</span></p>

<mark>article by</mark>
<b>tejaswi</b>

</body>
</html>