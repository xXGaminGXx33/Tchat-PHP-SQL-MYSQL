	<?php
		include('init.php'); // En inclus la requete pour la conenxion a la base de données.
			$requete = $Bdd->query('SELECT pseudo,message, date_format(date_creation, \'%d/%m/%Y %Hh%imin%ss\') AS date_creation FROM tchat ORDER BY id DESC LIMIT 10'); // requete enregistre les 10 derniers pseudo,messageett date de créations et stocke sa.
				while ($reponse = $requete->fetch()) { // En fait une boucle a chaque foit qu'il y a une table mais en s'arrete a 10
					echo '' . htmlspecialchars($reponse['pseudo']) . ' - ' . htmlspecialchars($reponse['message']) . ' created ' . htmlspecialchars($reponse['date_creation']) . '<br />'; // En Affiche les 10 derniers pseudo,messageett date de créations.
	}
	?>
	<form action="tchatpost.php" method="post"> <!-- Envoie du formulaire en POST ['pseudo'] AND ['message'] -->
	<label><input type="text" name="pseudo"></label><br />
	<label><input type="text" name="message"></label><br />
	<input type="submit" value="Envoyer">
	</form>
