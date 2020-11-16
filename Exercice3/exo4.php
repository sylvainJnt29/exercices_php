<?php
    include ("common/header.php");
    include ("common/menu.php");

    session_start();
    if(!isset($_SESSION['random'])){
    $_SESSION['random'] = rand(1,100);
    }
?>
<h1>Trouvez le nombre choisi par l'ordinateur !</h1>

<form action="#" method="POST">
    <label for="nombre">Quel est le nombre ? ( entre 1 et 100 ) </label>
    <input type="number" name="nombre" id="nombre" required min="1" max="100" autofocus>
    <input type="submit" value="Envoyer">
</form>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser">
</form>

<?php
if(isset($_POST["reinit"]) && $_POST["reinit"] === "yes" ){
$_SESSION['random'] = rand(1,100);
}
$random = $_SESSION['random'];
    if(isset($_POST["nombre"]) && $_POST["nombre"] >0 ){
        $chiffreSaisi = (int)$_POST["nombre"];
        if($random === $chiffreSaisi) {
            echo "<b>C'est gagné !</b>";
        } else {
            if($random > $chiffreSaisi){
                echo "<b>Le chiffre est plus grand.</b>";
            } else {
                echo "<b>Le chiffre est plus petit.</b>";
            }
        }
    }else{
            echo ("<b>Veuillez saisir une valeur.</b>");
        }
?>

<?php
    include ("common/footer.php");
?>