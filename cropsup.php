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
  <title>cropsup</title>
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
   height: 180vh;
   width: 100% ;

  }


 .border {
    display: inline-block;
    width: 900px;
    height: 730px;
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
   <div class="col-xs-12 col-sm-12 col-ms-12">
                            <div class="form-group">
                                  <strong class="btn btn-warning btn-block disable"><label  for="qty">*enter croduration for days</label></strong>>
                          </div> 
    </div>
    
    <br>

  <div class="row centered-form">
   <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
     <span class="border border-warning rounded double ">
  <div class="panel panel-primary">
    <div class="panel-body">

      <div class="mx-auto bg-warning" style="width:150px">
          <span class="text-on-pannel text-primary float-center">
           <strong class="text-uppercase "> crop update</strong>
          </span>
        </div>

            <form role="form" method="POST" action="cropsup.php">
               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname1" placeholder="enter crop name1" name="cname1"  pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                      </div>
                  </div>

                 <div class="col-xs-4 col-sm-4 col-md-4">
                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="carea1" placeholder="enter crop area1" name="carea1"  pattern="[0-9]{1,2,3}" title="please enter only number">
                     </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control input-sm" id="cduration1" placeholder="crop duration1" name="cduration1"  pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                         </div>
                 </div>
                  
               </nav>
                 <br>

               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname2" placeholder="enter crop name2" name="cname2" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                      </div>
                  </div>

                 <div class="col-xs-4 col-sm-4 col-md-4">
                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="carea2" placeholder="enter crop area2" name="carea2" pattern="[0-9]{1,2,3}" title="please enter only number">
                     </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control input-sm" id="cduration2" placeholder="Enter  crop duration2" name="cduration2" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                         </div>
                 </div>

               </nav>
                 <br>

               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname3" placeholder="enter crop name3" name="cname3" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets" >
                      </div>
                  </div>

                 <div class="col-xs-4 col-sm-4 col-md-4">
                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="carea3" placeholder="enter crop area3" name="carea3" pattern="[0-9]{1,2,3}" title="please enter only number">
                     </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control input-sm" id="cduration3" placeholder="Enter  crop duration3" name="cduration3" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                         </div>
                 </div>

               </nav>
                 <br>

               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname4" placeholder="enter crop name4" name="cname4" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                      </div>
                  </div>

                 <div class="col-xs-4 col-sm-4 col-md-4">
                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="carea4" placeholder="enter crop area4" name="carea4" pattern="[0-9]{1,2,3}" title="please enter only number">
                     </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control input-sm" id="cduration4" placeholder="Enter  crop duration4" name="cduration4" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                         </div>
                 </div>

               </nav>
                 <br>

               <nav class="navbar navbar-expand bg-dark navbar-dark">
                 <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="form-group">
                           <input type="text" class="form-control input-sm" id="cname5" placeholder="enter crop name5" name="cname5" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                      </div>
                  </div>

                 <div class="col-xs-4 col-sm-4 col-md-4">
                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="carea5" placeholder="enter crop area5" name="carea5" pattern="[0-9]{1,2,3}" title="please enter only number">
                     </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control input-sm" id="cduration5" placeholder="Enter  crop duration5" name="cduration5" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                         </div>
                 </div>

               </nav>
                 <br>


                  <nav class="navbar navbar-expand bg-dark navbar-dark">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                            <input type="text" class="form-control input-sm" id="mloc" placeholder="Enter  market location" name="mloc" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                         </div>
                      
                     </div>
                 </nav>
              
                       <br>

                     
                      
                               <br><br><br>

                      <input type="submit" class="btn btn-warning btn-block" name="submit" value="update crop">
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
        $cname1=$_POST['cname1'];
        $carea1=$_POST['carea1'];
        $cduration1=$_POST['cduration1'];
         $cname2=$_POST['cname2'];
        $carea2=$_POST['carea2'];
        $cduration2=$_POST['cduration2'];
         $cname3=$_POST['cname3'];
        $carea3=$_POST['carea3'];
        $cduration3=$_POST['cduration3'];
         $cname4=$_POST['cname4'];
        $carea4=$_POST['carea4'];
        $cduration4=$_POST['cduration4'];
         $cname5=$_POST['cname5'];
        $carea5=$_POST['carea5'];
        $cduration5=$_POST['cduration5'];
        $mloc=$_POST['mloc'];
           $user=$_SESSION['uname'];
        $conn=mysqli_connect("localhost","root","","agri");
        if($user)
        {
          if($cname1!=null)
          {
          $q="update crop set cname1='$cname1',carea1='$carea1',cduration1='$cduration1' where uname='$user'";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
          }
          if($cname2!=null)
          {
          $q="update crop set cname2='$cname2',carea2='$carea2',cduration2='$cduration2' where uname='$user' ";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
          }
          if($cname3!=null)
          {
          $q="update crop set cname3='$cname3',carea3='$carea3',cduration3='$cduration3' where uname='$user' ";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
          }
          if($cname4!=null)
          {
          $q="update crop set cname4='$cname4',carea4='$carea4',cduration4='$cduration4' where uname='$user' ";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
          }
          if($cname5!=null)
          {
          $q="update crop set cname5='$cname5',carea5='$carea5',cduration5='$cduration5' where uname='$user' ";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
          }
      }
        if($w)
        {
          header("location:home1.php");
        }
        
   }
?>
