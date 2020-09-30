<?php 
session_start();
 include "../connection.php";
  $username=$_POST['username'];
  $password=$_POST['password'];

if(isset($_POST['button']))
{

  $qry="select * from admin where username='".$username."' and password='".$password."'";
 $res=mysqli_query($con,$qry);
$res1=mysqli_fetch_array($res);
 if($res1!="")
 {



  $_SESSION['id']=$res1['id'];
  $_SESSION['username']=$res1['username'];	
  echo '<script>
  alert("admin login sucssfully");
  window.location="welcome.php";
  </script>';

 }
 else 
 {

echo '<script>
  alert("admin login unsucssfully");
 window.location="index.php";
  </script>';

 }


}


?>