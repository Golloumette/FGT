<?php ob_start(); ?>
<section class="talent">


  <img class="photo_profil" src="../Images/BDE.png" />
  <div class="description">

    <p> Ce site a pour objectif de mettre en avant nos différents profils et leurs divers talents. Tout au long de
      l'année à venir, nous afficherons une sélection de ces profils à travers des interviews. Notre but est de
      valoriser les talents de chacun, en présentant pour chaque profil une photo, son prénom, son âge, son cursus
      actuel, ainsi que l'école et le campus auxquels il est rattaché. Nous fournirons également une description unique
      pour chaque talent.</p>
  </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>