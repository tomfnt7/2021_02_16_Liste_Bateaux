<?php



try {
    $db = new PDO('mysql:host=serveur.siovision.fr;dbname=20210309-1',
        '20210309-1',
        'Kjg2R6s02Edm'
    );
} catch (PDOException $e){
    echo 'Echec de la connexion : ' . $e->getMessage();
}
