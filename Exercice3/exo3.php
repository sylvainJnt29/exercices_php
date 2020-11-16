<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Cercle : Périmètre et Aire</h1>

<form action="#" method="POST">
    <label for="rayon">Rayon du cercle :</label>
    <input type="number" name="rayon" id="rayon" required min="1" autofocus>
    <br>
    <label for="perimetre">Périmètre :</label>
    <input type="checkbox" name="perimetre" id="perimetre" checked>
    <br>
    <label for="aire">Aire :</label>
    <input type="checkbox" name="aire" id="aire" checked>
    <br>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["rayon"]) && $_POST["rayon"] >0 ){
        $rayon = $_POST["rayon"];
        echo "Pour un rayon de <b>" . $rayon ." cm : </b><br>";
        if(isset($_POST["perimetre"])){
            echo "Le périmètre sera de : <b>". round(($rayon * 2 * pi()),2) ."</b> cm.<br>";
        }
        if(isset($_POST["aire"])){
            echo "L'aire du cercle sera de : <b>". round(($rayon * $rayon * pi()),2) ."</b> cm.";
        }

    } else {
        echo ("<h2>Veuillez saisir une valeur.</h2>");
    }

?>

<?php
    include ("common/footer.php");
?>