<?php
    include ("common/header.php");
    include ("common/menu.php");

    $perso1 = [
        "Nom" => "Kévin",
        "Img" => "perso1.png",
        "Age" => 27,
        "Sexe" => true,
        "Force" => 5,
        "Agilité" => 4
        ];
    $perso2 = [
        "Nom" => "Brenda",
        "Img" => "perso2.png",
        "Age" => 24,
        "Sexe" => false,
        "Force" => 3,
        "Agilité" =>6
        ];
    $perso3 = [
        "Nom" => "Brad",
        "Img" => "perso3.png",
        "Age" => 30,
        "Sexe" => true,
        "Force" => 7,
        "Agilité" =>2
        ];

    $persos = [$perso1,$perso2,$perso3];
?>
<h1>Afichage des personnages </h1>
<em>( en utilisant un tableau de tableau ( multidimentionnel ) )</em><br><br>

<h2>Personnage :</h2>

<?php
    foreach($persos as $perso){
            echo "<div class='gauche'>";
            echo "<img src='sources/images/".$perso['Img']."' alt='".$perso['Img']."'>";
            echo "</div>";
            echo "<div class='gauche'>";
            afficherPerso($perso);
            echo "</div>";
            echo "<div class='clearB'></div>";
    }
            // echo "<div class='gauche'>";
            // echo "<img src='sources/images/perso1.png' alt='image perso1'>";
            // echo "</div>";
            // echo "<div class='gauche'>";
            // afficherPerso($perso1);
            // echo "</div>";
            // echo "<div class='clearB'></div>";

    function afficherPerso($personnage){

        foreach($personnage as $index => $valeur){
            if($index !== "Img" && $index !== "Sexe"){
            echo "<b>". $index ."</b> : " . $valeur ."<br>";
            }
            if($index === "Sexe"){
                echo "<b>Sexe</b> : ";
                if($valeur){
                    echo "Homme <br>";
                } else {
                    echo "Femme <br>";
                }
            }
        }
    }
    
?>

<?php
    include ("common/footer.php");
?>