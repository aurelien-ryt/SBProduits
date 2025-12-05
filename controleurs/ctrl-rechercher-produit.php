<?php


	$PrelibelleProduit = $_POST[ "libelle" ] ;
	$libelleProduit = htmlspecialchars($PrelibelleProduit);
	
	require "modeles/ModeleSBProduits.php" ;
	$produits = ModeleSBProduits::getProduitsByLibelle( htmlspecialchars($libelleProduit)) ;
	
	require "vues/vue-produits-recherches.php" ;

?>
