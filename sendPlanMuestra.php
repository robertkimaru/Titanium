<?php
    
	$email_to = 'PROSSEA <design@prossea.com> , sales@titaniumerp.net , management@prossea.com';
   	
	$name = $_POST['nameE']; 
	$tel = $_POST['tel'];
	$email = $_POST['email'];
    $razon = $_POST['social'];
	$rfc = $_POST['rfc'];
	$pais = $_POST['res'];
	$unidades = $_POST['uni'];
	
    $subject  =   "Plan Muestra WEB TITANIUM";
    $message  =   "Nombre Empresa: $name\n\n Razon Social: $razon\n\n RFC:\n $rfc\n\n Pais:\n $pais\n\n Telefono:\n $tel\n\n Correo:\n $email\n\n Num. de unidades:\n $unidades";
	
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to,  $subject, $message, $headers)){
		header("Location:EnviadoPlan.html");
        //echo 'sent';       
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>
