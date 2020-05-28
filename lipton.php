<!DOCTYPE html>
<html>
	<head>
    <meta charset="iso-8859-1">
    <title>Succès !</title>
	</head>

	<body>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <?php
      session_start();
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $mail = $_POST['mail'];
      $sujet = $_POST['raison'];
      $mess = $_POST['message'];
 
      ini_set( 'display_errors', 1 );
 
      error_reporting( E_ALL );
 
      $from = "site@lebdg.fr";
 
      $to = "contact@lebdg.fr";
 
      $subject = $_SESSION['sujet'];
 
      $message = ( $_SESSION["prenom"] .' '. $_SESSION["nom"] . ' à envoyé un mail depuis le site : '. "\r"
		  . $mess );
 
      $headers = "From:" . $_SESSION["mail"];
 
      mail($to,$subject,$message, $headers);
 
      echo "L'email a été envoyé.";
      header('Location: http://lebistrodesgamers.fr/');
    ?>
	</body>
</html>