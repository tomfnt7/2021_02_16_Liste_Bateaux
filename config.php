<?php
/**
 * @var string $db_host
 * * @var string $db_user
 * * @var string $db_name
 * * @var string $db_password
 */
header("Content-type : application/json");
require_once ("config.php");

try {
    $db = new PDO ('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
} catch (PDOException $e){
    echo 'Echec de la connexion : ' .$e->getMessage();
}

$req = "SELECT * FROM contatcts WHERE nom= :nom";
$res =$db-> prepare($req);
$s ="Humez";
$res->bindParam(':nom',$s,PDO::PARAM_STR);
$res->execute();

while ($data = $res->fetch(PDO::FETCH_ASSOC)){
    echo json_encode($data);
}