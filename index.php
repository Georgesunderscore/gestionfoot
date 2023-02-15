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
	$italy = new Pays("Italy");
	$saudi = new Pays("Saudi");
    $france = new Pays("France");
	$england = new Pays("England");

	$nationLB = new Nationalite("Libanais");
	$nationIT = new Nationalite("Italien");
	$nationBR = new Nationalite("Brezilien");
    $nationFR = new Nationalite("Francais");
	$nationPR = new Nationalite("Portogais");
	$nationAR = new Nationalite("Argentin");

    $libanais = new Nationalite("Libanais");
    $francais = new Nationalite("Francais");
	

    $equipeMU = new Equipe("MannUnited",$england,1970);

	$equipePSG = new Equipe("PSG",$france,1970);

    $equipeTADAMONSOUR = new Equipe("TADAMON-SOUR",$liban,2000);
    $equipeNEJMI = new Equipe("NEJMI",$liban,2001);

	$equipeAlNasser = new Equipe("AlNassser",$saudi,1990);
	$equipeJuvi = new Equipe("Juventus",$italy,1990);
	
	
	$_listJoueurAffichage = [];
	


    $georges = new Joueur("georges", "kayal", "29-02-1986",$nationLB);
	$_listJoueurAffichage [] = $georges;
	$totti = new Joueur("Totti", null, "29-02-1986",$nationIT);
	$_listJoueurAffichage [] = $totti;
    $messi = new Joueur("messi", null, "29-02-1986",$nationAR);
	$_listJoueurAffichage [] = $messi;
    $naymar = new Joueur("Naymar", null, "29-02-1986",$nationBR);
	$_listJoueurAffichage [] = $naymar;
	$CR7 = new Joueur("CR7", null, "29-02-1986",$nationPR);
	$_listJoueurAffichage [] = $CR7;


	
	$saisonpsg01012023 = new Saison($georges, $equipeTADAMONSOUR,'01-01-2023'); 
	$saisonpsg01012023 = new Saison($totti, $equipePSG,'01-01-2023'); 
	$saisonpsg01012023 = new Saison($messi, $equipePSG,'01-01-2023'); 
	$saisonpsg01012023 = new Saison($naymar, $equipePSG,'01-01-2023'); 
	$saisonMU01012010 = new Saison($CR7, $equipeMU,'01-01-2010'); 
	$saisonMU01012018 = new Saison($CR7, $equipeJuvi,'01-01-2018'); 
	$saisonMU01012020 = new Saison($CR7, $equipeMU,'01-01-2020'); 
	$saisonMU01012023 = new Saison($CR7, $equipeAlNasser,'01-01-2023'); 
	

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
			$equipeMU->getListJoueurEquipeAffichage();
			$equipeAlNasser->getListJoueurEquipeAffichage();
			
	echo "</div>";

	echo "<div class='container-flex-row'>On liste la carrière d'un joueur</div>";
	echo "<div class='container-flex-row'>";
		foreach($_listJoueurAffichage as $j){
			$j->getListEquipeJoueurAffichage();
		}
		
			
	echo "</div>";

	?>
</body>

</html>