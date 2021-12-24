<?php
   session_start();
 ob_start();
 ?>

 <?php 
  if(isset($_POST['submit']) &&!empty($_POST['submit']))
  {
        $name=$_POST['name'];
        $phoneno=$_POST['phno'];
        $coment=$_POST['comment'];
        $conn=mysqli_connect("localhost","root","","agri");
        $q="insert into conus(name,phno,comment) values('$name','$phoneno','$comment')";
        $r=mysqli_query($conn,$q) or die(mysqli_error($conn));
        if($r)
        {
        	header('location:home1.php');
        }
   }
?>