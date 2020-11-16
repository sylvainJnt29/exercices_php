<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Affichage d'une pyramide</h1>

<form action="#" method="POST">
    <label for="hauteur">Hauteur de votre pyramide :</label>
    <input type="number" name="hauteur" id="hauteur" required min="1" autofocus>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["hauteur"]) && $_POST["hauteur"] >0 ){
        $hauteur = $_POST["hauteur"];
        $txt="";
        echo "<h2>Pyramide de hauteur ". $hauteur ." </h2>";
        for($i=0;$i<$hauteur;$i++){
            $txt .= "X ";
            echo $txt . "<br>";
        }
        for($i=0;$i<$hauteur-1;$i++){
            $txt = substr($txt,0,strlen($txt)-2);
            echo $txt . "<br>";
        }
    }else{
            echo ("<h2>Veuillez saisir une valeur.</h2>");
        }
?>

<?php
    include ("common/footer.php");
?>