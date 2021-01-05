<?php
require_once("classes/personnage.class.php");
    include ("common/header.php");
    include ("common/menu.php");
?>

<h2>Personnage :</h2>

<?php

$p1 = new Personnage("Kévin",22,Personnage::HOMME,Personnage::FORCE_MAX,Personnage::AGILITE_MIN,"perso1.png");

$p2 = new Personnage("Brenda",24,Personnage::FEMME,Personnage::FORCE_MED,Personnage::AGILITE_MED,"perso2.png");
$p2->setNom("Britanny");

$p3 = new Personnage("Brad",30,Personnage::HOMME,Personnage::FORCE_MIN,Personnage::AGILITE_MAX,"perso3.png");

$persos = (Personnage::getListePersonnages());

foreach ($persos as $perso){
    $perso->afficherMesInformationsTemplate();
    echo "<hr>";
}

?>


<?php
    include ("common/footer.php");
?>

