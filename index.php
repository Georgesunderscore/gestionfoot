<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Gestion-Foot</title>
</head>

<body>

	<h1>Exercice Foot </h1>
	<p>

	</p>
	<h2>Résultat </h2>



	<?php

    //importer tous les classes 
	spl_autoload_register(function ($class_name) {
		require_once $class_name . '.php';
	});




    $liban = new Pays("Liban");
    $france = new Pays("France");

    $libanais = new Nationalite("Libanais");
    $francais = new Nationalite("Francais");

    $equipePSG = new Equipe("PSG",$france);
    $equipeTADAMONSOUR = new Equipe("TADAMON-SOUR",$liban);
    $equipeNEJMI = new Equipe("NEJMI",$liban);

    $georges = new Joueur("georges", "kayal", "29-02-1986", $equipeTADAMONSOUR);
    $messi = new Joueur("messi", "famille", "29-02-1986", $equipePSG);
    
    
    

	echo "<div> On liste les équipes d'un PAYS</div>";
	echo "<div class='container-flex-row'>";
	$liban->getListEquipeAffichage();
	$france->getListEquipeAffichage();
	echo "</div>";

    echo "<div> On liste les joueurs de chaque équipe (remarquez que des joueurs apparaissent dans plusieurs équipes à 
                des années différentes</div>";

	echo "<div class='container-flex-row'>";

	$equipeTADAMONSOUR->getListJoueurEquipeAffichage();
    $equipeNEJMI->getListJoueurEquipeAffichage();
    $equipePSG->getListJoueurEquipeAffichage();
	
	echo "</div>";
	


	?>
</body>

</html>