<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Sélection d'une image</h1>
<div id="mep">
<form action="#" method="POST">
    <label for="perso">Sexe : <br></label>
    <select name="perso" id="perso">
        <option value="masculin">Homme</option>
        <option value="feminin">Femme</option>
    </select>
    <br>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST["perso"])){
        if($_POST["perso"] === "masculin"){
            echo "<br><img src='sources/images/male.png' alt='image masculine'>";
        } elseif($_POST["perso"] === "feminin"){
            echo "<br><img src='sources/images/female.png' alt='image féminine'>";
        }
    }else{
            echo ("<h2>Veuillez faire un choix.</h2>");
        }
?>
</div>
<?php
    include ("common/footer.php");
?>