<?php
include '../controllers/interviewCTRL.php'
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Interview</title>
    <link href="../css/interview.css" rel="stylesheet" />
</head>

<body>



    <div class="gauche">
        <img src="../images/portrait/<?php echo $listStudent[0]['photo'] ?>">


        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_prenom">Prénom :</label>
            <p style="margin: 0;"><?php echo $listStudent[0]['prenom']; ?></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_age">Age :</label>
            <p style="margin: 0;"><?php echo $listStudent[0]['age']; ?></p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_prenom">Cursus :</label>
            <p style="margin: 0;"><?php echo $listStudent[0]['nom_cursus']; ?></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_age">Ecole :</label>
            <p style="margin: 0;"><?php echo $listStudent[0]['nom']; ?></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_prenom">Campus :</label>
            <p style="margin: 0;"><?php echo $listStudent[0]['ville_campus']; ?></p>
        </div>

    </div>


    <div class="droites" style="display: flex; gap: 10px; align-items: center; ">
        <label for="user_age">Talent :</label>
        <p style="margin: 0;"><?php echo $listStudent[0]['talent']; ?></p>
    </div>


</body>

</html>