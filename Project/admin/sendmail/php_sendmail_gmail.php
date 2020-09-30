<?php
session_start();
include '../connection.php';
?>





<html>
<head>
<title>MAIL SENDING</title>
</head>
<body>
<?php
  echo   $_SESSION['email']=$_POST['email'];
 
	
	
	if(isset($_POST['button']))
     { 
	
	echo $qry="select * from register where email ='".$_POST['email']."'";
	
	$res=mysql_query($qry);
	$res1=mysql_fetch_array($res);
	
	if($res1!="")
	{
	
	 echo '<script> 
                alert("This Email Id Is Already Registered");
				window.location="../register.php";
                </script>';
	 
	}
	else 
	
	  {	 
     $qry="insert into register(name,country,city,address,m_number,email,password) values('".$_POST['name']."','".$_POST['country']."',
   			'".$_POST['city']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['password']."')";
                 mysql_query($qry);
     
   
  
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "rajjatanveer7@gmail.com"; // GMAIL username
	$mail->Password = "rajja123"; // GMAIL password
	$mail->From = "rajjatanveer7@gmail.com";//"name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "Gops";  // set from Namesite
	$mail->Subject = "Thanks"; 
	$mail->Body = "thaks for registration in Ecommerce web site";

	$mail->AddAddress($_POST['email'], " abc "); // to Address
    
	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
	

	$mail->Send(); 
	
	echo '<script> 
                alert("Thank you for Registration");
				window.location="../Shipping.php";
                </script>';

	
	
    	
	 
	 
			
//redirecturl('../forgotpass.php');
	}
	}
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->