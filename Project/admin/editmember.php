
<?php include "header.php";

 include "../connection.php";

 ?>

<body>
<div id="wrapper">
   <!-- Navigation -->
<?php include "menu.php"; include "menu2.php"; ?>

 <h1> Edit Member </h1> 
  

 
 <?php 
$id=$_GET['id'];

 if(isset($_POST['button']))
 {


 $qryup="update member set name='".$_POST['name']."',address='".$_POST['address']."',contactno='".$_POST['contactno']."',email='".$_POST['email']."',password='".$_POST['password']."'where id='".$id."'";
 mysqli_query($con,$qryup);
echo '<script>
  alert("member update succfully");
  window.location="memberlist.php";


</script>';

 }




?>











 <?php

//datashow in form 

$id=$_GET['id'];

           

                       $qry="select * from member where id='".$id."'";
                       $res=mysqli_query($con,$qry);
                       While($row=mysqli_fetch_array($res)) 
                         {

                          $id=$row['id'];
                          $name =$row['name'];
                          $address =$row['address'];
                          $contactno=$row['contactno'];
                          $email=$row['email'];
                          $password=$row['password'];
 
                          }
                     ?>





  <form method="post" action="" name="editmember">


  	Name:<input type="text"   value="<?php echo $name; ?>" name="name" class="form-control"><br> 
  	Address:<input type="text" value="<?php echo $address; ?>" name="address" class="form-control"><br>
  	Contactno:<input type="text" value="<?php echo $contactno; ?>" name="contactno" class="form-control"><br> 
    Email:<input type="text" name="email" value="<?php echo $email; ?>" class="form-control"><br> 
    Password:<input type="text" name="password" value="<?php echo $password; ?>" class="form-control"><br> 
    <input type="submit" name="button" value="Update"><br> 



  </form>







		  
	 
   <?php 

 include"footer.php";

   ?>