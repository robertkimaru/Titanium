<?php
    
	$email_to = 'PROSSEA <design@prossea.com> , sales@titaniumerp.net ';
   	
	$name = $_POST['empresa']; 
    $razon = $_POST['razon'];
	$RFC = $_POST['rfc'];
	$cont = $_POST['cont'];
	$tel = $_POST['tel'];
	$direc = $_POST['direc'];
	$mail = $_POST['mail'];
	
    $subject  =   "Demo WEB TITANIUM";
    $message  =   "Nombre Empresa: $name\n\n Razon Social: $razon\n\n RFC:\n $RFC\n\n Contacto:\n $cont\n\n Telefono:\n $tel\n\n Direccion:\n $direc\n\n Correo:\n $mail";
	
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to,  $subject, $message, $headers)){
		header("Location:EnviadoDemo.html");
        //echo 'sent';       
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>