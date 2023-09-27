<?php

	echo "Traversée 'Aller' : \n" ;
	
		echo "Saisir le nom du port de départ : " ;
		$portDepart = rtrim ( fgets( STDIN ) ) ;
		echo "Saisir le nom du port d'arrivée : " ;
		$portArrivee = rtrim ( fgets( STDIN ) ) ;
		echo "Départ : " , $portDepart , "         Arrivée : " , $portArrivee , " \n";
		
	echo "Traversée 'Retour' : \n" ;
		$remplacement = $portDepart ;
		$portDepart = $portArrivee ;
		$portArrivee = $remplacement ;
		echo "Départ : " , $portDepart , "         Arrivée : " , $portArrivee , " \n";
		
?>
