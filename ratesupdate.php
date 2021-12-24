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
<html lang="en">
<head>
  <title>ratesup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style> 
body html {
  margin:0;
  padding: 0;
} 
.backgroundimg{
   background-image:url(bw.jpg);
   background-size: cover;
   background-position: center center;
   background-repeat: no-repeat;
   height: 100vh;
   width: 100% ;

  }


 .border {
    display: inline-block;
    width: 900px;
    height: 430px;
    margin: 2px;
    padding: 10px 10px 10px 10px;
  }

  .text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 10px;
  position: absolute;
  margin-top: -65px;
  border: 2px solid #337ab7;
  border-radius: 20px;
}

.panel {
  /* for text on pannel */
  margin-top: 27px !important;
}

.panel-body {
  padding-top: 30px !important;
}
</style>
</head>
<body>

<div class="row backgroundimg">
 <div class="container">
  <br>
  <div class="btn btn-danger disabled">* if crop is not avaiable then enter pricevalue as na</div>
   <br>
  <div class="row centered-form">
   <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
     <span class="border border-warning rounded double ">
  <div class="panel panel-primary">
    <div class="panel-body">

      <div class="mx-auto bg-warning" style="width:150px">
          <span class="text-on-pannel text-primary float-center">
           <strong class="text-uppercase "> rates update</strong>
          </span>
        </div>

            <form role="form" method="POST" action="ratesupdate.php">
               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname" placeholder="enter cropname" name="cname" required>
                     </div>
                  </div>
                    </nav>
                 <br>

                  <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-6 col-sm-6 col-md-6">
                   
                   <div class="form-group">
                            <input type="text" class="form-control input-sm" id="mloc" placeholder="Enter  market location" name="mloc" required>
                         </div>
                      
                 </div>
                   <div class="col-xs-2 col-sm-2 col-md-2">
      
                    <div class="form-inline">
                     <strong class="btn btn-warning btn-block disable"><label  for="mtype">market type:</label></strong>
                    </div>

                 </div>
                 
                 <div class="col-xs-4 col-sm-4 col-md-4">
      
                   <div class="form-group">
                             <select class="form-control input-sm " id="mtype" name="mtype">
                                   <option value="fruit">fruit</option>
                                   <option value="vegetable">vegetable</option>
                                   <option value="other">others</option>
                                  </select>
                         </div>

                 </div>
                      </nav>
              
                       <br>

                     <nav class="navbar navbar-expand bg-dark navbar-dark">
                      <div class="col-xs-3 col-sm-3 col-ms-3">
                              <div class="form-group">
                              <input type="text" class="form-control input-sm" id="rate" placeholder="  today min rates" name="rate" required pattern="[0-9]{1,2}" title="please enter only number">
                                </div>  
                      </div>
                      <div class="col-xs-3 col-sm-3 col-ms-3">
                              <div class="form-group">
                              <input type="text" class="form-control input-sm" id="rate1" placeholder="  today max rates" name="rate1" required pattern="[0-9]{1,2,3}" title="please enter only number">
                                </div>  
                      </div>

                       <div class="col-xs-1 col-sm-1 col-md-1">
      
                    <div class="form-inline">
                     <strong class="btn btn-warning btn-block disable"><label  for="qty">/</label></strong>
                    </div>

                 </div>

                      <div class="col-xs-5 col-sm-5 col-ms-5">
                            <div class="form-group">
                                  <select class="form-control input-sm " id="qty" name="qty">
                                   <option value="1">1</option>
                                   <option value="box">box</option>
                                   <option value="bag">bag</option>
                                  </select>
                                </div>
                      </div>
                    </nav>
                      
                               <br><br><br>

                      <input type="submit" class="btn btn-warning btn-block" name="submit" value="update">
            </form>
      </div>
     </div>
<li><a class="navlnke " href="home1.php">home1</a></li>
        </span>
         </div>
     </div>

      </div> 
  </div> 
</body>
</html>

<?php 
  if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
    $cname=$_POST['cname'];
        $mloc=$_POST['mloc'];
        $mtype=$_POST['mtype'];
        $rate=$_POST['rate'];
        $rate1=$_POST['rate1'];
        $qty=$_POST['qty'];
           $_SESSION['mloc']=$mloc;
        $conn=mysqli_connect("localhost","root","","agri");
        if($_SESSION['mloc']=="tenali"&&!empty($cname))
        {
        $q="update mtenali set price='$rate',price1='$rate1' where cname='$cname' ";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
      }
        if($w)
        {
          header('location:home1.php');
        }
        
   }
?>
