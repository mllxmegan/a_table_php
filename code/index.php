<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>A table</title>
</head>
<body>
<?php 
include "table.php"?>
<header>
	<h1> BDD : Le meilleur resto</h1>
	
</header>

<div>
	<table class = "global">
		<!--nbre flash février-->

		<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
			<?php 
				echo 
				"	<tr>
						<td colspan='4' class='h3'>
							<h3 class='statglobales'>Nos Stats</h3>
						</td>
					</tr>
					<tr>
						<th colspan ='2'>Requête</th>
						<th>Mois/Période</th>
						<th>Résultat</th>
					</tr>
					<tr>
						<td colspan ='2'>Nombre de flash
						</td>
						<td>Février
						</td>";
						echo 
						"<td>
							<span class='result'>" . ($row['nbre_flash_fevrier']) . 
							"</span>
						</td>
					</tr>
				"; 
			?>
	     <?php endwhile; ?>

		 
		<?php while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
			<?php 
				echo 
				"
					<tr>
						<td colspan ='2'>Nombre de flash
						</td>
						<td>Mars
						</td>";
						echo 
						"<td>
							<span class='result'>" . ($row['nbre_flash_mars']) . 
							"</span>
						</td>
					</tr>
				"; 
			?>
	     <?php endwhile; ?>

		 <!--nbre de tables au soleil-->
		 <?php while($row = $stmt8->fetch(PDO::FETCH_ASSOC)) : ?>
	     	<?php
	     		echo
	     			"<tr>
						<td colspan ='2'>
							Nombre de tables au soleil
						</td>
						<td>/
						</td>";
						echo
						"<td>
							<span class='result'>" . ($row['nbre_table_au_soleil']) . 
							"</span>
						</td>
					</tr>";
			?>
		<?php endwhile; ?>

		<!--nbre de table à l'ombre et à l'extérieur-->
	    <?php while($row = $stmt9->fetch(PDO::FETCH_ASSOC)) : ?>
	     	<?php
	     		echo
	     			"<tr>
						<td colspan ='2'>
							Nombre de tables à l'ombre en extérieur
						</td>
						<td>/
						</td>";
						echo
						"<td>
							<span class='result'>" . ($row['nbre_table_ombre_exterieur']) . 
							"</span>
						</td>
					</tr>";
			?>
		<?php endwhile; ?>

		<?php while($row = $stmt7->fetch(PDO::FETCH_ASSOC)) : ?>
	     	<?php
	     		echo
	     			"<tr>
						<td colspan = '2'>
							Nombre total de clients
						</td>
						<td>Depuis l'ouverture du restaurant
						</td>";
						echo
						"<td>
							<span class='result'>" . ($row['nbre_client']) . 
							"</span>
						</td>
					</tr>";
			?>
		<?php endwhile; ?>

		 
		<?php while($row = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
			<?php 
				echo 
				"
					<tr>
						<td colspan ='2'>Nombre de téléphone de la marque: <u>Samsung</u>
						</td>
						<td>/
						</td>";
						echo 
						"<td>
							<span class='result'>" . ($row['nbre_de_telephone_samsung']) . 
							"</span>
						</td>
					</tr>
				"; 
			?>
			<?php endwhile; ?>
	</table>
</div>
</body>
</html>