<?php
    include ("common/header.php");
    include ("common/menu.php");

    $perso1 = [
        "Nom" => "Kévin",
        "Age" => 27,
        "Sexe" => "Homme",
        "Force" => 5,
        "Agilité" => 4
        ];
    $perso2 = [
        "Nom" => "Brenda",
        "Age" => 24,
        "Sexe" => "Femme",
        "Force" => 3,
        "Agilité" =>6
        ];
    $perso3 = [
        "Nom" => "Brad",
        "Age" => 30,
        "Sexe" => "Homme",
        "Force" => 7,
        "Agilité" =>2
        ];
?>
<h1>Sélection d'un personnage</h1>
<em>( en utilisant un tableau associatif )</em><br><br>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" onchange="submit()">
        <option value="perso1" <?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso1") echo "selected" ?>>Kévin</option>
        <option value="perso2" <?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso2") echo "selected" ?>>Brenda</option>
        <option value="perso3" <?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso3") echo "selected" ?>>Brad</option>
    </select>
    <br>
</form>

<h2>Personnage :</h2>

<?php

        if(!isset($_POST["perso"]) || $_POST["perso"] === "perso1"){
            echo "<div class='gauche'>";
            echo "<img src='sources/images/perso1.png' alt='image perso1'>";
            echo "</div>";
            echo "<div class='gauche'>";
            afficherPerso($perso1);
            echo "</div>";
        } elseif($_POST["perso"] === "perso2"){
            echo "<div class='gauche'>";
            echo "<img src='sources/images/perso2.png' alt='image perso2'>";
            echo "</div>";
            echo "<div class='gauche'>";
            afficherPerso($perso2);
            echo "</div>";
        } elseif($_POST["perso"] === "perso3"){
            echo "<div class='gauche'>";
            echo "<img src='sources/images/perso3.png' alt='image perso3'>";
            echo "</div>";
            echo "<div class='gauche'>";
            afficherPerso($perso3);
            echo "</div>";
        }

    echo "<div class='clearB'></div>";

    function afficherPerso($personnage){
        // echo "Nom : " . $personnage[0] . "<br>";
        // echo "Age : " . $personnage[1] . "<br>";
        // if($personnage[2]){echo "Sexe : Homme<br>";
        // }else{
        //     echo "Sexe : Femme<br>";
        // }
        // echo "Force : " . $personnage[3] . "<br>";
        // echo "Agilité : " . $personnage[4] . "<br>";
        foreach($personnage as $index => $valeur){
            echo "<b>". $index ."</b> : " . $valeur ."<br>";
        }
    }
    
?>

<?php
    include ("common/footer.php");
?>