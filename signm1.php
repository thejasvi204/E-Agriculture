<?php
   session_start();
 ob_start();
 ?>

 <?php 
  if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
    $uname=$_POST['uname'];
        $name=$_POST['name'];
        $sname=$_POST['sname'];
        $adhaar=$_POST['adhaar'];
        $phoneno=$_POST['phone'];
        $mlocality=$_POST['market'];
        $mtype=$_POST['mtype'];
        $district=$_POST['dis'];
        $occupation=$_POST['occupation'];
        $conn=mysqli_connect("localhost","root","","agri");
        $q="insert into signm(uname,name,sname,adhaar,phoneno,mlocality,mtype,district,occupation) values('$uname','$name','$sname','$adhaar','phoneno','$mlocality','$mtype','$district','$occupation')";
        $x="insert into complaint(uname) values('$uname')";
        $r=mysqli_query($conn,$q) or die(mysqli_error($conn));
         $y=mysqli_query($conn,$x) or die(mysqli_error($conn));
        if($r&&$y)
        {
        	header('location:home1.php');
        }
   }
?>