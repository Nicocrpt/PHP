<?php
    class voiture 
    {
        public $color ;


        private $_marque;
        private $_modele;
        private $_km ;

        public function setMarque($marque) {$this->_marque = $marque;}
        public function getMarque() {return $this->_marque;}

        public function setModele($modele) {$this->_modele = $modele;}
        public function getModele() {return $this->_modele;}

        public function setKm($km) {$this->_km = $km;}
        public function getKm() {return $this->_km;}

        public function getAll() {return "<br>$this->_marque $this->_modele $this->color - $this->_km km";}

        public function __voiture($marque, $modele, $couleur, $km)
        {
            $this->_marque = $marque ;
            $this->_modele = $modele ;
            $this->color = $couleur ;
            $this->_km = $km ;
        }
    }

?>




<?php

    $voiture1 = new voiture() ;
    $voiture2 = new voiture("Dacia", "Sandero", "Rouge", 60000) ;

    $voiture1->setMarque("Renault");
    $voiture1->setModele("Clio II");
    $voiture1->color = 'gris(e)' ;
    $voiture1->setKm(126000) ;

    echo $voiture1->getAll() ;
    echo $voiture2->getAll() ;
?>