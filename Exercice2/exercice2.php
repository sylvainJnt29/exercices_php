
    <!-- <h1 class="titreBleu">Coucou</h1>
    <h1 class="titreRouge">Coucou</h1>
    <h2>Coucou</h2>
    <h3>Coucou</h3>
    <h4>Coucou</h4>
    <h5>Coucou</h5>
    <h6>Coucou</h6>
    <p class="background-colorP">Lorem ipsum dolor <b>sit amet consectetur adipisicing</b>  elit. Optio expedita pariatur
     doloribus quisquam magni quod. Pariatur blanditiis necessitatibus totam eum itaque,
      expedita voluptas,  <strong>neque magni nihil</strong>  fugiat est dolorum reprehenderit.
    </p>
    <p class="background-colorP2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatem inventore atque
         excepturi ipsa quas nostrum, mollitia nobis facere sit quam exercitationem quo dicta
          omnis nulla officia, possimus expedita architecto?
    </p>

    <input type="button" value="changeColor" class="changeColor">
    <br><br>
    <img src="sources/images/moto.jpg" alt="Image de moto" id="img_moto">
    <script src="main.js"></script> -->
    <!-- <div id="block">
        <h1>Manipulation de formulaire</h1>
        <form action="#" method="GET">
            <fieldset>
                <legend>Informations</legend>
                    <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" required>
                    <label for="age">Age :</label>
                        <input type="number" name="age" id="age" required>
                    <input type="submit" value="Envoyer">
            </fieldset>
        </form>
        <?php
            
            if(isset($_GET["nom"]) AND isset($_GET["age"])){
                echo " <hr>Le nom saisi est : <strong>" . $_GET["nom"] . "</strong><br> L'âge saisi est : <strong>" .$_GET['age'] ."</strong>" ;
            }
        ?>
    </div> -->
<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
    <div id="block">
        <h1>Manipulation de formulaire</h1>
        <form action="#" method="POST">
            <fieldset>
                <legend>Informations</legend>
                    <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" required>
                    <label for="age">Age :</label>
                        <input type="number" name="age" id="age" required min="0">
                    <input type="submit" value="Envoyer">
            </fieldset>
        </form>
        <?php
            
            if(isset($_POST["nom"]) AND isset($_POST["age"])){
                echo " <hr>Le nom saisi est : <strong>" . $_POST["nom"] . "</strong><br> L'âge saisi est : <strong>" .$_POST['age'] ."</strong>" ;
            }
        ?>
    </div>
<?php
    include ("common/footer.php");
?>