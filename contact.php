
<?php include "templates/header.php"; ?>

<section id="sectionContact">
	<div class="container">
		<h1 class="majuscule text-center"></h1>
		
			<p class="text-center">Pour toute demande d'information</p>
			<form>

				<label for="nom">Nom</label>
				<input type="text" name="nom">

				<label for="">Prénom</label>
				<input type="text" name="prenom">
				
				<label for="email">E-mail</label>
				<input type="text" name="email">
				
				<label for="sujet">Sujet</label>
				<input type="text" name="sujet">
				
				<label for="message">Message</label>
				<textarea name="message" id="" cols="30" rows="10"></textarea>
				
				<input class="majuscule" type="submit" name="envoyer" value="envoyer" id="envoyer">

			</form>


			<div class="accessibilite">
				<div class="bloc-acces">
					<img src="" alt="">
					<div>
						<h3>Accès</h3>
						<p>
							Le cinéma Véo de Muret<br>
							49 avenue'Europe<br>
							31600 Muret
						</p>

					</div>
				</div>
				<div class="bloc-acces">
					<img src="" alt="">
					<div>
						<h3>Horaire d'ouverture</h3>
						<p>
							Lundi-Vendredi 14h-20h<br>
							Samedi-Dimanche fermé
						</p>

					</div>
					
				</div>
			</div>
			
	</div>
</section>

<section id="sectionMap">
	
</section>


<?php include "templates/footer.php"; ?>
