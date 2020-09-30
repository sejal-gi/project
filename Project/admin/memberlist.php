
<?php
 session_start();
 include "../connection.php";


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

 <h1> Member List </h1> 



 


<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">

<form method="post" action="" name="msearch">
	Search:<input type="text" name="msearch" value="" style="color: black;">
	<input type="submit" name="button" class="btn btn-info" value="Search">
</form>

					<h2>Warning Table</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th> Name</th>
								<th>Address</th>
								<th>Contactno</th>
								<th>Email</th>
								<th>Password</th>
								<th>Edit</th>
								<th>Delte</th>
								
							</tr>
						</thead>
                       
                       <?php 

                        $sno=0;
                        $search=0;
                        if(isset($_POST['button']))
                        {
                        	$search=$_POST['msearch'];
                        }

                        if($search!="")
                        {
                       $qry="select * from member where name LIKE '%".$search."%'";
                         $res=mysqli_query($con,$qry);
                     }

                       else
                       {

                       	$qry="select * from member";
                        $res=mysqli_query($con,$qry);
                    }
                       While($row=mysqli_fetch_array($res)) 
                         {

                          $id=$row['id'];
                          $name =$row['name'];
                          $address =$row['address'];
                          $contactno=$row['contactno'];
                          $email=$row['email'];
                          $password=$row['password'];
 
                            $sno=$sno+1;





                       ?>  







						<tbody>
							<tr>
								<td><?php  echo $sno;?></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $address; ?></td>
								<td><?php echo $contactno; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $password; ?></td>
								<td><a href="editmember.php?id=<?php echo $id;?>">Edit</a></td>
					<td><a href="deletemember.php?id=<?php echo $id ?>">Delete</a></td>
							</tr>
							
						</tbody>


                         <?php 
                          }
                         ?>



					</table>
				</div>
			</div>



		  
   <?php 

 include"footer.php";

   ?>


































