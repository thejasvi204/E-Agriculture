<?php
session_start();
?>
 <?php
    if (empty($_SESSION['uname']))
   {
    header("location:login20.php");
  }
     ?>
<?php
 if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
 
    $complaint=$_POST['fcomplaint'];
      $uname=$_SESSION['uname'];
        $conn=mysqli_connect("localhost","root","","agri");
      
      $q="update  complaint set fcomplaint='$complaint' where uname='$uname'";
      $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
      
         if ($w)
              {
                
                    header("location:home1.php");
                    echo"<script> alert('complaint submitted');</script>";
             }
   }
          
?>