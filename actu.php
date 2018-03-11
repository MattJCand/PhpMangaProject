<?php include "templates/header.php"; 
//Requete qui retourne toutes données d'une actualité
$recherche_actu= $bdd->query("SELECT *, date_format(date_actu, '%d/%m/%Y') AS date_fr FROM actualite");

?>
<main>
  <h1 class="text-center majuscule">Actualité</h1>

  
<div class="container">

      <div class="bloc-actu">
        <div class="bloc-img-actu">
          <img class="img-adapte" src="asset/img/wonderwoman.png" alt="ww">
        </div>
        <div class="bloc-description-actu">
          <h4>
            Comic Days : La nouvelle application de manga en ligne de Kôdansha (Atsushi NAKAYAMA, Hikaru NAKAMURA, Jun WATANABE, Parasite)
          </h4>
          <?php 
          $texte="<p class='description-actu'>
            C’est aujourd’hui que l’on apprend que Comic Days, la nouvelle application de manga en ligne de l’éditeur Kôdansha, va être lancée le 1er mars prochain. Le logo de cette application est signé par Katsuhiro OTOMO, l’auteur de Akira.C’est aujourd’hui que l’on apprend que Comic Days, la nouvelle application de manga en ligne de l’éditeur Kôdansha, va être lancée le 1er mars prochain. Le logo de cette application est signé par Katsuhiro OTOMO, l’auteur de Akira.

         
          ";
          echo substr($texte, 0,350).'...'.'<a href="">En savoir plus</a></p>';
          ?>

        
          
          <p class="date-actu">20 mars 2018</p>
        </div>
        
        <p class="clear"></p>
      </div>
  
      <div class="bloc-actu">
        <div class="bloc-img-actu">
          <img class="img-adapte" src="asset/img/abstract6.png" alt="ww">
        </div>
        <div class="bloc-description-actu">
          <h4>
            Comic Days : La nouvelle application de manga en ligne de Kôdansha (Atsushi NAKAYAMA, Hikaru NAKAMURA, Jun WATANABE, Parasite)
          </h4>
          <?php 
          $texte="<p class='description-actu'>
            C’est aujourd’hui que l’on apprend que Comic Days, la nouvelle application de manga en ligne de l’éditeur Kôdansha, va être lancée le 1er mars prochain. Le logo de cette application est signé par Katsuhiro OTOMO, l’auteur de Akira.C’est aujourd’hui que l’on apprend que Comic Days, la nouvelle application de manga en ligne de l’éditeur Kôdansha, va être lancée le 1er mars prochain. Le logo de cette application est signé par Katsuhiro OTOMO, l’auteur de Akira.

         
          ";
          echo substr($texte, 0,350).'...'.'<a href="">En savoir plus</a></p>';
          ?>

          
          <p class="date-actu">20 mars 2018</p>
        </div>
        
        <p class="clear"></p>
      </div> 


      <?php
        while($actu= $recherche_actu->fetch(PDO::FETCH_ASSOC))
          {
      ?>
          <div class="bloc-actu">
            <div class="bloc-img-actu">
              <img class="img-adapte" src="<?php htmlentities($actu['img_actualite']);  ?>" alt="<?php echo htmlentities($actu['titre']); ?>">
            </div>
            <div class="bloc-description-actu">
              <h4>
                <?php echo htmlentities($actu['titre']); ?>
              </h4>
              <?php 
              $texte=htmlentities($actu['description']);
              echo substr($texte, 0,350).'...'.'<a href="">En savoir plus</a></p>';
              ?>

              
              <p class="date-actu"><?php echo htmlentities($actu['date_fr']); ?></p>
            </div>
            
            <p class="clear"></p>
          </div>
      <?php
          }
      ?>

    

</div>

</main>
<?php include "templates/footer.php"; ?>
