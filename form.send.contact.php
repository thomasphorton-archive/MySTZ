<?
	include("/js/libs/php/class.phpmailer.php");

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
	        !isset($_POST['subject']) ||
	        !isset($_POST['message'])
	    ){
	        died('We are sorry, but there appears to be a problem with the form you submitted.');      
	    }
	
	  $name = $_POST['name'];
		$email = $_POST['email'];	
		$subject = $_POST['subject'];	
		$message_content = $_POST['message'];
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
	
	//$mail->IsSMTP();                    // set mailer to use SMTP
	$mail->Host = "65.254.250.101";  			// specify main and backup server
	$mail->SMTPAuth = "true";     							// turn on SMTP authentication
	$mail->Username = "contact@mystz.com";  		// SMTP username
	$mail->Password = "ClarkQuint12";						// SMTP password
	
	$mail->SetFrom("contact@mystz.com","MySTZ.com");
		
	//print_r($_POST);
		
	/////////////////////// 	 	
	$mail->AddAddress("th77409@gmail.com");
	///////////////////////
	
	$mail->WordWrap = 80;                                 	// set word wrap to 50 characters
	$mail->IsHTML(true);                                  	// set email format to HTML
	
	$mail->Subject = $subject;

	$message = "Name: " . $name . "<br />";
	$message.= "E-mail: " . $email . "<br />";
	$message.= "Message: " . $message_content;
		
	$mail->Body    = $message;
	$mail->AltBody = $message;

	$mail->Send();

	//echo "1";
	header("Location: form.thanks.contact.php");
?>