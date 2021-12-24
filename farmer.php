  
  <?php
   session_start();
 ob_start();
    ?>
     <?php
     $village=$_SESSION['village'];

 $conn=mysqli_connect('localhost','root','','agri');
    //query all records from the database
    $q= "select cname1,carea1 from crop where village='$village'";
 
    //execute the query
    $result=$conn->query($q);
    ?>
<!DOCTYPE html>
<html lang="en">
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['cname1']."', ".$row['carea1']."],";
			//echo "['".$row['cname2']."', ".$row['carea2']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Crops grown in <?php echo $village;?> are:',
        width: 900,
        height: 500,
        is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body background="imags/bg-ptrn.jpg" style="padding:0px 200px;">
  <div class="container" style="background:#e6ffe6; padding:0 10px 2px;;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);">
    <header><img src="imags/headere.jpg" style="width:902px;height:140px;border:none;border-radius:5px;"></header>
  
  <nav class="main-menue" style="margin-top:1px;display: block;">
      
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
        <li><a class="navlnke" href="marketinfo.php">Markets</a></li>
        <li><a class=" navlnke" href="farmers.php">Farmers</a></li>
        <li> <div id="google_translate_element"></div></li>
        <li><a class="lange"  href="logout.php">Logout</a></li>
        </ul>
  </nav>
 
    <!-- Display the pie chart -->
    <div id="piechart"></div>
      </div>
</body>
</html>