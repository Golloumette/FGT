
<?php


function selectAllCampus(PDO $pdo): array {
    $list = array();
    try {
        $sql="SELECT * FROM campus_ville" ;
        $cursor = $pdo->query($sql);
        // nouvelle requete avec jointure
        // Renvoie un tableau ordinal de tableaux associatifs
    $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
    // tableau en 2D
    return $list;
} /**FIN DE FONCTION SELECT ALL **/