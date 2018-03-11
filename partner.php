
<?php include "templates/header.php";

$recherche_partenaire= $bdd->query("SELECT * FROM partenaire");?>

  <h1 class="text-center majuscule">Nos partenaires</h1>

<main>
  <section id="sectionpartenaire-page_page">
    <div class="container">
		<h4 class="text-center">
			Liste des partenaires de Planète Manga<br>
			Sur présentation de votre carte, voici les avantages obtenus :
		</h4>

      <!--   <div class="bloc-partenaire-page">
          <div class="bloc-img-partenaire-page">
            <img class="img-adapte" src="asset/img/partenaire1.png" alt="shonenjump">
          </div>
          <div class="bloc-description-partenaire-page">
            <h4>
              Restaurant « Le Bambou »
            </h4>
            <p> -2€ sur tous les menus (y compris le menu du midi)</p>
          
      
          </div>
          
          <p class="clear"></p>
        </div>
    
        <div class="bloc-partenaire-page">
          <div class="bloc-img-partenaire-page">
            <img class="img-adapte" src="asset/img/partenaire2.png" alt="lemonde">
          </div>
          <div class="bloc-description-partenaire-page">
            <h4>
               Librairie « Biffures »
            </h4>
            <p>Place de la République à Muret : -5% sur tous les mangas</p>
            
          </div>
          
          <p class="clear"></p>
        </div>

        <div class="bloc-partenaire-page">
          <div class="bloc-img-partenaire-page">
            <img class="img-adapte" src="asset/img/partenaire3.png" alt="lemonde">
          </div>
          <div class="bloc-description-partenaire-page">
            <h4>
              Librairie Biffures à Toulouse
            </h4>
            <p>-5% sur tous les mangas</p>

      
          </div>
          
          <p class="clear"></p>
        </div>  -->

        <?php 
    

          while($part= $recherche_partenaire->fetch(PDO::FETCH_ASSOC))
          {
        ?>
            
            <div class="bloc-partenaire-page">
              <div class="bloc-img-partenaire-page">
                <img class="img-adapte" src="asset/img/partenaire3.png" alt="lemonde">
              </div>
              <div class="bloc-description-partenaire-page">
                <h4>
                  <?php echo htmlentities($part['nom'],ENT_QUOTES); ?>
                </h4>
                <p class="description-partenaire"><?php  echo htmlentities($part['description'],ENT_QUOTES); ?>
                </p>

                <a href="<?php  echo htmlentities($part['url'],ENT_QUOTES); ?>">Visiter leur site</a>
                
                
              </div>
              
              <p class="clear"></p>
            </div> 

        <?php 
          }

        ?>


        

  </div>
</section>
</main>

<?php include "templates/footer.php"; ?>
