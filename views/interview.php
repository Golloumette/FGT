<?php
include '../controllers/interviewCTRL.php'
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Interview</title>
    <link href="../css/interview.css" rel="stylesheet" />  
    <script src="../js/interview.js" defer></script>
</head>

<body>

     <div class="corps">
    <div class="gauche">
       <img id="photo" src="" height="150px" alt="Portrait de l'étudiant">

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_prenom">Prénom :</label>
            <p style="margin: 0;" id="prenom"></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_age">Age :</label>
           <p style="margin: 0;" id="age"></p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_prenom">Cursus :</label>
            <p style="margin: 0;" id="nom_cursus"></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <label for="user_age">Ecole :</label>
            <p style="margin: 0;" id="nom"></p>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
             <label for="ville_campus">Campus :</label>
        <p style="margin: 0;" id="ville_campus"></p>
        </div>

    </div>


    <div class="droites" style="display: flex; gap: 10px; align-items: center; ">
         <label for="talent">Talent :</label>
    <p style="margin: 0;" id="talent"></p>
   
    </div>
     <div class="img_Farfadet">
     <img class="image-fartadet " src="../Images/BDE.png" />
     </div>
    </div>

<script> const listStudent = <?php echo $jsonData ?>;
console.log(listStudent)</script>
</body>
</html>
