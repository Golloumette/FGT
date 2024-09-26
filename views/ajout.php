<?php
ob_start();
include '../controllers/listeCTRL.php'; ?>

<body>
    <section class="ajout">

        <h2>Ajout de présentation</h2>

        <form method="post" action="../controllers/insertInterviewCTRL.php" enctype="multipart/form-data">

            <div class="test">
                <label for="user_talent"> Talent :</label><br>
                <textarea name="user_talent" value="pro du sport" required name="textarea" rows="10"
                    cols="50" value="sauve des gens en slip !! "></textarea><br>

                <label for="user_photo"> Image :</label><br>
                <input type="file" id="user_photo" name="user_photo" value="" required /><br><br>
            </div>

            <label for="user_prenom"> Prénom :</label><br>
            <input type="text" id="user_prenom" name="user_prenom" value="Superman" required /><br><br>

            <label for="talent_age">Age :</label><br>
            <input type="text" id="user_age" name="user_age" value="85" required /><br><br>

            <label for="ecole">Ecole :</label>
            <select id="ecole" name="ecole">
                <?php echo $contentEcole; ?>
            </select><br><br>

            <label for="campus">Campus :</label>
            <select id="campus" name="campus">
                <?php echo $contentCampus; ?>
            </select> <br><br>

            <label for="cursus">Cursus :</label>
            <select id="cursus" name="cursus">
                <?php echo $contentCursus; ?>
            </select><br><br>

            <button id=btValider name="btValider" type="submit">Valider l'ajout</button>

        </form>
    </section>

    <?php if (isset($message)) {
        echo $message;
    }
    ; ?>

</body>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>