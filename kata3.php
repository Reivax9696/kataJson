<?php


$dataJson = json_decode(file_get_contents('noms.json'), true);

$estudiants = $dataJson['alumnes'];

$activitats = ["Presentar Masterclass", "Shortcut de la setmana"];


foreach ($estudiants as $estudiant){
    echo "Al estudiant " . $estudiants['nom'] . " li toca ". $activitats[(array_rand($activitats))]  . "<br>";
}

?>