<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script type="text/javascript">
	 	$(document).ready(function(){
    	$("#form").change(function(){
        $("#infoClient").load("showClient.php?client="+$("#client").val());
    });
});
	 </script>
	<title>Client e-commerce historique de commande</title>

</head>
<body>
	<h1>Client e-commerce historique de commande</h1>
<?php
	require_once('init.inc.php'); 
	$client = $pdo->query("SELECT * FROM clients");
	$clients = $client->fetchAll(PDO::FETCH_ASSOC);
?>
	<form action="#" method="post" id="form">
	<select id="client">
		<?php foreach ($clients as $key => $value) :?>
			
	       	<option value="<?=$value['id']?>"><?=$value['prenom']?> <?=$value['nom']?></option>
	    
		<?php endforeach;?>
	 </select>
   
</form>
<div id="infoClient"></div>
</body>
</html>