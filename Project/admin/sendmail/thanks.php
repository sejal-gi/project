<html>
<head>
<title>MAIL SENDING</title>
</head>
<body>
<?php

$email=$_GET['email'];
 
  
		 
	 

	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "gtravellers1@gmail.com"; // GMAIL username
	$mail->Password = "gotravellers123@"; // GMAIL password
	$mail->From = "gtravellers1@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "hotel booing confirm ";  // set from Namesite
	$mail->Subject = "Thanks  Email For Registration"; 
	$mail->Body = "  your booking is confirm<br> 
	Thanks for Booking any query please contact";
    
	
	$mail->AddAddress($email, "booking"); // to Address
    
	

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send(); 
	echo '<script>
	  alert("Thanks for Add your Informantion");
	 window.location="../bookingemail.php";
	  </script>';
	
	
	
    
	 ?>
	

</body>
</html>
<!--- This file download from www.shotdev.com -->