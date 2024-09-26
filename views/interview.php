<?php
include '../controllers/interviewCTRL.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Interview</title>  
    <script src="../js/interview.js" defer></script>
</head>
<body>
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
    <label for="user_prenom">Campus :</label>
    <p style="margin: 0;" id="ville_campus"></p>
</div>

<div style="display: flex; gap: 10px; align-items: center;">
    <label for="user_age">Talent :</label>
    <p style="margin: 0;" id="talent"></p>
</div>
<img id="photo" src="" height="150px" alt="Portrait de l'étudiant">


<script> const listStudent = <?php echo $jsonData ?>;
console.log(listStudent)</script>
</body>
</html>

  
