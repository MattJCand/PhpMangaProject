
<?php
include "templates/header.php"; 
//Requete qui retourne toutes données d'un professeur
$recherche_prof= $bdd->query("SELECT * FROM professeur");
?>

<h1 class="majuscule text-center">A propos</h1>

<section id="presentation">
  <div class="container">
    <div class="bloc-presentation-partie">

      <h2>Le manga pour tous!</h2>
      <p>
        Vous aimez les mangas ? Vous rêvez de pouvoir créer le vôtre ? Planète Manga vous propose des cours et des ateliers de création en plein coeur de Muret !
      </p>

    </div>
    <div class="bloc-presentation-partie">

       <p>
        Ensemble, ils réunissent leur savoir faire pour proposer des cours et des ateliers inédits à Muret :
      </p>
      <p>
        <b>
          Créer son propre manga et découvrir les secrets de cet univers fantastique !
        </b>
      </p>

    </div>
   
    
  </div>
</section>

<section id="equipe">

  <h2 class="majuscule text-center">L'équipe</h2>
  
  <div class="container">


  <!--   
    <div class="bloc-professeur">
      <div class="bloc-img-prof">
        <img src="asset/img/professeur/anthony.png" alt="anthony" class="img-adapte">
      </div>
      <div class="description-professeur">
        <h3 class="majuscule">ANTHONY PREZMAN</h3>
        <h4>Traducteur</h4>

        <p>
          Traducteur officiel de mangas depuis plus de 20 ans, il a traduit Neon Genesis Evangelion (anime + manga), Dr Slump, Claymore, One Piece, Jojo’s bizarre adventure (anime + manga), Kokkoku, L’école emportée…
        </p>
        <p>
          Il a été rédacteur pour la revue AnimeLand et le journal Les Années Laser.
        </p>
        <p>
            Il a travaillé en tant que conseiller et assistant éditorial pour les éditions Glénat durant 8 ans.
        </p>
        
      </div>
    </div>



    <div class="bloc-professeur">
      <div class="bloc-img-prof">
        <img src="asset/img/professeur/malou.png" alt="malou" class="img-adapte">
      </div>
      <div class="description-professeur">
        <h3 class="majuscule">ANGRY PANDA</h3>
        <p>
          Diplômée de l'IPESAA à Montpellier, elle obtient le 1er prix de dessin en cours analytique et dispense depuis 2 ans des cours de dessin à tous niveaux et à tout âge.
        </p>
        <p>
          Elle enseigne à la fois le dessin traditionnel (graphite, mine de plomb, encre de chine, fusain, sanguine, aquarelle, acrylic), le dessin numérique  et le graphisme .
      </p>
      </div>
      
    </div>
 -->

  <?php 
    

    while($professeur= $recherche_prof->fetch(PDO::FETCH_ASSOC))
    {
        echo '<div class="bloc-professeur">';
        echo '<div class="bloc-img-prof">';
        echo '<img src="" class="img-adapte" alt="'.htmlentities($professeur['prenom'], ENT_QUOTES).'"></div>';
        echo '<div class="description-professeur">';
        echo '<h3 class="majuscule">'.htmlentities($professeur['prenom'], ENT_QUOTES).' '.htmlentities($professeur['nom'], ENT_QUOTES).'</h3>';
        echo '<h4>'.htmlentities($professeur['profession'], ENT_QUOTES).'</h4>';
        echo '<p class="email-prof">'.htmlentities($professeur['email'], ENT_QUOTES).'</p>';
        echo '<p>'.htmlentities($professeur['description'], ENT_QUOTES).'</p>';
        echo '</div>';
        echo '</div>';
    }

  ?>
  

    

  </div>


</section>



<?php include "templates/footer.php"; ?>
