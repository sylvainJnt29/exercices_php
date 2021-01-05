<?php 

class Personnage{

    private static $personnages = [];

    private $nom;
    private $img;
    private $age; 
    private $sexe; 
    private $force; 
    private $agilite;

    const HOMME = true;
    const FEMME = false;

    const FORCE_MAX = 6;
    const FORCE_MED = 5; 
    const FORCE_MIN = 4;

    const AGILITE_MAX = 6;
    const AGILITE_MED = 5; 
    const AGILITE_MIN = 4;  


    function __construct($nom,$age,$sexe,$force,$agilite,$img)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->img = $img;
        self::$personnages[] = $this;
    }

    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom = $nom;
    }

    function getImg(){
    return $this->img;
    }
    function setImg($img){
        $this->img = $img;
    }   
    
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }    
    
    function getSexe(){
        return $this->sexe;
    }
    function setSexe($sexe){
        $this->sexe = $sexe;
    }   

    function getForce(){
        return $this->force;
    }
    function setForce($force){
        $this->force = $force;
    }  
    
    function getAgilite(){
        return $this->agilite;
    }
    function setAgilite($agilite){
        $this->agilite = $agilite;
    }

    public function afficherMesInfos(){
        echo "<b>Nom :</b> " . $this->nom . "<br>";
        echo "<b>Age :</b> " . $this->age . "<br>";
        if($this->sexe){
                    echo "Homme <br>";
                } else {
                    echo "Femme <br>";
                }
        echo "<b>Force :</b> " . $this->force . "<br>";
        echo "<b>Agilité :</b> " . $this->agilite . "<br>";
    }

    public function afficherMesInformationsTemplate(){
        echo "<div class='gauche'>";
        echo "<img src='sources/images/".$this->img."' alt='".$this->img."'>";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherMesInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    public static function getListePersonnages(){
        return self::$personnages;
    }

}

?>