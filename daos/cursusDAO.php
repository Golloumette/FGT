<?php

function selectAllCursus(PDO $pdo): array {
    $list = array();
    try {
        $sql="SELECT * FROM cursus" ;
        $cursor = $pdo->query($sql);
         
    $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
    // tableau en 2D
    return $list;
} /**FIN DE FONCTION SELECT ALL **/