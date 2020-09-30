
<?php

 session_start();

include"../connection.php";
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

 <h3> Change password  </h3> 

<?php 
 $id=$_SESSION['id'];


 $qry="select * from admin where id='".$id."'";
 $res=mysqli_query($con,$qry);
 $res1=mysqli_fetch_array($res);
  
 $oldpassword=$res1['password'];

?>

 <?php 
 $id=$_SESSION['id'];




if(isset($_POST['button']))
{


 if($oldpassword==$_POST['oldpassword'])
 {



 $qryup="update admin set password='".$_POST['newpassword']."' where id='".$id."'";
 mysqli_query($con,$qryup);
  echo '<script>
 alert("change password sucssfully"); 
 window.location="index.php";
  </script>';

}


 else 
 {
echo '<script>
 alert("your old  password currect try again"); 
 window.location="changepassword.php";
  </script>';




 }
}


 ?>







<form name="changepass" action="" method="post">
Old Password<input type="text" name="oldpassword" value=""><br> 
News Password<input type="text" name="newpassword" value=""><br> 
C Password<input type="text" name="cpassword" value=""><br>
<input type="submit" name="button" value="submit">

 	



 </form>





		  
	 
   <?php 

 include"footer.php";

   ?>
