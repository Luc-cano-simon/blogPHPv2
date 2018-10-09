<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/navbar.css" rel="stylesheet" />
	<link href="css/articles.css" rel="stylesheet" />
	<link href="css/modal.css" rel="stylesheet" />
	
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	
	<title>Mon blog</title>
</head>
<body>

	<?php 
	require("login.php")
	?>


	<!-- Navbar -->

	<div id="main">


		<nav>
			<ul>
				<li><a style="text-decoration:none" type="button"  id="myBtn">Admin</a></li>
				<li><a style="text-decoration:none" href="#">contact</a></li>
				<li><a style="text-decoration:none" href="#">Gallery</a></li>
				<li><a style="text-decoration:none" href="#">Portfolio</a></li>
				<li><a style="text-decoration:none" href="#">Blog</a></li>


				<!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>  -->
			</ul>
		</nav>

	</div>
	<!-- fin Navbar -->







	<!-- début des articles -->
	<?php
// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

// On récupère les 5 derniers billets
	$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 15');

	while ($donnees = $req->fetch())
	{
		?>
		<article>
			<h3>
				<?php echo $donnees['titre']; ?>
				<em>le <?php echo $donnees['date_creation_fr']; ?></em>
			</h3>

			<p>
				<?php
    // On affiche le contenu du billet
				echo nl2br($donnees['contenu']);
				?>
				<br />
				<em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
			</p>
		</article>
		<?php
} // Fin de la boucle des billets
$req->closeCursor();




?>








<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

