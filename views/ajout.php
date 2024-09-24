<?php ob_start(); ?>
<body>
    <section class="ajout">
        <h2>Ajout de présentation</h2>
        <br>
        <br>
        <label for="user_prenom"> Prénom :</label>
        <br>
        <input type="text" id="user_prenom" name="user_prenom" value="" required />      
        <br>
        <label for="talent_age"> Age :</label>
        <br>
        <input type="number" id="talent_age" name="talent_age" value="" required />                
        <br>
        <br>           
        <label for="user_talent"> Talent :</label>
        <br>                 
        <input type="text" required minlength="15" size="100%" value="" required />
        <br>
        <br>          
        <label for="user_prenom"> Image :</label>
        <br>          
        <input type="file" id="talent_Image" name="talent_Image" value="" required /> 
        <br>
        <br>       
        <label for="genre">Genre :</label>
        <select id="genre" name="genre">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>
        <br>
        <br> 
        <label for="CAMPUS">Campus :</label>
        <select id="CAMPUS" name="Campus">
            <option value="Lille">Lille</option>
            <option value="autre">Autre</option>
        </select>          
        </form>
        <br>
        <br>
        <br>
        <button id=btValider>Valider l'ajout</button>
    </section>
</body>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>