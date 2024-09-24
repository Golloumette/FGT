<?php ob_start(); ?>
  <section class = "talent">

    <img class="photo_profil" src="../Images/BDE.png" />
    <div class="description">
 
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta velit a sodales vestibulum. Vestibulum
        interdum, massa in sodales auctor, lorem nibh feugiat ante, ut placerat ante ex non ipsum. Nulla non scelerisque
        purus, id rutrum ipsum. Proin eu ex elementum, vulputate orci id, gravida tortor. Maecenas congue blandit
        interdum. Suspendisse eget enim eu est finibus tempus. Donec dignissim in lectus eget pretium. Morbi interdum
        aliquet magna, in ultrices quam facilisis et. Sed elementum vitae lectus vitae porta. Praesent ut ex viverra dui
        tempus volutpat et nec lectus. In ut ipsum porttitor, aliquet lectus in, placerat leo. Morbi lobortis ultricies
        leo non semper.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta velit a sodales vestibulum. Vestibulum
        interdum, massa in sodales auctor, lorem nibh feugiat ante, ut placerat ante ex non ipsum. Nulla non scelerisque
        purus, id rutrum ipsum. Proin eu ex elementum, vulputate orci id, gravida tortor. Maecenas congue blandit
        interdum. Suspendisse eget enim eu est finibus tempus. Donec dignissim in lectus eget pretium. Morbi interdum
        aliquet magna, in ultrices quam facilisis et. Sed elementum vitae lectus vitae porta. Praesent ut ex viverra dui
        tempus volutpat et nec lectus. In ut ipsum porttitor, aliquet lectus in, placerat leo. Morbi lobortis ultricies
        leo non semper.</p>
    </div>

  </section>

  <?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>
