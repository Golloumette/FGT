<?php
ob_start();
include '../controllers/listeCTRL.php'; ?>

<body>

    <h2>Ajout de présentation</h2>
    <br>
    <br>
    <form method="post" action="../controllers/insertInterviewCTRL.php" enctype="multipart/form-data">
        <div class="form-group-row">
            <div class="group-label">
                <label for="user_prenom"> Prénom :</label>
            </div>
            <div class="group-input">
                <input type="text" id="user_prenom" name="user_prenom" value="Margaux" required />

            </div>
            <br>
            <div class="form-group-row">
                <div class="group-label">
                    <label for="talent_age">Age :</label>
                </div>
                <div class="group-input">
                    <input type="text" id="user_age" name="user_age" value="21" required />
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="form-group-row">
            <div class="group-label">
                <label for="user_talent"> Talent :</label>
            </div>
            <div class="group-input">
                <input type="text" name="user_talent" required minlength="15" size="100%" value="pro du sport" required />
                <br>
                <br>
                <div class="form-group-row">
                    <div class="group-label">
                        <label for="user_photo"> Image :</label>
                        <br>
                    </div>
                    <div class="group-input">
                        <input type="file" id="user_photo" name="user_photo" value="margaux.jpg" required />
                        <br>
                        <br>
                        <label for="ecole">Ecole :</label>
                        <select id="ecole" name="ecole">
                            <?php echo $contentEcole;  ?>
                        </select>
                        <br>
                        <br>

                        <label for="campus">Campus :</label>
                        <select id="campus" name="campus">
                            <?php echo $contentCampus; ?>
                        </select>
                        <br>
                        <br>
                        <label for="cursus">Cursus :</label>
                        <select id="cursus" name="cursus">
                            <?php echo $contentCursus; ?>
                        </select>
                        <div>
                            <button id=btValider name="btValider" type="submit">Valider l'ajout</button>

                        </div>


    </form>
    <br>
    <br>
    <br>

    </div>

    <?php if (isset($message)) {
        echo $message;
    }; ?>
</body>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>