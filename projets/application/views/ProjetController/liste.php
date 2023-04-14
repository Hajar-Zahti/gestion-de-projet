<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
	#p{
		border-radius:1px;
		margin-left:820px;
		width:60px;
	}
</style>
</head>
<body>



<h1 class="text-center  my-5 py-3">Liste des projets </h1>
<div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">
    <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"></th>
                    <th scope="col" style=;color:#8B8987;">Titre</th>
                    <th scope="col" style="width:150px; color:#8B8987;">Date Début</th>
                    <th scope="col" style="width:120px; color:#8B8987;">Date Fin</th>
                    <th scope="col" style="width:200px; color:#8B8987;">Description</th>
                    <th scope="col" colspan="4" style=color:#8B8987;>Action</th>
                    </tr>
                </thead>
                <tbody>
					<?php
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a  style="color:#EB9811;" title="Supprimer Le projet" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	  <td><a style="color:#EB9811;" title="Planifier Le projet" href="../TaskController/add/'.$projet['Id'].'">Ajouter une tache</td>
	  <td><a style="color:#EB9811;" title="Details du Projet" href="../ProjetController/details/'.$projet['Id'].'">Details</td>
	  </tr>';
}
echo '</table>';
?>
<br>
<br>
	<a href="../projetController/add" title="Ajouter Nouveau Projet">Ajouter un projet</a>

	
	</body>
</html>