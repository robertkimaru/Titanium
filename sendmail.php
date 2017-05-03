<?php

	$email_to = 'PROSSEA <design@prossea.com> , sales@titaniumerp.net ';
	  
    $name    =   $_POST['name'];
	$email    =   $_POST['email'];
	$Asunto    =   $_POST['subject'];
	$mensaje    =   $_POST['message'];
	$entero    =   $_POST['ent'];
	
    $subject  =   "(Mensaje Pag. WEB TITANIUM)";
    $message  =   "Nombre: $name\n\n Correo: $email\n\n Asunto:\n $Asunto\n\n Mensaje:\n $mensaje\n\n Como se entero?:\n $entero";
	
	
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to,  $subject, $message, $headers)){
       header("Location:EnviadoContacto.html");      
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>