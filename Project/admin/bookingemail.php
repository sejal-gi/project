
<?php

session_start();
 include "../connection.php";

 include "header.php"; ?>



<body>
<div id="wrapper">
   <!-- Navigation -->
<?php include "menu.php"; include "menu2.php"; ?>
<br>

 <h3>Booking Confirm Email</h3> 

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">

					<h2>Booking Details</h2><br>

					 <form method="post" action="" name="msearch">
                 	 Search: <input type="text" name="msearch" value="" style="color: black;">
                 	 <input type="submit" name="button" class="btn btn-info" value=" Search">
                     </form>



					
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th> Name</th>
								<th> Email</th>
								<th> contactno</th>
                                <th>No of Room</th>
								<th>Check In </th>
								<th>Check out </th>
								<th>Booking Confrim</th>
								
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

                       $qry="select * from booking";
                       $res=mysqli_query($con,$qry);

                   }
                       While($row=mysqli_fetch_array($res)) 
                         {

                          $id=$row['id'];
                          $name =$row['name'];
                           $email =$row['email'];
                            $contactno =$row['contactno'];
                          $noofroom =$row['noofroom'];
                          $checkin=$row['checkin'];
                          $checkout=$row['checkout'];
                         
                            $sno=$sno+1;





                       ?>  







						<tbody>
							<tr>
								<td><?php  echo $sno;?></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $contactno; ?></td>
								<td><?php echo $noofroom; ?></td>
								<td><?php echo $checkin; ?></td>
								<td><?php echo $checkout; ?></td>
								
								<td><a href="sendmail/thanks.php?email=<?php echo $email; ?>">confirm Email</a></td>
					
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