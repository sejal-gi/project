
<?php

 session_start();

 include "header.php"; ?>

 <?php 
 if($_SESSION['id']=="")
 {

echo '<script>
 window.location="index.php";
 </script>';

 	
 }





 ?>


<body>
<div id="wrapper">
   <!-- Navigation -->
<?php include "menu.php"; include "menu2.php"; ?>
<br>

 <h3> Welcome Admin  Panel:<?php echo $_SESSION['username']; ?>  </h3> 




		  
	 
   <?php 

 include"footer.php";

   ?>