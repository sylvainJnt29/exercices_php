<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Affichage des tables de multiplication</h1>

<form action="#" method="GET">
    <label for="table">Table de multiplication :</label>
    <input type="number" name="table" id="table" required min="1" autofocus>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_GET["table"])){
        echo "<h2>La table de " . $_GET["table"] ."</h2>";
        for($i=1; $i<=10; $i++){
            echo $i . " * " . $_GET["table"] . " = " . $i*$_GET["table"] ."<br>";
        }
    } else {
        echo ("<h2>Veuillez saisir une valeur.</h2>");
    }

?>

<?php
    include ("common/footer.php");
?>