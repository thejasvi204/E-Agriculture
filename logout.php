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
  //session_unset();
  if(session_destroy())
  {
  	 header("location:login20.php");
  	}
    ?>