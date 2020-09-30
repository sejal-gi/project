<?php 
 include "../connection.php";

 $id=$_GET['id'];


$qry="delete from member where id='".$id."'";
 mysqli_query($con,$qry);

echo '<script>
  alert("member delete succfully");
  window.location="memberlist.php";


</script>';








?>