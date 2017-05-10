<?php
	$admin_email = "ale.hpineda@gmail.com, jdiego.hinojosa@gmail.com, cecycontreras1@gmail.com";
	$from_name   = "contacto@g20yealaguna.com";
	
	if(isset($_POST['useremail'])) {
		
		 $user_name 	= strip_tags($_POST['username']);
		 $user_email 	= strip_tags($_POST['useremail']);
		 $comment_text 	= strip_tags($_POST['commenttext']);
		
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
			echo 5;
			exit;
		} else {
			$to  	   		= $admin_email; 
			$subject 		= "G20 ALGUIEN TE QUIERE CONTACTAR";
			$message		= "Nombre: ".$user_name." <br/>";
			$message 		.= "Email: ".$user_email." <br/>";
			$message 		.= "Comentario: ".$comment_text." <br/>";
		
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <webmaster@g20yealaguna.com>' . "\r\n";
	
			$send 			= mail($to, $subject, $message, $headers);
			
			//echo $user_name; echo $user_email;echo $comment_text;print_r($_POST);//die();
			echo '1';	
		}
	}
?>