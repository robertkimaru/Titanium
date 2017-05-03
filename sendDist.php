<?php

	
	$to = 'PROSSEA <design@prossea.com> , sales@titaniumerp.net ';
	//$to = 'design@prossea.com';
	$from = 'From: PAGINA WEB TITANIUM'; 
    $subject  =   'Distribuidor Titanium';

    $name     =   $_POST['name'];
	$apell    =   $_POST['apellido'];
	$tel     =   $_POST['tel'];  
    $email    =   $_POST['email'];
	$rfc    =   $_POST['rfc'];
	$social    =   $_POST['social'];
	$res    =   $_POST['res'];
	$ent    =   $_POST['ent'];
    $message  =   $_POST['message'];
    

    $body = "Nombre: $name\n\n Apellidos: $apell\n\n Correo de la persona: $email\n\n RFC: $rfc \n\n Razon Social: $social\n\n Ciudad/Estado/Pais: $res\n\n Como se entero de prossea?: $ent\n\n Comentiario:\n $message";
	


    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoDistribuidor.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }

?>