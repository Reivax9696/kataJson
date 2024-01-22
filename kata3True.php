<?php


$jsonEstudiants = file_get_contents('noms.json');


$llistaEstudiants = json_decode($jsonEstudiants, true);

$estudiants = array_map(function($nom) {
    return $nom['nom']. " " . $nom['cognom'];
}, $llistaEstudiants['alumnes']);

$activitats = ["Presentar Masterclass", "Shortcut de la setmana"];

foreach ($activitats as $activitat) {
    $randomEstudiant = $estudiants[array_rand($estudiants)];

    echo "Al estudiant " . $randomEstudiant . " li toca " . $activitat . "<br>";
}

?>