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
      $_SESSION['nom'] = $_POST['nom'];
      $_SESSION['prenom'] = $_POST['prenom'];
      $_SESSION['mail'] = $_POST['mail'];
      $_SESSION['sujet'] = $_POST['raison'];
      $_SESSION['mess'] = $_POST['message'];
 
      if (strlen($_SESSION['nom']) == 0) {
        echo "erreur";
      }
      else {
        header('Location: http://lebistrodesgamers.fr/lipton.php');
      }
    ?>
	</body>
</html>