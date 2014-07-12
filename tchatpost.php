	<?php
		if(@$_POST['pseudo'] AND $_POST['message']) { // En regarde si en a bien reçus ['pseudo'] AND ['message'] si oui en execute ceci
			include('init.php'); // En inclus la requete pour la conenxion a la base de données.
				$requete = $Bdd->prepare('INSERT INTO tchat(pseudo,message,date_creation) VALUES(?, ?, Now())'); // En insert dans la table tchat pseudo,message,date_creation
					$requete->execute(array( // en enregistre pseudo et message dans la variable requete
						$_POST['pseudo'],
							$_POST['message']
							));
			header('location: tchat.php'); // Puis en redirige vers tchat.php
		}else {
			header('location: tchat.php'); // En a rien reçus alors en redirige vers tchat.php
		}
	?>
