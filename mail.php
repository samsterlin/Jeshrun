<?php 

$posName = $_POST['posName'];
$posEmail = $_POST['posEmail'];
$posRegard = $_POST['posRegard'];
$posText = $_POST['posText'];



	$message="Name : $posName \n 
			  Email : $posEmail \n
			  Mobile : $posRegard \n
			  Message : $posText \n
				We will Contact you soon !!!! \n ";
				
	$header = "From: auto-confirm@onlinetypingworks.com<br>"; 
	$header .= "Reply-to: info@onlinetypingworks.com \r\n"; 
	
	
	$admin_email="captchasonline@gmail.com";
	$emailaddress = $posEmail;
	$emailsubject = 'Jeshurun InfoSoft Solutions - Inquiry';
	
	
	//ini_set(sendmail_from,'info@mcb.com');
 	if(mail($emailaddress, $emailsubject, $message, $header) && mail($admin_email, $emailsubject, $message, $header))
	{
		echo "<script> window.location='contact.php';</script>";
		//$this->msg="Register Number has been sent to your mail! ";
	
	}
	else 
	
	{
			echo "<script> alert('Mail not sent!'); </script>";
		   echo "<script> window.location='contact.php';</script>";
		//$this->msg=" Mail sending failed!";
	}





?>