<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', '1');
include('lib/PHPMailer_5.2.2/class.phpmailer.php');
include('lib/PHPMailer_5.2.2/class.smtp.php');



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
    
    //var_dump($form);
    // check if a session is started and a token is transmitted, if not return an error
	if(!isset($_SESSION[$form.'_token'])){
		//echo "a1";
		return false;
    }
	
	// check if the form is sent with token in it
	if(!isset($_POST['token'])) {
		//echo "a2";
		return false;
    }
	
	// compare the tokens against each other if they are still the same
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
    }
	
	return true;
}
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
function generateFormToken($form) {
    
    // generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
	$token = md5(uniqid(microtime(), true));  
	
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token;

	return $token;
}

if(isset($_POST["token"])){

	if(isset($_POST["origin"]) and $_POST["origin"] == 1){
		if (verifyFormToken('form1')) 
		{

			 // PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags(utf8_decode($_POST['contact-name'])) . "</td></tr>";
			$message .= "<tr><td><strong>".utf8_decode("Email:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['contact-email'])) . "</td></tr>";

			if (!empty($_POST['contact-phone'])) {
				$message .= "<tr><td><strong>".utf8_decode("Teléfono:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['contact-phone'])) . "</td></tr>";
			}
		
			if(!empty($_POST['cliente'])){
				$message .= "<tr><td><strong>".utf8_decode("¿Es cliente?:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['cliente'])) . "</td></tr>";
			}

			$message .= "<tr><td><strong>Mensaje:</strong> </td><td>" . htmlentities(utf8_decode($_POST['contact-message'])) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['contact-email'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['contact-email'])); 
            } else { 
                //return "The email address you entered was invalid. Please try again!"; 
                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
                return false;
            } 

            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			//$to = 'servicioalcliente@rafaelangel.com.co';
			$to = 'disenoweb@tae-ltda.com';
			// $to = 'damarinh81@gmail.com';
			// $to = 'desarrolloweb@tae-ltda.com';
			if (!empty($_POST['contact-asunto'])) {
				$subject = $_POST['contact-asunto'];
			} else {
				$subject = '[Mensaje de Contacto]';
			}
			
			
			// $headers = "From: " . $cleanedFrom . "\r\n";
			// $headers .= "Reply-To: ". strip_tags($_POST['contact-email']) . "\r\n";
			// $headers .= "MIME-Version: 1.0\r\n";
			// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$mailA2234 = new PHPMailer();
			$mailA2234->IsSMTP();
			$mailA2234->SMTPAuth = true;
			$mailA2234->SMTPSecure = "tls";
			$mailA2234->Host = 'smtp.office365.com';
			$mailA2234->Port = 587;
			$mailA2234->Username = "noreply@simiinmobiliarias.com";//usuario perteneciente al servidor
			$mailA2234->Password = "Desarrollo.2018";
			$mailA2234->From = "noreply@simiinmobiliarias.com";
			$mailA2234->FromName = "servicioalcliente@rafaelangel.com.co";
			$mailA2234->Subject = $subject;
			$mailA2234->MsgHTML($message);
							
			$mailA2234->addAddress($to, $to);
			$mailA2234->AddCC($cleanedFrom, $cleanedFrom);
			$mailA2234->SMTPDebug=0;
			$mailA2234->IsHTML(true);
			
			// echo "$to $cleanedFrom $subject $message $headers";
            if ($mailA2234->Send()) 
            // if (mail($to, $subject, $message, $headers)) 
            {
              echo json_encode(array("type"=>"success","msg"=>"Revisaremos su solicitud o sugerencia y le daremos respuesta. Gracias por contactarnos."));
            } 
            else 
            {
              echo json_encode(array("type"=>"error","msg"=>"Error al Enviar el Correo Intentelo Nuevamente."));
            }

			
		} else {
    exit;
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
	                return false;
	            } 

	            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
	             
				$to = 'contacto@rafaelangel.com.co';
				//$to = 'desarrolloweb3@tae-ltda.com';
				/* $to = 'desarrolloweb3@tae-ltda.com';
				
				$subject = '[Mensaje Trabaje con Nosotros]';
				
				$headers = "From: " . $cleanedFrom . "\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; */

				$mailAc          = new PHPMailer();

				$mailAc->setFrom($cleanedFrom, $_POST['author']);
				$mailAc->addAddress($to);
				$mailAc->Subject  = '[Mensaje Trabaje con Nosotros]';
				$mailAc->Body     = $message;
				$mailAc->IsHTML(true);
				
				if($_FILES['documento']){
					$file_tmp  = $_FILES['documento']['tmp_name'];
					$file_name = $_FILES['documento']['name'];

					$finfo = new finfo();
					$fileinfo = $finfo->file($_FILES['documento']['tmp_name'], FILEINFO_MIME);
					$errorExt = 1;

					switch($fileinfo) {
					    case 'application/pdf':
					    $errorExt = 0;
					    break;
					    case 'application/pdf; charset=binary':
					    $errorExt = 0;
					    break;
					    default:
					    $errorExt = 1;
					    break;
					}


					if($errorExt == 1){
						echo json_encode(array("type"=>"error","msg"=>"Solo se permiten archivos .pdf"));
	                	return false;
					}
					
					
					$mailAc->AddAttachment($file_tmp, $file_name);
				}
				
				

	            if($mailAc->send()) {
	              echo json_encode(array("type"=>"success","msg"=>"Mensaje una vez se envíe el formulario: Gracias por enviarnos tus datos. Tendremos tú hoja de vida en nuestra base de datos, y la consideraremos cuando se habrá una posición acorde con el perfil."));
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
			
			if(isset($_POST["origin"]) and $_POST["origin"] == 3){

				if (verifyFormToken('form3')) {
					
					 // PREPARE THE BODY OF THE MESSAGE

					$message = '<html><body>';
					$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
					$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags(utf8_decode($_POST['name'])) . "</td></tr>";
					$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags(utf8_decode($_POST['email'])) . "</td></tr>";
					$message .= "<tr><td><strong>".utf8_decode("Teléfono:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['phone'])) . "</td></tr>";
					$message .= "<tr><td><strong>".utf8_decode("Dirección:")."</strong> </td><td>" . htmlentities(utf8_decode($_POST['address'])) . "</td></tr>";
					$message .= "<tr><td><strong>Barrio:</strong> </td><td>" . htmlentities(utf8_decode($_POST['street'])) . "</td></tr>";
					$message .= "<tr><td><strong>Comentario:</strong> </td><td>" . htmlentities(utf8_decode($_POST['comment'])) . "</td></tr>";
					$message .= "</table>";
					$message .= "</body></html>";

					$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
		            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
		                $cleanedFrom = trim(strip_tags($_POST['email'])); 
		            } else { 
		                //return "The email address you entered was invalid. Please try again!"; 
		                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
		                return false;
		            } 

		            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
		            

		            if($_POST["tipo"]==1){
						$to = 'gestioncomercial@rafaelangel.com.co';
						//$to = 'desarrolloweb3@tae-ltda.com';
		            }else{
		            	$to = 'contacto@rafaelangel.com.co';
		            }
		             
					//$to = 'desarrolloweb3@tae-ltda.com';
					
					$subject = '[Mensaje Formulario '.$_POST["title"].']';
					
					// $headers = "From: " . $cleanedFrom . "\r\n";
					// $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
					// $headers .= "MIME-Version: 1.0\r\n";
					// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					$mailA2234 = new PHPMailer();
					$mailA2234->IsSMTP();
					$mailA2234->SMTPAuth = true;
					$mailA2234->SMTPSecure = "tls";
					$mailA2234->Host = 'smtp.office365.com';
					$mailA2234->Port = 587;
					$mailA2234->Username = "noreply@simiinmobiliarias.com";//usuario perteneciente al servidor
					$mailA2234->Password = "Desarrollo.2018";
					$mailA2234->From = "noreply@simiinmobiliarias.com";
					$mailA2234->FromName = "servicioalcliente@rafaelangel.com.co";
					$mailA2234->Subject = $subject;
					$mailA2234->MsgHTML($message);
									
					$mailA2234->addAddress($to, $to);
					$mailA2234->AddCC($cleanedFrom, $cleanedFrom);
					$mailA2234->SMTPDebug=0;
					$mailA2234->IsHTML(true);
			
	// echo "$to $cleanedFrom $subject $message $headers";
            		if ($mailA2234->Send()) 
		            // if (mail($to, $subject, $message, $headers)) 
		            {
		              echo json_encode(array("type"=>"success","msg"=>"Muy pronto uno de nuestros asesores lo estará contactando para ponerse al frente de la gestión de su inmueble. Gracias por confiar en nosotros."));
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
				if(isset($_POST["origin"]) and $_POST["origin"] == 4){

					if (verifyFormToken('form4')) {

						 // PREPARE THE BODY OF THE MESSAGE

						$message = '<html><body>';
						$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
						$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags(utf8_decode($_POST['name'])) . "</td></tr>";
						$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags(utf8_decode($_POST['email'])) . "</td></tr>";
						$message .= "<tr><td><strong>".utf8_decode("Teléfono:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['phone'])) . "</td></tr>";
						$message .= "<tr><td><strong>".utf8_decode("Dirección:")."</strong> </td><td>" . htmlentities(utf8_decode($_POST['address'])). "</td></tr>";
						$message .= "<tr><td><strong>Barrio:</strong> </td><td>" . htmlentities(utf8_decode($_POST['street'])) . "</td></tr>";
						$message .= "<tr><td><strong>Comentario:</strong> </td><td>" . htmlentities(utf8_decode($_POST['comment'])) . "</td></tr>";
						$message .= "</table>";
						$message .= "</body></html>";

						$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
			            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
			                $cleanedFrom = trim(strip_tags($_POST['email'])); 
			            } else { 
			                //return "The email address you entered was invalid. Please try again!"; 
			                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
			                return false;
			            } 

			            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
			            

			             
						$to = 'contacto@rafaelangel.com.co';
						
						$subject = '[Mensaje Formulario Avaluos]';
						
						// $headers = "From: " . $cleanedFrom . "\r\n";
						// $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
						// $headers .= "MIME-Version: 1.0\r\n";
						// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						$mailA2234 = new PHPMailer();
						$mailA2234->IsSMTP();
						$mailA2234->SMTPAuth = true;
						$mailA2234->SMTPSecure = "tls";
						$mailA2234->Host = 'smtp.office365.com';
						$mailA2234->Port = 587;
						$mailA2234->Username = "noreply@simiinmobiliarias.com";//usuario perteneciente al servidor
						$mailA2234->Password = "Desarrollo.2018";
						$mailA2234->From = "noreply@simiinmobiliarias.com";
						$mailA2234->FromName = "servicioalcliente@rafaelangel.com.co";
						$mailA2234->Subject = $subject;
						$mailA2234->MsgHTML($message);
										
						$mailA2234->addAddress($to, $to);
						$mailA2234->AddCC($cleanedFrom, $cleanedFrom);
						$mailA2234->SMTPDebug=0;
						$mailA2234->IsHTML(true);
			
	// echo "$to $cleanedFrom $subject $message $headers";
            		if ($mailA2234->Send()) 
			            // if (mail($to, $subject, $message, $headers)) 
			            {
			              echo json_encode(array("type"=>"success","msg"=>"Muy pronto uno de nuestros funcionarios lo estará contactando para comenzar con el estudio de su inmueble. Gracias por confiar en nosotros."));
			            } else {
			              echo json_encode(array("type"=>"error","msg"=>"Error al Enviar el Correo Intentelo Nuevamente."));
			            }

					}else {
		    
				   		if (!isset($_SESSION[$form.'_token'])) {
				   		
				   		} else {
				   			echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
				   			//writeLog('Formtoken');
				   	    }
				   
				   	}

				}else{
					if(isset($_POST["origin"]) and $_POST["origin"] == 5){

						if (verifyFormToken('form5')) {

							 	// PREPARE THE BODY OF THE MESSAGE 

							$message = '<html><body>';
							$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
							$message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags(utf8_decode($_POST['author'])) . "</td></tr>";
							$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags(utf8_decode($_POST['email'])) . "</td></tr>";
							$message .= "<tr><td><strong>".utf8_decode("Teléfono:")."</strong> </td><td>" . strip_tags(utf8_decode($_POST['phone'])) . "</td></tr>";
							$message .= "<tr><td><strong>".utf8_decode("Dirección:")."</strong> </td><td>" . htmlentities(utf8_decode($_POST['address'])) . "</td></tr>";
							$message .= "<tr><td><strong>Barrio:</strong> </td><td>" . htmlentities(utf8_decode($_POST['street'])) . "</td></tr>";
							$message .= "<tr><td><strong>Comentario:</strong> </td><td>" . htmlentities(utf8_decode($_POST['comment'])) . "</td></tr>";
							$message .= "</table>";
							$message .= "</body></html>";

							$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
				            if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
				                $cleanedFrom = trim(strip_tags($_POST['email'])); 
				            } else { 
				                //return "The email address you entered was invalid. Please try again!"; 
				                echo json_encode(array("type"=>"error","msg"=>"Email invalido intentelo nuevamente."));
				                return false;
				            } 

				            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
				            

				             
							$to = 'agenciacajica@rafaelangel.com.co';
							//$to ='desarrolloweb3@tae-ltda.com';
							
							$subject = '[Mensaje Formulario Cajica]';
							
							// $headers = "From: " . $cleanedFrom . "\r\n";
							// $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
							// $headers .= "MIME-Version: 1.0\r\n";
							// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
							$mailA2234 = new PHPMailer();
							$mailA2234->IsSMTP();
							$mailA2234->SMTPAuth = true;
							$mailA2234->SMTPSecure = "tls";
							$mailA2234->Host = 'smtp.office365.com';
							$mailA2234->Port = 587;
							$mailA2234->Username = "noreply@simiinmobiliarias.com";//usuario perteneciente al servidor
							$mailA2234->Password = "Desarrollo.2018";
							$mailA2234->From = "noreply@simiinmobiliarias.com";
							$mailA2234->FromName = "servicioalcliente@rafaelangel.com.co";
							$mailA2234->Subject = $subject;
							$mailA2234->MsgHTML($message);
											
							$mailA2234->addAddress($to, $to);
							$mailA2234->AddCC($cleanedFrom, $cleanedFrom);
							$mailA2234->SMTPDebug=0;
							$mailA2234->IsHTML(true);
			
								// echo "$to $cleanedFrom $subject $message $headers";
            				if ($mailA2234->Send()) 
				            // if (mail($to, $subject, $message, $headers)) 
				            {
				              echo json_encode(array("type"=>"success","msg"=>"Muy pronto uno de nuestros asesores lo estará contactando para ponerse al frente de la gestión de su inmueble. Gracias por confiar en nosotros."));
				            } else {
				              echo json_encode(array("type"=>"error","msg"=>"Error al Enviar el Correo Intentelo Nuevamente."));
				            }

						}else{
			    
					   		if (!isset($_SESSION[$form.'_token'])) {
					   		
					   		} else {
					   			echo json_encode(array("type"=>"success","msg"=>"Mensaje Enviado Correctamente"));
					   			//writeLog('Formtoken');
					   	    }
					   
					   	}

					}
				}
			}
		}

	}

}
?>