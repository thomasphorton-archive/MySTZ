<?

	include("libraries/php/class.phpmailer.php");

	function died($error) {
	        // your error code can go here
	        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
	        echo "These errors appear below.<br /><br />";
	        echo $error."<br /><br />";
	        echo "Please go back and fix these errors.<br /><br />";
	        die();
	    }
	
		 // validation expected data exists
	    if(!isset($_POST['name']) ||
	        !isset($_POST['email']) ||
	        !isset($_POST['address1']) ||
	        !isset($_POST['city']) ||
	        !isset($_POST['state']) ||
	        !isset($_POST['zip'])) {
	        died('We are sorry, but there appears to be a problem with the form you submitted.');      
	    }
	
	  $name = $_POST['name'];
		$email = $_POST['email'];	
		$address1 = $_POST['address1'];	
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$state = $_POST['state'];		
		$zip = $_POST['zip'];
		$spamcheck = $_POST['spamcheck'];
		
		$error_message = "";
		if($spamcheck!="nospam"){
			$error_message .= "You're being sketchy. Please submit the form correctly. <br>";
		}
		
		function check_for_spam($this){
			if ((strpos($this,'<') !== false)||(strpos($this,'>') !== false)  || (strpos($this, 'www') !== false)) {
	    	$error_message .= 'No web addresses or HTML allowed in the forms, sorry! <br>';
	    }
		}
		
		check_for_spam($name);
		
		
		if (strlen($error_message) > 0){
			died($error_message);
		}

	$mail = new PHPMailer();
	
	//$mail->IsSMTP();                                     	// set mailer to use SMTP
	$mail->Host = "65.254.250.101";  			// specify main and backup server
	$mail->SMTPAuth = "true";     							// turn on SMTP authentication
	$mail->Username = "contact@mystz.com";  		// SMTP username
	$mail->Password = "ClarkQuint12";						// SMTP password
	
	$mail->SetFrom("contact@mystz.com","MySTZ.com");
		
	//print_r($_POST);
		
	/////////////////////// 	 	
	$mail->AddAddress("contact@mystz.com");
	///////////////////////
	
	$mail->WordWrap = 80;                                 	// set word wrap to 50 characters
	$mail->IsHTML(true);                                  	// set email format to HTML
	
	$mail->Subject = "Sticker Pack Request from $name";

	$message = "Name: " . $name . "<br />";
	$message.= "E-mail: " . $email . "<br />";
	$message.= "Address Line 1: " . $address1 . "<br />";
	$message.= "Address Line 2: " . $address2 . "<br />";		
	$message.= "City: " . $city . "<br />";
	$message.= "State: " . $state . "<br />";
	$message.= "Zip: " . $zip . "<br />";
	
	$mail->Body    = $message;
	$mail->AltBody = $message;

	$mail->Send();
	/*		
	$mail2 = new PHPMailer();
	
	//$mail->IsSMTP();                                     	// set mailer to use SMTP
	$mail2->Host = "184.173.174.10";  			// specify main and backup server
	$mail2->SMTPAuth = "true";     							// turn on SMTP authentication
	$mail2->Username = "info@rrbuildersnc.com";  		// SMTP username
	$mail2->Password = "L0ganR1ddle";						// SMTP password
	
	$mail2->SetFrom("info@rrbuildersnc.com","R&R Builders");
		
	//print_r($_POST);
		
	/////////////////////// 	
	$mail2->AddAddress($email);
	///////////////////////
	
	$mail2->WordWrap = 80;                                 	// set word wrap to 50 characters
	$mail2->IsHTML(true);                                  	// set email format to HTML
	
	$mail2->Subject = "Thank You For Your Interest in R&R Builders!";

	$message = '<p>Hello '.$name.', <br /><br />Thank you for your interest in R&R Builders! We\'re incredibly proud of our work, and we\'re glad to have piqued your interest. We usually respond to online inquiries within 24 hours. Until then, please review the information you submitted to use. If you have any corrections or additional comments, please send them in a reply to this email.<br /><br />
	Cheers!<br />
	The R&R Builders Team</p>';
	
	$mail2->Body    = $message;
	$mail2->AltBody = $message;

	$mail2->Send();
*/
	//echo "1";
	header("Location: form.thanks.sticker.php");
?>