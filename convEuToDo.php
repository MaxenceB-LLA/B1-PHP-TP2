<?php

	define ( "ETOD" , 1.3 )  ;
	echo "Saisir le montant en euros : "  ;
	$prixEuros = rtrim( fgets( STDIN ) );
	echo "Prix : " , $prixEuros , " €\n" ;
	$prixDollars = ETOD * $prixEuros ;
	echo "Prix : " , $prixDollars , " $\n" ;
	
?>
