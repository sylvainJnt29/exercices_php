<?php

// $nomDuJoueur1 = "Jhon";
// $ageDuJoueur1 = 16;
// $sexeDuJoueur1 = true;
$joueur1 = [
    "nom" => "Jhon",
    "age" => 16,
    "sexe" => true
    ];

// $nomDuJoueur2 = "Sophie";
// $ageDuJoueur2 = 32;
// $sexeDuJoueur2 = false;
$joueur2 = [
    "nom" => "Sophie",
    "age" => 32,
    "sexe" => false
    ];

$joueur3 = [
    "nom" => [
        "Prénom" => "Jean",
        "Nom" => "Dujardin"],
    "age" => 58,
    "sexe" => true
    ];

$differenceAge =  calculDifferenceAge($joueur1["age"],$joueur2["age"]);


function afficherJoueur($nomDuJoueur,$ageDuJoueur,$sexeDuJoueur){

    echo "Nom du joueur  : " . $nomDuJoueur . "<br>" . "Age du joueur  : "  . $ageDuJoueur . "<br>";
    if ($sexeDuJoueur){
        echo "C'est un homme.<br>";
    } else {
        echo "C'est une femme.<br>";
    }
}

function afficherJoueurLePlusAge($ageDuJoueur1,$ageDuJoueur2){
    if($ageDuJoueur1>$ageDuJoueur2){
        echo "Le jouer 1 est le plus âgé.<br>";
    } else {
        echo "Le joueur 2 est le plus âgé.<br>";
    }
}

function calculDifferenceAge($ageDuJoueur1,$ageDuJoueur2){
    $resultat = $ageDuJoueur1 - $ageDuJoueur2;
    if($resultat < 0){
        $resultat = -$resultat;
    }
    return $resultat;
}

function afficherMajeur($age){
    switch($age){
        case 18 : echo "Le joueur est tout juste majeur.<hr>";
        break;
        case 19 : echo "Le joueur est un majeur.<hr>";
        break;
        case 32 : echo "Le joueur est un majeur.<hr>";
        break;
        case 60 : echo "Le joueur est un sénior.<hr>";
        break;
        case 16 : echo "Le joueur est un mineur.<hr>";
        break;
        default: echo "âge erronné!<hr>";
    }
}

// function afficherTableau($tab){
//     $nombreCasesTableau = count($tab);
//     for ($i=0; $i<$nombreCasesTableau;$i++){
//         echo $tab[$i] . "<br>";
//     }
// }
// function afficherTableau($tab){
//     foreach($tab as $indice => $value){
//         echo $indice ." : " . $value ."<br>";
//     }
//     echo "<hr>";
// }
function afficherTableau($tab){
    foreach($tab as $indice => $value){
        if(!is_array($value)){
            echo $indice ." : " . $value ."<br>";
        } else {
            afficherTableau($value);
        }
    }
}
// afficherJoueur($nomDuJoueur1,$ageDuJoueur1,$sexeDuJoueur1);
// afficherMajeur($ageDuJoueur1);
// afficherJoueur($nomDuJoueur2,$ageDuJoueur2,$sexeDuJoueur2);
// afficherMajeur($ageDuJoueur2);

// afficherJoueurLePlusAge($ageDuJoueur1,$ageDuJoueur2);

// echo "La différence d'âge est de : " . $differenceAge . " années. <hr>";

afficherJoueur($joueur1["nom"],$joueur1["age"],$joueur1["sexe"]);
afficherMajeur($joueur1["age"]);
afficherJoueur($joueur2["nom"],$joueur2["age"],$joueur2["sexe"]);
afficherMajeur($joueur2["age"]);


afficherJoueurLePlusAge($joueur1["age"],$joueur2["age"]);

echo "La différence d'âge est de : " . $differenceAge . " années. <hr>";

afficherTableau($joueur1);
echo "<hr>";
afficherTableau($joueur2);
echo "<hr>";
afficherTableau($joueur3);
echo "<hr>";
// echo $joueur3["nom"]["Prénom"];

// print_r($joueur1);
// print_r($joueur2);