<?php 
$nom=htmlspecialchars($_POST['nom']); 
$mail=htmlspecialchars($_POST['mail']); 
$message=htmlspecialchars($_POST['message']); 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";
$subject="viens du portfolio"; 
$destinataire="juliette@saint-jalme.fr"; 
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>";
 header('Location: index.php');
} else { 
echo "Une erreur s'est produite"; 
} 
?>
