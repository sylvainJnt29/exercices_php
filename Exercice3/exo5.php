<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Calculer une moyenne</h1>

<form action="#" method="GET">
    <label for="nb">Nombre de notes :</label>
    <input type="number" name="nb" id="nb" required min="1" autofocus>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_GET["nb"]) && $_GET["nb"] >0 ){
        $nbNotes = $_GET['nb'];
        echo "<form action=\"#\" method=\"POST\">";
            for($i = 1; $i <= $nbNotes; $i++){
                echo "<label for=\"note".$i."\">Note ". $i ." :</label><br>";
                echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required min=\"0\" autofocus><br>";
            }
        echo "<hr><input type=\"submit\" value=\"Calculer\">";
        echo "</form>";
        if(isset($_POST['note1'])){
            $resultat = 0;
            for($i=1;$i<=$nbNotes;$i++){
                $resultat += $_POST['note'.$i];
            }
            echo "La moyenne est de : <b>" . $resultat / $nbNotes ."</b>";
        }
    } else {
        echo "<h2>Veuillez saisir un nombre dans le champ ci-dessus.</h2>";
    }
?>

<?php
    include ("common/footer.php");
?>