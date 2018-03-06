
<?php include "templates/header.php"; ?>
<main>
	<h1 class="majuscule text-center">contact</h1>


	<section id="sectionContact">
		<div class="container">
			
				<div class="accessibilite">
					<div class="bloc-acces">
						<img src="asset/img/pointmap.png" alt="">
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
						<img src="asset/img/pointmap.png" alt="">
						<div>
							<h3>Horaire d'ouverture</h3>
							<p>
								Lundi-Vendredi 14h-20h
							</p>	
							<p>						Samedi-Dimanche fermé
							</p>
						</div>
						
					</div>
				</div>


				<div class="map">
				</div>


				
		</div>
	</section>


	<section id="sectionForm">
		<div class="container">
				<p class="text-center">Pour toute demande d'information</p>

				<form id="myContactForm" method="" action="" class="text-center">

					<label for="nom">Nom</label>
					<input type="text" name="nom" id="nom">

					<label for="prenom">Prénom</label>
					<input type="text" name="prenom" id="prenom">
					
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email">
					
					<label for="sujet">Sujet</label>
					<input type="text" name="sujet" id="sujet">
					
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10"></textarea>
					
					<!-- <button name="envoyer" value="envoyer" class="majuscule envoyer-btn">Envoyer</button> -->

					<button class="majuscule envoyer-btn" type="submit"  name="envoyer" id="envoyer">Envoyer</button>

				</form>

				<div >
	                <p id="result"></p>
	            </div>

		</div>
	</section>

</main>


<?php include "templates/footer.php"; ?>
