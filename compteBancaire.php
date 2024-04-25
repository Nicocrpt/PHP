<?php

    class CompteBancaire 
    {
        protected $_nom ;
        protected $_solde ;

        // Getters
        public function getNom(){return $this->_nom ;}
        public function getSolde(){return $this->_solde;}

        // Setters
        public function setNom($nom){$this->_nom = $nom;}
        public function setSolde($solde){$this->_solde = $solde;}

        //constructeur
        public function __construct($nom, $solde)
        {
            $this->_nom = $nom ;
            $this->_solde =$solde ;
        }


        //fonction debiter
        public function Debiter($somme)
        {
            $this->_solde = $this->_solde - $somme ;
        }

        //fonction Crediter
        public function Crediter($somme)
        {
            $this->_solde = $this->_solde + $somme ;
        }
    }


    class Livret_a extends CompteBancaire
    {
        private $_taux_interets ;

        public function getTaux(){return $this->_taux_interets ;}
        public function setTaux($taux){$this->_taux_interets = $taux ;}

        public function __construct($nom, $solde, $taux)
        {
            parent::__construct($nom, $solde);
            $this->_taux_interets = $taux ;
        }
        
        public function ToString(){echo "<br>Détenteur : " . $this->_nom . "<br>Solde Livret A : " . $this->getSolde() . "€" . "<br>Taux d'interets : " . $this->getTaux() . "%<br>";}

        public function CalculInterets($solde, $taux){return $solde*($taux/100);}
    }



    $livretA1 = new Livret_a("Pierre Dupont", 2784, 3.5);

    $livretA1->ToString();

    echo "<br>" . $livretA1->getSolde();
    echo "<br>" . $livretA1->getTaux()/100 . "<br>";

    $livretA1-> Crediter(1000) ;
    
    $livretA1->Debiter($livretA1->CalculInterets($livretA1->getSolde(), $livretA1->getTaux())) ;

    $livretA1->ToString();

    
?>
