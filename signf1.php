<?php
   session_start();
 ob_start();
 ?>
 <?php

  if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
    
        $uname=$_POST['uname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
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
        $adhaar=$_POST['adhaar'];
        $phoneno=$_POST['phone'];
        $occupation=$_POST['occupation'];
        $village=$_POST['village'];
        $name=$fname.$lname;
        $conn=mysqli_connect("localhost","root","","agri");
        $q="insert into signf(uname,name,adhaar,phoneno,occupation,village) values('$uname','$name','$adhaar','$phoneno','$occupation','$village')";

        $x="insert into crop(uname,cname1,carea1,cduration1,cname2,carea2,cduration2,cname3,carea3,cduration3,cname4,carea4,cduration4,cname5,carea5,cduration5,village) values('$uname','$cname1','$carea1','$cduration1','$cname2','$carea2','$cduration2','$cname3','$carea3','$cduration3','$cname4','$carea4','$cduration4','$cname5','$carea5','$cduration5','$village')";
           $u="insert into complaint(uname) values('$uname')";
        $r=mysqli_query($conn,$q) or die(mysqli_error($conn));
        $y=mysqli_query($conn,$x) or die(mysqli_error($conn));
        $v=mysqli_query($conn,$u) or die(mysqli_error($conn));
        if($r&&$y&&$v)
        {
          header('location:home1.php');
        }
   }
?>
