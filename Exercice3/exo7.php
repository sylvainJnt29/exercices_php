<?php
    include ("common/header.php");
    include ("common/menu.php");
?>
<h1>Tableaux</h1>

<?php
    $tab = [2,6,12,5,26,34,40,60];

    echo "Le tableau est le suivant :<br> [2,6,12,5,26,34,40,60]<br>";

    if(checkTab($tab)){
        echo "Le tableau ne contient que des valeurs paires.<br>";
    } else {
        echo "Le tableau contient des valeurs impaires.<br>";
    }

    $tab2 = [2,4,6,8,10];

    echo "Le tableau n°2 est le suivant :<br> [2,4,6,8,10]<br>";

    if(checkTab($tab)){
        echo "Le tableau ne contient que des valeurs paires.<br>";
    } else {
        echo "Le tableau contient des valeurs impaires.<br>";
    }

    function checkTab($tableau){
        for($i=0;$i<count($tableau);$i++){
            if($tableau[$i] % 2 !== 0){
                return false;
            }
        }
        return true;
    }
?>

<?php
    include ("common/footer.php");
?>