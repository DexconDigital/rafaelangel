<?php
session_start();



function getRealIp() {
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
     $ip=$_SERVER['HTTP_CLIENT_IP'];
   } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
   } else {
     $ip=$_SERVER['REMOTE_ADDR'];
   }
   return $ip;
}

function verifyFormToken($form) {
    
    // check if a session is started and a token is transmitted, if not return an error
	if(!isset($_SESSION[$form.'_token'])) { 
		return false;
    }
	
	// check if the form is sent with token in it
	if(!isset($_POST['token'])) {
		return false;
    }
	
	// compare the tokens against each other if they are still the same
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
    }
	
	return true;
}

function generateFormToken($form) {
    
    // generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
	$token = md5(uniqid(microtime(), true));  
	
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token; 
	
	return $token;
}

if(isset($_POST["token"])){

	if(isset($_POST["origin"]) and $_POST["origin"] == 1){

		if (verifyFormToken('form1')) {

			 // PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['contact-name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['contact-email']) . "</td></tr>";
			$message .= "<tr><td><strong>Teléfono:</strong> </td><td>" . strip_tags($_POST['contact-phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Mensaje:</strong> </td><td>" . htmlentities($_POST['contact-message']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['contact-email'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['contact-email'])); 
            } else { 
                //return "The email address you entered was invalid. Please try again!"; 
                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
            } 

            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'auxadmin@tae-ltda.com';
			
			$subject = '[Mensaje de Contacto]';
			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['contact-email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
              echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
            } else {
              echo json_encode(array("type"=>"error","msg"=>"Error al Enviar el Correo Intentelo Nuevamente."));
            }

			
		} else {
    
	   		if (!isset($_SESSION[$form.'_token'])) {
	   		
	   		} else {
	   			echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
	   			//writeLog('Formtoken');
	   	    }
	   
	   	}

	}else{

		if(isset($_POST["origin"]) and $_POST["origin"] == 2){

			if (verifyFormToken('form2')) {

				 // PREPARE THE BODY OF THE MESSAGE

				$message = '<html><body>';
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($_POST['author']) . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Teléfono:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
				$message .= "<tr><td><strong>Area Profesional:</strong> </td><td>" . htmlentities($_POST['area']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";

				$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
	            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
	                $cleanedFrom = trim(strip_tags($_POST['email'])); 
	            } else { 
	                //return "The email address you entered was invalid. Please try again!"; 
	                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
	            } 

	            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
	             
				$to = 'auxadmin@tae-ltda.com';
				
				$subject = '[Mensaje Trabaje con Nosotros]';
				
				$headers = "From: " . $cleanedFrom . "\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	            if (mail($to, $subject, $message, $headers)) {
	              echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
	            } else {
	              echo json_encode(array("type"=>"error","msg"=>"Error al Enviar el Correo Intentelo Nuevamente."));
	            }

				
			} else {
	    
		   		if (!isset($_SESSION[$form.'_token'])) {
		   		
		   		} else {
		   			echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
		   			//writeLog('Formtoken');
		   	    }
		   
		   	}

		}

	}
	
	
}


?>