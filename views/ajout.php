<?php ob_start(); ?>
<body>

                    <h2>Ajout de présentation</h2>
                    <br>
                    <br>
                    <div class="form-group-row">
                        <div class="group-label">
                            <label for="user_prenom"> Prénom :</label>
                        </div>
                        <div class="group-input">
                            <input type="text" id="user_prenom" name="user_prenom" value="" required />
                        
                    </div
                    ><br>
                    <div class="form-group-row">
                        <div class="group-label">
                            <label for="talent_age"> Age :</label>
                        </div class="group-input">
                            <input type="number" id="talent_age" name="talent_age" value="" required />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group-row">
                        <div class="group-label">
                            <label for="user_talent"> Talent :</label>
                        </div>
                        <div class="group-input">
                            <input type="text" required minlength="15" size="200" value="" required />
                    <br>
                     <br>
                    <div class="form-group-row">
                        <div class="group-label">
                            <label for="user_prenom"> Image :</label>
                <br>
                        </div>
                        <div class="group-input">
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
            <div>
                <button id=btValider>Valider l'ajout</button>

            </div>
        </div>
     
</body>

<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>