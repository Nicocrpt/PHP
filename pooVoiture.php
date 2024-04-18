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

        public function getAll() {return "$this->_marque $this->_modele $color - $this->_km km";}
    }

?>




<?php
    $voiture1 = new voiture() ;

    $voiture1->setMarque("Renault");
    $voiture1->setModele("Clio II");
    $voiture1->color = 'gris(e)' ;
    $voiture1->setKm(12600) ;

    echo $voiture1->getAll() ;
?>