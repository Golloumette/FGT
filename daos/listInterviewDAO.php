<?php


function lastInsert (PDO $pdo) :array{
        $listStudent = array();
        try{
         //  $sql="SELECT *FROM studenttalent ORDER BY id DESC LIMIT 5";
             $sql2="SELECT DISTINCT studenttalent.prenom,
             studenttalent.age,
             ecole.nom,
             campus_ville.ville_campus,
             cursus.nom_cursus,
             studenttalent.talent,
             studenttalent.photo
              FROM studenttalent 
             INNER JOIN cursus ON studenttalent.cursus_ID = cursus.id
             INNER JOIN campus_ville ON studenttalent.campus_id =campus_ville.ID
             INNER JOIN ecole ON studenttalent.cursus_ID = cursus.ID ORDER BY studenttalent.id DESC LIMIT 5 ";
            $cursor = $pdo->query($sql2);
            $listStudent = $cursor->fetchAll(PDO::FETCH_ASSOC);

        }catch (PDOException $e) {
                $message = array("message" => $e->getMessage());
                $list[] = $message;
            }
           return $listStudent;
        }
 

       