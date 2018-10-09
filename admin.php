<!DOCTYPE html>
<html>
<head>
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> -->
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/wbbtheme.css" type="text/css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<title>Page admin</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/jquery.wysibb.min.js"></script>
	<script src="js/fr.js"></script>

</head>
<body>

	<form action="" method="post">
		<p>Votre Titre d'article</p>
		<input type="text" name="titre" placeholder="Tape ton titre d'article ici ">
		<textarea type ="text" name="contenu" id="wysibb"></textarea>
		<button class="btn btn-primary" name="Envoyer" id="Envoyer">validez</button>
	</form>


<?php  
try 
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root','', $pdo_options);
		$req = $bdd->prepare('INSERT INTO billets (titre, contenu)
			VALUES(:titre, :contenu)');
		$req->execute(array(
			':titre' => $_POST['titre'],// la valeur du $_POST correspond aux names des inputs pour récup la valeur saisie 
			':contenu' => $_POST['contenu'],
			
		));

// Redirection automatique vers le blog une fois qu'on clique sur Envoyer

		/*header('Location: accueil.php');*/
	}
	catch (Exception $e)
	{
        // die('Erreur : ' . $e->getMessage());
	}

	?>


	
	<script type="text/javascript" src="js/app.js"></script>

</body>
</html>
