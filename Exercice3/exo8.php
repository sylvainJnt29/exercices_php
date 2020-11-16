<?php
    include ("common/header.php");
    include ("common/menu.php");

    $perso1 = ["Kévin", 27,true,5,4];
    $perso2 = ["Brenda", 24,false,3,6];
    $perso3 = ["Brad", 30,true,7,2];
?>
<h1>Sélection d'un personnage</h1>

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
        echo "Nom : " . $personnage[0] . "<br>";
        echo "Age : " . $personnage[1] . "<br>";
        if($personnage[2]){echo "Sexe : Homme<br>";
        }else{
            echo "Sexe : Femme<br>";
        }
        echo "Force : " . $personnage[3] . "<br>";
        echo "Agilité : " . $personnage[4] . "<br>";
    }
    
?>

<?php
    include ("common/footer.php");
?>