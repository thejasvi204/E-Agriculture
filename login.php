
 <?php
    if (empty($_SESSION['uname']))
   {
    header("location:login20.php");
  }
     ?>
     <?php
session_start();
?>
<?php
 if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
 
    $uname=$_POST['uname'];
        $district=$_POST['dis'];
        $occupation=$_POST['occupation'];
        $village=$_POST['village'];
         $_SESSION['occupation']=$occupation;
          $_SESSION['village']=$village;
           $_SESSION['district']=$district;
        $conn=mysqli_connect("localhost","root","","agri");
        if($_SESSION['occupation']=="marketer")
        {
        $q="select uname from signm where uname='$uname'";
          $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
        $r=mysqli_num_rows($w);
      }
       else if($_SESSION['occupation']=="farmer")
        {
      $q="select uname from signf where uname='$uname' and village='$village'";
      $w=mysqli_query($conn,$q) or die(mysqli_error($conn));
        $r=mysqli_num_rows($w);
      }
         if ($w)
              {
                if ($r==1)
                 {
                    $_SESSION['uname']=$uname;

                    header("location:home1.php");
                  }
                else
                 {

                   header("location:login20.php");
                  }  
             }
             else
             {
              echo "failed to login";
             }
       
   }
          
?>