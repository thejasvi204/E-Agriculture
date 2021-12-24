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
 <?php
$conn=mysqli_connect('localhost','root','','agri');
?>
<!DOCTYPE html>
<html>
  <head>
     <style> 
  * {box-sizing: border-box;}

.contain{
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width:200px;
  height:200px;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 270px;
  height:130px ;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

div.gallery {
    margin: 50px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}


.contain:hover .overlay {
  opacity: 1;
} 

</style> 
  <style>
      li{
       list-style-type:none;}
       
    #navbardrop{
    width:200px;
    margin-top:5px;
    margin-left:20px;}
    
    #upra{
    width:200px;
    margin-left:680px;
    margin-top:-44px;}
    
       
     </style>

     <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body  background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
  
  
  
  
  <div class="container" style="background:#e6ffe6; padding:0 17px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">

  <header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
  
  <nav class="main-menue navbar  sticky-top" style="margin-top:1px;display: block;">
      
      <ul class="navigatione">
        <li><a class="navlnke" href="home1.php">Home</a></li>
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
        <li><a class="activenave navlnke" href="marketinfo.php">Markets</a></li>
        <li><a class="navlnke" href="farmers.php">Farmers</a></li>
        <li> <div id="google_translate_element"></div></li>
          <li><a class="lange"  href="logout.php">Logout</a></li>
      </ul>
  </nav>
  
      <a class="nav-link dropdown-toggle text-danger mr-sm-2 btn btn-outline-warning" href="#" id="navbardrop" data-toggle="dropdown">
        MARKET
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item text-success   " href="tenalirates.php">TENALI</a>
        <a class="dropdown-item text-success " href="t.php">GUNTUR</a>
        <a class="dropdown-item text-success  " href="t.php">PONNUR</a>
      </div>
    <?php
 if( $_SESSION['occupation']=="marketer")
 {
    echo"<a class='nav-link text-dark mr-sm-2 btn btn-outline-warning' id='upra' href='ratesupdate.php'>update rates</a>";
 }
 ?>
  </div>

<?php 
$q="select cname,image,price,price1,qty,mtype from mguntur where mtype='fruit'";
$w=mysqli_query($conn,$q) or die(mysqli_error($conn));
$r=mysqli_num_rows($w);
if($w)
{ 
  if ($r>0)
   {
     while($row=mysqli_fetch_array($w))
       {
     $image=$row["image"];
    $name=$row["cname"];
    $price=$row["price"];
    $price1=$row["price1"];
    $qty=$row["qty"];
    $type=$row["mtype"];
       echo "<div class='contain gallery'>
             <img src='images/".$image."' class='image'>
             <div class='overlay'><td><h3>$name</h3> minprice:$price&nbspmaxprice:$price1 qty:$qty</td></div>
              </div>&nbsp";
     }
   }

 }
 ?>
 
<?php 
$q="select cname,image,price,price1,qty,mtype from mguntur where mtype='vegetable'";
$w=mysqli_query($conn,$q) or die(mysqli_error($conn));
$r=mysqli_num_rows($w);
if($w)
{ 
  if ($r>0)
   {
     while($row=mysqli_fetch_array($w))
       {
     $image=$row["image"];
    $name=$row["cname"];
    $price=$row["price"];
    $price1=$row["price1"];
    $qty=$row["qty"];
    $type=$row["mtype"];

       echo "<div class='contain gallery'>
             <img src='images/".$image."' class='image'>
             <div class='overlay'><td><h3>$name</h3> minprice:$price&nbspmaxprice:$price1 qty:$qty</td></div>
              </div>&nbsp";
     }
   }
 }
 ?>
 <br>
 <?php 
$q="select cname,image,price,price1,qty,mtype from mguntur where mtype='other'";
$w=mysqli_query($conn,$q) or die(mysqli_error($conn));
$r=mysqli_num_rows($w);
if($w)
{ 
  if ($r>0)
   {
     while($row=mysqli_fetch_array($w))
       {
     $image=$row["image"];
    $name=$row["cname"];
    $price=$row["price"];
    $price1=$row["price1"];
    $qty=$row["qty"];
    $type=$row["mtype"];

       echo "<div class='contain gallery'>
             <img src='images/".$image."' class='image'>
             <div class='overlay'><td><h3>$name</h3> minprice:$price&nbspmaxprice:$price1 qty:$qty</td></div>
              </div>&nbsp";
     }
   }
 }
 ?>
 </body>
  </html>
