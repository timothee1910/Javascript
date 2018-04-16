<?php
	require_once('init.inc.php'); 
	$commande = $pdo->query("SELECT * FROM commandes,clients WHERE commandes.id_clients = clients.id
	AND id_clients=".$_GET['client']);

	$commandes = $commande->fetchAll(PDO::FETCH_ASSOC);

 	foreach ($commandes as $key => $value){
 		echo "La commande était d'un montant de ".$value['montant']." €";
 		echo "<br />";
 	}
?>